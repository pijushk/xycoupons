<?php

namespace App\Http\Controllers;

use App\Category;
use App\Coupon;
use App\Slider;
use App\Store;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //

    public function index()
    {
        $this->data['slider'] = $this->getHomeSlider();
        $this->data['popularCategory'] = $this->getFeaturedCategory();
        $this->data['featuredCoupons'] = $this->getFeaturedCoupons();
        $this->data['featuredStore'] = $this->getFeaturedStores();
        return view('pages.index')->with('data', $this->data);
    }

    public function getHomeSlider()
    {
        $slider = array();
        $set = Slider::select(array(
            'slider_id',
            'slider_title',
            'slider_caption',
            'slider_image',
            'slider_thumb',
            'slider_url'
        ))
            ->where('slider_status', '=', 'Show')
            ->get();
        if (!$set->isEmpty()) {
            foreach ($set as $s) {
                $slider[] = array(
                    'sliderID' => $s->slider_id,
                    'sliderTitle' => $s->slider_title,
                    'sliderCaption' => $s->slider_caption,
                    'sliderImage' => $this->getImageUrl($s->slider_image, 'slider-ultimate/full'),
                    'sliderThumb' => $this->getImageUrl($s->slider_thumb, 'slider-ultimate/full'),
                    'sliderURL' => $s->slider_url
                );
            }
            return $slider;
        }
        return FALSE;
    }

    public function getFeaturedCategory()
    {
        $result = Category::where([['is_featured', '=', 'Yes'], ['parent_id', '=', 0]])->take(8)->get();
        $category = array();
        if (!$result->isEmpty()) {
            foreach ($result as $set) {
                $category[] = array(
                    'categoryName' => $set->category_name,
                    'categoryURL' => $this->getCategoryUrl($set->Category_slug),
                    'categoryImage' => $this->getImageUrl($set->category_logo, 'full')
                );
            }
            return $category;
        }
        return FALSE;
    }

    public function getFeaturedCoupons()
    {
        $coupons = array();
        $result = Coupon::has('store')
            ->select(array(
                'coupon_end_date',
                'ID',
                'merchant',
                'coupon_title',
                'coupon_description',
                'coupon_type'
            ))
            ->where('coupon_status', '=', 'Active')
            ->where('is_feature', '=', 'Yes')
            ->whereNotIn('category', ['dotd'])
            ->where(DB::raw('DATEDIFF(coupon_start_date, NOW())'), '<=', 0)
            ->where(DB::raw('DATEDIFF(coupon_end_date, NOW())'), '>=', 0)
            ->groupBy('merchant')
            ->orderBy('add_date')
            ->take(12)
            ->get();
        if (!$result->isEmpty()) {
            foreach ($result as $c) {
                $coupons[] = array(
                    'couponUID' => uniqid('xy_'),
                    'couponID' => $c->ID,
                    'couponTitle' => $c->coupon_title,
                    'couponDesc' => $c->coupon_description,
                    'couponType' => $c->coupon_type,
                    'couponMerchant' => $c->store->ID,
                    'couponMerchantLogo' => $this->getImageUrl($c->store->merchant_logo, 'full'),
                    'couponMerchantURL' => $this->getStoreUrl($c->store->merchant_slug),
                    'couponMerchantName' => $c->store->merchant_name,
                    'couponMerchantID' => $c->store->ID,
                    'couponExpire' => Carbon::parse($c->coupon_end_date)->format('d/m/Y')
                );
            }
            return $coupons;
        }
        return FALSE;
    }

    public function getFeaturedStores()
    {
        $stores = array();
        $set = Store::select(array(
            'ID',
            'merchant_name',
            'merchant_logo',
            'merchant_slug'
        ))
            ->where('is_featured', '=', 'Yes')
            ->where('merchant_status', '=', 'Active')
            ->take(6)
            ->get();

        if (!$set->isEmpty()) {
            foreach ($set as $s) {
                $stores[] = array(
                    'merchantName' => $s->merchant_name,
                    'merchantID' => $s->ID,
                    'merchantLogo' => $this->getImageUrl($s->merchant_logo, 'full'),
                    'merchantURL' => $this->getStoreUrl($s->merchant_slug),
                    'merchantCouponCount' => $s->coupon()->activeCoupons()->count()
                );
            }
            return $stores;
        }
        return FALSE;
    }
}

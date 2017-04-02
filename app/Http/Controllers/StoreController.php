<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //

    public function index($slug)
    {
        $this->data['merchantData'] = $this->getStoreMasterData($slug);
        return view('pages.store')->with('data', $this->data);
    }

    public function getStoreMasterData($slug)
    {
        $set = Store::select(array(
            'merchant_name',
            'ID',
            'merchant_description',
            'merchant_logo',
            'seo_title',
            'seo_keywords',
            'seo_description'
        ))
            ->where('merchant_slug', '=', $slug)
            ->where('merchant_status', '=', 'Active')
            ->get();

        if (!$set->isEmpty()) {
            foreach ($set as $s) {
                $store = array(
                    'merchantName' => $s->merchant_name,
                    'merchantID' => $s->ID,
                    'merchantDesc' => $s->merchant_description,
                    'merchantLogo' => $this->getImageUrl($s->merchant_logo, 'full'),
                    'merchantCouponCount' => $s->coupon()->activeCoupons()->count(),
                    'merchantSEOData' => array(
                        'title' => $s->seo_title,
                        'keywords' => $s->seo_keywords,
                        'description' => $s->seo_description
                    ),
                    'couponData' => $this->getCouponData($s->coupon()->activeCoupons())
                );
            }
            return $store;
        }
        return FALSE;
    }

    public function getCouponData($coupon)
    {
        $couponData = array();
        $dls = 0;
        $cpn = 0;
        if ($coupon->count() > 0) {
            foreach ($coupon->get() as $c) {
                $couponData['coupon'][] = array(
                    'couponID' => $c->ID,
                    'couponTitle' => $c->coupon_title,
                    'couponDesc' => $c->coupon_description,
                    'couponType' => $c->coupon_type,
                    'couponExpiryDate' => $c->coupon_end_date,
                    'couponCode' => $c->coupon_code
                );
                if ($c->coupon_type == 'Coupon') {
                    $cpn++;
                } else {
                    $dls++;
                }
            }
            $couponData['count'] = array(
                'dls' => $dls,
                'cpn' => $cpn
            );
            return $couponData;
        }
        return FALSE;
    }

    public function allStore($term = null)
    {
        $this->data['storeData'] = $this->getAllStoreData($term);
        return view('pages.allstore')->with('data', $this->data);
    }

    public function getAllStoreData($term = null)
    {
        $stores = array();
        $set = Store::select(array(
            'merchant_name',
            'merchant_logo',
            'ID',
            'merchant_slug'
        ))
            ->where('merchant_name', 'like', $term . '%')
            ->where('merchant_status', '=', 'Active')
            ->get();
        if (!$set->isEmpty()) {
            foreach ($set as $s) {
                $stores[] = array(
                    'merchantID' => $s->ID,
                    'merchantName' => $s->merchant_name,
                    'merchantURL' => $this->getStoreUrl($s->merchant_slug),
                    'merchantLogo' => $this->getImageUrl($s->merchant_logo, 'full'),
                    'merchantCouponCount' => $s->coupon()->activeCoupons()->count()
                );
            }
            return $stores;
        }
        return FALSE;
    }
}

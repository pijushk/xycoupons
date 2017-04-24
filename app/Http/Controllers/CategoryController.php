<?php

namespace App\Http\Controllers;

use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function index($slug)
    {
        $this->data['categoryData'] = $this->getCategoryMasterData($slug);
        return view('pages.category')->with('data', $this->data);
    }

    public function getCategoryMasterData($slug)
    {
        $set = Category::select(array(
            'category_name',
            'CAT_ID',
            'category_desctiption',
            'category_logo',
            'seo_title',
            'seo_keywords',
            'seo_desctiption'
        ))
            ->where('Category_slug', '=', $slug)
            ->get();

        if (!$set->isEmpty()) {
            foreach ($set as $s) {
                $category = array(
                    'categoryName' => $s->category_name,
                    'categoryID' => $s->ID,
                    'categoryDesc' => $s->category_desctiption,
                    'categoryLogo' => $this->getImageUrl($s->category_logo, 'full'),
                    'categoryCouponCount' => $s->coupon()->activeCoupons()->count(),
                    'categorySEOData' => array(
                        'title' => $s->seo_title,
                        'keywords' => $s->seo_keywords,
                        'description' => $s->seo_desctiption
                    ),
                    'couponData' => $this->getCouponData($s->coupon()->activeCoupons())
                );
            }
            return $category;
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
                    'couponUID' => uniqid('xy_'),
                    'couponID' => $c->ID,
                    'couponTitle' => $c->coupon_title,
                    'couponDesc' => $c->coupon_description,
                    'couponType' => $c->coupon_type,
                    'couponExpire' => Carbon::parse($c->coupon_end_date)->format('d/m/Y'),
                    'couponCode' => $c->coupon_code,
                    'couponMerchantLogo' => $this->getImageUrl($c->store->merchant_logo, 'full'),
                    'couponMerchantID' => $c->store->ID
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

    public function allCategories($term = null)
    {
        $this->data['categoryData'] = $this->getAllCategoryData($term);
        return view('pages.allcategory')->with('data', $this->data);
    }

    public function getAllCategoryData($term = null)
    {
        $categories = array();
        $set = Category::select(array(
            'category_name',
            'category_logo',
            'CAT_ID',
            'Category_slug'
        ))
            ->where('category_name', 'like', $term . '%')
            ->get();
        if (!$set->isEmpty()) {
            foreach ($set as $s) {
                $categories[] = array(
                    'categoryID' => $s->ID,
                    'categoryName' => $s->category_name,
                    'categoryURL' => $this->getCategoryUrl($s->Category_slug),
                    'categoryLogo' => $this->getImageUrl($s->category_logo, 'full'),
                    'categoryCouponCount' => $s->coupon()->activeCoupons()->count()
                );
            }
            return $categories;
        }
        return FALSE;
    }
}

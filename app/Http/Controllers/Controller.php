<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * used by classes that inherits this class
     * @var array
     */
    public $data;

    public function getImageUrl($image, $type = null)
    {
        return config('constants.ADMIN_PUBLIC_UPLOAD_URL') . $type . '/' . $image;
    }

    public function getStoreUrl($slug)
    {
        return url('store/'.$slug);
    }

    public function getCategoryUrl($slug)
    {
        return url($slug . '-coupons');
    }

    public function getCouponPopupURL($URL, $couponID)
    {
        return $URL . "?c=" . $couponID;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard.index')->with('data', $this->data);
    }

    public function clicks()
    {
        $this->data['clicks'] = $this->getUserClicks();
        $this->data['clickLinks'] = $this->getClickPagination();
        return view('dashboard.clicks')->with('data', $this->data);
    }

    protected function getUserClicks()
    {
        $clicks = array();
        $set = auth()->user()->order()->clicks()->get();
        if (!$set->isEmpty()) {
            foreach ($set as $s) {
                $clicks[] = array(
                    'orderID' => $s->order_id,
                    'orderDate' => $s->oder_date,
                    'orderMerchantLogo' => $this->getImageUrl($s->store->merchant_logo, 'full')
                );
            }
            return $clicks;
        }
        return FALSE;
    }

    protected function getClickPagination(){
        return auth()->user()->order()->clicks()->paginate(15);
    }
}

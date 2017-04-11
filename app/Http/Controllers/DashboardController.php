<?php

namespace App\Http\Controllers;

use App\Usermeta;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    protected function getClickPagination()
    {
        return auth()->user()->order()->clicks()->paginate(15);
    }

    public function orders()
    {
        $this->data['orders'] = $this->geUserOrders();
        $this->data['orderLinks'] = $this->getOrderPagination();
        return view('dashboard.orders')->with('data', $this->data);
    }

    protected function geUserOrders()
    {
        $orders = array();
        $set = auth()->user()->order()->orders()->get();
        if (!$set->isEmpty()) {
            foreach ($set as $s) {
                switch ($s->order_status) {
                    case 'PENDING' :
                        $orders['pending'][] = array(
                            'orderID' => $s->order_id,
                            'orderDate' => $s->oder_date,
                            'orderMerchantLogo' => $this->getImageUrl($s->store->merchant_logo, 'full'),
                            'orderAmount' => $s->order_amount,
                            'orderCommission' => $s->order_commission,
                            'orderApprovalDate' => $s->order_approval_date
                        );
                        break;
                    case 'APPROVED' :
                        $orders['approved'][] = array(
                            'orderID' => $s->order_id,
                            'orderDate' => $s->oder_date,
                            'orderMerchantLogo' => $this->getImageUrl($s->store->merchant_logo, 'full'),
                            'orderAmount' => $s->order_amount,
                            'orderCommission' => $s->order_commission,
                            'orderApprovalDate' => $s->order_approval_date
                        );
                        break;
                    case 'CANCELED' :
                        $orders['cancelled'][] = array(
                            'orderID' => $s->order_id,
                            'orderDate' => $s->oder_date,
                            'orderMerchantLogo' => $this->getImageUrl($s->store->merchant_logo, 'full'),
                            'orderAmount' => $s->order_amount,
                            'orderCommission' => $s->order_commission,
                            'orderApprovalDate' => $s->order_approval_date
                        );
                        break;
                    case 'DISAPPROVED' :
                        $orders['disapproved'][] = array(
                            'orderID' => $s->order_id,
                            'orderDate' => $s->oder_date,
                            'orderMerchantLogo' => $this->getImageUrl($s->store->merchant_logo, 'full'),
                            'orderAmount' => $s->order_amount,
                            'orderCommission' => $s->order_commission,
                            'orderApprovalDate' => $s->order_approval_date
                        );
                        break;
                }
            }
            return $orders;
        }
        return FALSE;
    }

    protected function getOrderPagination()
    {
        return auth()->user()->order()->orders()->paginate(15);
    }

    public function transactions()
    {
        $this->data['transactions'] = $this->getUserTransactions();
        $this->data['transactionsLinks'] = $this->getTransactionPagination();
        return view('dashboard.transactions')->with('data', $this->data);
    }

    protected function getUserTransactions()
    {
        $transactions = array();
        $set = auth()->user()->accounthistory()->get();
        if (!$set->isEmpty()) {
            foreach ($set as $s) {
                $transactions[] = array(
                    'transactionID' => $s->tan_id,
                    'transactionType' => $s->tan_type,
                    'transactionAmount' => $s->tan_amount,
                    'transactionDate' => $s->tan_date,
                    'transactionStatus' => $s->status,
                    'transactionFor' => $s->tan_for
                );
            }
            return $transactions;
        }
        return FALSE;
    }

    protected function getTransactionPagination()
    {
        return auth()->user()->accounthistory()->paginate(15);
    }

    public function user()
    {
        $this->data['profile'] = $this->getUserData();
        return view('dashboard.profile')->with('data', $this->data);
    }

    protected function getUserData()
    {
        $set = auth()->user();
        //dd($set->user_nicename);
        $user = array(
            'name' => $set->user_nicename,
            'dob' => $set->usermeta->dob,
            'gender' => $set->usermeta->gender,
            'country' => $set->usermeta->country,
            'state' => $set->usermeta->state,
            'city' => $set->usermeta->city,
            'area' => $set->usermeta->area,
            'pincode' => $set->usermeta->pincode,
            'address' => $set->usermeta->address
        );
        //dd($user);
        return $user;
    }

    public function saveUser(Request $request)
    {
        $this->validate($request, [
            'dob' => 'required|date',
            'gender' => [
                'required',
                Rule::in(['male', 'female']),
            ],
        ]);
        $usermeta = $request->all();
        Usermeta::updateOrCreate(['user_id' => auth()->user()->ID], $usermeta);

        return redirect('dashboard/profile');
    }
}

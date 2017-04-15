<?php

namespace App\Http\Controllers;

use App\GiftVoucherMerchant;
use App\GiftVoucherHistory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RedeemController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $this->data['wallet'] = $this->getUserWalletBalance();
        return view('dashboard.redeem')->with('data', $this->data);
    }

    protected function getUserWalletBalance()
    {
        return auth()->user()->wallet;
    }

    public function initGiftVoucher()
    {
        $this->data['voucherMerchant'] = $this->getVoucherMerchant();
        return view('dashboard.voucher')->with('data', $this->data);
    }

    protected function getVoucherMerchant()
    {
        return GiftVoucherMerchant::activevouchermerchant()->get();
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'merchant' => 'required',
            'amount' => 'required|numeric',
            'mobile' => 'required|digits:10',
            'email' => 'required|email'
        ]);

        if ($request->amount < $this->getUserWalletBalance()) {

            $voucher = new \App\GiftVoucherHistory;
            $voucher->voucher_merchant_id = $request->merchant;
            $voucher->voucher_amount = $request->amount;
            $voucher->send_voucher_email = $request->email;
            $voucher->mobile_number = $request->mobile;
            $voucher->status = 'Pending';
            $voucher->order_date = Carbon::now();
            $orderID = 'XYGV' . Carbon::now()->timestamp;
            $voucher->order_id = $orderID;
            $voucher->user_id = auth()->user()->ID;
            $balance = $this->getUserWalletBalance() - $request->amount;

            if ($voucher->save()) {
                auth()->user()->wallet = $balance;
                auth()->user()->save();
                $this->chargeWallet($orderID, $request->amount, 'Gift Voucher', $balance);
                Session::flash('success', 'You voucher redemption request was successful ');
                return redirect('dashboard/voucher');
            }
            Session::flash('error', 'Something happend that we didn\'t expect,
                please try again, if the problem persists report us the problem');
            return redirect('dashboard/voucher');
        }
        Session::flash('error', 'Your don\'t have sufficient wallet balance');
        return redirect('dashboard/voucher');
    }

    protected function chargeWallet($orderID, $amount, $type, $balance)
    {
        $accountLog = new \App\AccountHistory;
        $accountLog->tan_id = $orderID;
        $accountLog->user_id = auth()->user()->ID;
        $accountLog->tan_type = 'Debit';
        $accountLog->tan_for = $type;
        $accountLog->tan_amount = $amount;
        $accountLog->wallet_balance = $balance;
        $accountLog->tan_date = date('Y-m-d H:i:s');
        $accountLog->status = 'Conformed';

        return $accountLog->save();
    }
    
    public function voucherHistory(){
        $this->data['vouchers'] = $this->getVoucherHistory();
        return view('dashboard.voucherhistory')->with('data', $this->data);
    }

    protected function getVoucherHistory(){
        $set = auth()->user()->giftvoucherhistory()->get();
        //dd($set);
        $vouchers = array();
        if(!$set->isEmpty()){
            foreach ($set as $s){
                $vouchers[] = array(
                    'voucherID' => $s->order_id,
                    'voucherDate' => $s->order_date,
                    'merchantLogo' => $this->getImageUrl($s->giftvouchermerchant->merchant_logo, 'full'),
                    'voucherAmount' => $s->voucher_amount,
                    'voucherPIN' => $s->voucher_pin,
                    'voucherExpiry' => $s->voucher_expiry,
                    'voucherEmail' => $s->send_voucher_email,
                    'voucherMobile' => $s->mobile_number,
                    'voucherStatus' => $s->status
                );
            }
            return $vouchers;
        }
        return FALSE;
    }

    public function initBankTransfer()
    {
        return view('dashboard.banktransfer')->with('data', $this->data);
    }

    public function bankTransferAdd(Request $request)
    {
        $this->validate($request, [
            'account_holders_name' => 'required',
            'amount' => 'required|numeric',
            'account_number' => 'required|numeric',
            'account_ifsc_code' => 'required',
            'bank_name' => 'required',
            'branch_name' => 'required'
        ]);

        if ($request->amount < $this->getUserWalletBalance()) {

            $bankTrans = new \App\BankTransfer;
            $bankTrans->account_holder_name = $request->account_holders_name;
            $bankTrans->account_number = $request->account_number;
            $bankTrans->account_ifsc_code = $request->account_ifsc_code;
            $bankTrans->bank_name = $request->bank_name;
            $bankTrans->bank_branch = $request->branch_name;
            $bankTrans->status = 'Pending';
            $bankTrans->amount = $request->amount;
            $bankTrans->order_date = Carbon::now();
            $orderID = 'XYBGT' . Carbon::now()->timestamp;
            $bankTrans->order_id = $orderID;
            $bankTrans->user_id = auth()->user()->ID;
            $balance = $this->getUserWalletBalance() - $request->amount;

            if ($bankTrans->save()) {
                auth()->user()->wallet = $balance;
                auth()->user()->save();
                $this->chargeWallet($orderID, $request->amount, 'Bank Transfer', $balance);
                Session::flash('success', 'You bank transfer redemption request was successful ');
                return redirect('dashboard/bank-transfer');
            }
            Session::flash('error', 'Something happend that we didn\'t expect,
                please try again, if the problem persists report us the problem');
            return redirect('dashboard/bank-transfer');
        }
        Session::flash('error', 'Your don\'t have sufficient wallet balance');
        return redirect('dashboard/bank-transfer');
    }

    public function bankTransferHistory(){
        $this->data['bankTransfer'] = $this->getBankTransferHistory();
        return view('dashboard.banktransferhistory')->with('data', $this->data);
    }

    protected function getBankTransferHistory(){
        $set = auth()->user()->banktransfer()->get();
        $bankTransfers = array();
        if(!$set->isEmpty()){
            foreach ($set as $s){
                $bankTransfers[] = array(
                    'orderID' => $s->order_id,
                    'orderDate' => $s->order_date,
                    'amount' => $s->amount,
                    'holdersName' => $s->account_holder_name,
                    'acNumber' => $s->account_number,
                    'bank' => $s->bank_name,
                    'branch' => $s->bank_branch,
                    'orderApprovalDare' => $s->order_approval_date,
                    'status' => $s->status,
                    'remarks' => $s->remarks,
                );
            }
            return $bankTransfers;
        }
        return FALSE;
    }
}

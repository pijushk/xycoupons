<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiftVoucherMerchant extends Model
{
    //
    protected $primaryKey = 'id';
    protected $table = "gift_voucher_merchant";
    
    public function scopeActiveVoucherMerchant($query){
        return $query->where('merchant_status', '=', 'Active');
    }

    public function giftvoucherhistory(){
        return $this->hasMany('App\GiftVoucherHistory', 'voucher_merchant_id', 'id');
    }
}

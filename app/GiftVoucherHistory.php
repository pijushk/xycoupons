<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiftVoucherHistory extends Model
{
    //
    protected $primaryKey = 'id';
    protected $table = "gift_voucher_history";

    public $timestamps  = false;


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'ID');
    }

    public function giftvouchermerchant(){
        return $this->belongsTo('App\GiftVoucherMerchant', 'voucher_merchant_id', 'id');
    }
}

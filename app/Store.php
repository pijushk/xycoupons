<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
    protected $primaryKey = 'ID';
    protected $table = "ca_merchant";


    /**
     * A store can have many coupons
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function coupon(){
        return $this->hasMany('App\Coupon', 'merchant', 'ID');
    }
}

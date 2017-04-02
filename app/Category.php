<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $primaryKey = 'CAT_ID';
    protected $table = "ca_category";


    /**
     * A category can have multiple coupons
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function coupon()
    {
        return $this->hasMany('App\Coupon', 'category', 'CAT_ID');
    }
}

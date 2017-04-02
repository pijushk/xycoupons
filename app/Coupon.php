<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    //
    protected $primaryKey = 'ID';
    protected $table = "ca_coupon";

    /**
     * A coupon can belong to a particular store
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function store()
    {
        return $this->belongsTo('App\Store', 'merchant', 'ID');
    }

    /**
     * A coupon can belong to a particular category
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(){
        return $this->belongsTo('App\Category', 'category', 'CAT_ID');
    }

    /**
     * @param $query
     * @return mixed
     * used to fetch active coupons only
     */
    public function scopeActiveCoupons($query)
    {
        return $query->where('coupon_start_date', '<=', Carbon::now())
            ->where('coupon_end_date', '>=', Carbon::now())
            ->where('coupon_status', '=', 'Active');
    }
}

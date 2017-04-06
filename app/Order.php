<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $primaryKey = 'ID';
    protected $table = "ca_order";


    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'ID');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function store(){
        return $this->belongsTo('App\Store', 'merchant_id', 'ID');
    }

    public function scopeClicks($query){
        return $query->where('order_type', '=', 'DONT');
    }
}

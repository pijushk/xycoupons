<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RechargeOperator extends Model
{
    //
    protected $primaryKey = "id";
    protected $table = "recharge_operator";

    public function scopeActiveOperators($query)
    {
        return $query->where('status', '=', 'Active');
    }
}

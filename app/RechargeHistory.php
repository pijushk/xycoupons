<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RechargeHistory extends Model
{
    //
    protected $primaryKey = "id";
    protected $table = "recharge_history";

    public $timestamps = false;

    public function user(){
        $this->belongsTo('App\User', 'user_id', 'ID');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountHistory extends Model
{
    //
    protected $primaryKey = 'ID';
    protected $table = "ca_account_history";

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'ID');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usermeta extends Model
{
    //
    protected $primaryKey = 'umeta_id';
    protected $table = "ins_usermeta";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'dob',
        'gender',
        'country',
        'state',
        'city',
        'area',
        'pincode',
        'address'];

    /**
     * A usermeta can belong to a single user.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'ID');
    }
}

<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
use Hash;
use Request;

class User extends Authenticatable
{
    use Notifiable;

    const GROUP_ID = 5;
    const USER_STATUS = 0;
    const REG_VIA = 'SELF';
    const REFER_USER_LOGIN = 0;
    const WALLET = 0;

    protected $primaryKey = 'ID';
    protected $table = "ins_users";

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_nicename',
        'user_email',
        'password',
        'group_id',
        'user_login',
        'mobile',
        'user_ip'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Default values for attributes
     * @var  array an array with attribute as key and default as value
     */
    protected $attributes = [
        'group_id' => self::GROUP_ID,
        'user_status' => self::USER_STATUS,
        'reg_via' => self::REG_VIA,
        'refer_user_login' => self::REFER_USER_LOGIN,
        'wallet' => self::WALLET
    ];

    /**
     * The attributes that are represented as dates
     *
     * @var array
     */
    protected $dates = ['register_date', 'user_registered'];

    /**
     * Boot function for using with User Events
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->generateReferralCode();
            $model->generateConfirmationCode();
            $model->setUserLogin();
            $model->getUserIP();
            $model->setRegistrationDate();
        });
    }

    public function setRegistrationDate()
    {
        $this->attributes['register_date'] =  \Carbon\Carbon::now();
    }

    /**
     * Ensures that password is Hashed whenever assigned. Clear text passwords
     * are bad. Mmm'kay?
     *
     * @var string $pass clear-text string password
     */
    public function setPasswordAttribute($pass)
    {
        $this->attributes['password'] = bcrypt($pass);
    }

    public function getUserIP()
    {
        $this->attributes['user_ip'] = Request::ip();
    }


    /**
     * @param $email
     */
    public function setUserLogin()
    {
        $this->attributes['user_login'] = $this->user_email;
    }

    /**
     * Generates a new 2048-bit RSA Key-Pair used for various User Activities
     *
     * @return bool returns true if successful. false on failure.
     */
    protected function generateKeys()
    {
        $pk_res = openssl_pkey_new(array(
            'private_key_bits' => 2048,
            'private_key_type' => OPENSSL_KEYTYPE_RSA
        ));

        openssl_pkey_export($pk_res, $this->attributes['private_key']);

        $pubkey = openssl_pkey_get_details($pk_res);
        $this->attributes['public_key'] = $pubkey["key"];

        openssl_pkey_free($pk_res);

        if (is_null($this->attributes['private_key']) || is_null($this->attributes['public_key']))
            return false;
        else
            return true;
    }

    /**
     * Generates the value for the User::user_activation_key field. Used to
     * activate the user's account.
     * @return bool
     */
    protected function generateConfirmationCode()
    {
        $this->attributes['user_activation_key'] = Hash::make($this->user_email . time());

        if (is_null($this->attributes['user_activation_key']))
            return false; // failed to create user_activation_key
        else
            return true;
    }


    /**
     * Generates the value for User::referral_code Used to
     * generate referral code for user
     * @return bool
     */
    public function generateReferralCode()
    {
        //Unique Referral code generation
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $referral_code = '';
        for ($i = 0; $i < 4; $i++) {
            $referral_code .= $characters[rand(0, strlen($characters) - 1)];
        }
        //Unique Referral code generation
        $this->attributes['referral_code'] = $referral_code;
        if (is_null($this->attributes['referral_code']))
            return false; // failed to create referral_code
        else
            return true;
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function order()
    {
        return $this->hasMany('App\Order', 'user_id', 'ID');
    }

    /**
     * A user can have multiple transactions
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accounthistory()
    {
        return $this->hasMany('App\AccountHistory', 'user_id', 'ID');
    }

    /**
     * A user can have only one usermeta
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usermeta(){
        return $this->hasOne('App\Usermeta', 'user_id', 'ID');
    }

}

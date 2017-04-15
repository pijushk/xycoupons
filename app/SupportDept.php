<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupportDept extends Model
{
    //
    protected $primaryKey = 'id';
    protected $table = "support_department";


    /**
     * A department can have many issues
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function supportissue(){
        return $this->hasMany('App\SupportIssue', 'department_id', 'id');
    }

    /**
     * A department can have multiple tickets
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function supportticket(){
        return $this->hasMany('App\SupportTicket', 'department_id', 'id');
    }
}

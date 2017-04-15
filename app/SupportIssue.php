<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupportIssue extends Model
{
    //
    protected $primaryKey = 'id';
    protected $table = "support_issue_type";

    /**
     * Multiple issue type belongs to a Support Department
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function supportdept(){
        return $this->belongsTo('App\SupportDept', 'department_id', 'id');
    }

    /**
     * An issue can have multiple tickets
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function supportticket(){
        return $this->hasMany('App\SupportTicket', 'issue_type_id', 'id');
    }
}

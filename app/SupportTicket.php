<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    //
    protected $primaryKey = 'id';
    protected $table = "support_ticket_history";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'token_no',
        'issue_type_id',
        'department_id',
        'reference_id_if_any',
        'subject',
        'message',
        'status',
        'admin_user_attend'
    ];

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function supportdept()
    {
        return $this->belongsTo('App\SupportDept', 'department_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function supportissue()
    {
        return $this->belongsTo('App\SupportIssue', 'issue_type_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function supportticketreply()
    {
        return $this->hasOne('App\SupportTicketReply', 'ticket_id', 'id');
    }
}

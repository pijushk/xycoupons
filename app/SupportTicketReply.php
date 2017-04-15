<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupportTicketReply extends Model
{

    //
    protected $primaryKey = 'id';
    protected $table = "support_ticket_reply";


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function supportticket(){
        return $this->belongsTo('App\SupportTicket', 'ticket_id', 'id');
    }

}

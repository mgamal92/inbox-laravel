<?php

namespace MG\Inbox\Model;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model {

    protected $table = 'inbox';

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'subject',
        'body',
        'is_read',
        'is_starred',
    ];

}
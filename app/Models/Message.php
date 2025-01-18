<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'user_id',
        'subject',
        'message',
        'sent_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

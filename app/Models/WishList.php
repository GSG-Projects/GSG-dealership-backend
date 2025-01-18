<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    protected $fillable = [
        'user_id',
        'car_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}

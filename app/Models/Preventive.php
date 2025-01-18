<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preventive extends Model
{
    protected $fillable = [
        'user_id',
        'car_id',
        'total_price',
        'creation_date',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

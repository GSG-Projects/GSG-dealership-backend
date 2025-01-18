<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Optional extends Model
{
    protected $fillable = [
        'category',
        'name',
        'price',
    ];
    public function cars()
    {
        return $this->belongsToMany(Car::class);
    }
}

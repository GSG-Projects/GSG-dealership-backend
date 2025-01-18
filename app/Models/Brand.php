<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name',
        'image',
    ];
    public function car_models()
    {
        return $this->hasMany(CarModel::class);
    }
    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}

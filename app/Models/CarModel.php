<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $fillable = [
        'brand_id',
        'name',
        'production_year',
        'car_type',
    ];
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function cars()
    {
        return $this->belongsTo(Car::class);
    }
}

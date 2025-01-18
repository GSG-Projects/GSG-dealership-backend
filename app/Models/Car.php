<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'car_model_id',
        'base_price',
        'warranty', 
        'environmental_class', 
        'availability', 
        'engine_capacity',
        'fuel_type',
        'power_kw',
        'transmission',
        'color',
        'width',
        'length',
        'weight',
        'seats_number',
        'doors_number',
        'image',
    ];
    public function car_model()
    {
        return $this->belongsTo(CarModel::class);
    }
    public function optionals()
    {
        return $this->belongsToMany(Optional::class);
    }

    public function preventives()
    {
        return $this->hasMany(Preventive::class);
    }

    public function whishLists()
    {
        return $this->belongsToMany(WishList::class);
    }
}

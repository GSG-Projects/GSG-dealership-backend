<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_model_id',
        'brand_id',
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
        'description'
    ];

    public function carModel()
    {
        return $this->belongsTo(CarModel::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function optionals()
    {
        return $this->belongsToMany(Optional::class);
    }

    public function preventives()
    {
        return $this->hasMany(Preventive::class);
    }

    public function wishLists()
    {
        return $this->belongsToMany(WishList::class);
    }
}
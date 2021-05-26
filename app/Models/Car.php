<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';
    protected $fillable = ['title', 'vin', 'year', 'price', 'brand_id', 'country_id', 'horsepower', 'foto_path'];

    public function brand()
    {
        return $this->belongsTo(Brand::class)->withDefault();
    }

    public function country()
    {
        return $this->belongsTo(Country::class)->withDefault();
    }

    public function classifications()
    {
        return $this->belongsToMany(Classification::class, 'cars_classifications', 'car_id', 'classification_id ');
    }

    public function users(){
        return $this->belongsToMany('App\Models\User', 'user_cars', 'car_id', 'user_id');
    }

}


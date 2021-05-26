<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    protected $table = 'classifications';
    protected $fillable = ['title', 'description'];

    public function cars()
    {
        return $this->belongsToMany(Car::class, 'cars_classifications', 'classification_id', 'car_id');
    }
}

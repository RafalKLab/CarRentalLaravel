<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    protected $fillable = ['title', 'website', 'owner', 'year'];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}

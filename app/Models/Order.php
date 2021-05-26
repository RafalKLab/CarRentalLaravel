<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = 'user_cars';
    protected $fillable = ['car_id', 'user_id'];


}

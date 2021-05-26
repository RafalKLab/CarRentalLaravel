<?php

namespace App\Http\Controllers;

use App\Models\Classification;
use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $cars = Car::all();
        return view('pages.cars', compact('cars'));
    }

    public function show($id){
        $car = Car::findOrFail($id);
        return view('pages.showCar', compact('car'));
    }
}

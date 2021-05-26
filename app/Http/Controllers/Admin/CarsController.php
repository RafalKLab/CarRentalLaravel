<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Brand;
use App\Models\Country;


class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('admin.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::pluck('title', 'id');
        $brands->prepend('---Please select---', 0);
        $brands->all();

        $countries = Country::pluck('name', 'id');
        $countries->prepend('---Please select---', 0);
        $countries->all();

        return view('admin.cars.create', compact('brands', 'countries'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|alpha_dash|max:20',
            'vin' => 'required|min:3|max:3|unique:cars|alpha_num',
            'year' => 'required|numeric',
            'horsepower' => 'required|numeric',
            'price' => 'required|numeric',
            'photo' => 'required|mimes:jpg,png,jpeg|max:5048',
            'brand_id' => 'not_in:0',
            'country_id' => 'not_in:0'
        ]);

        $newImageName = time() . '-' . $request->title . '.' . $request->photo->extension();
        $request->photo->move(public_path('images'), $newImageName);

//       $car = Car::create($request->all(),[
//           'photo_path' => $newImageName
//       ]);
        Car::create([
            'title' => $request->input('title'),
            'vin' => $request->input('vin'),
            'year' => $request->input('year'),
            'horsepower' => $request->input('horsepower'),
            'price' => $request->input('price'),
            'brand_id'=> $request->input('brand_id'),
            'country_id'=> $request->input('country_id'),
            'foto_path' => $newImageName
        ]);
        return redirect()->route('AdminCars')->with('success', 'A car has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::findOrFail($id);
        $brands = Brand::pluck('title', 'id');
        $brands->prepend('---Please select---', 0);
        $brands->all();

        $countries = Country::pluck('name', 'id');
        $countries->prepend('---Please select---', 0);
        $countries->all();
        return view('admin.cars.edit', compact('car', 'brands', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|alpha_dash|max:20',
            'vin' => 'required|min:3|max:3|alpha_num',
            'year' => 'required|numeric',
            'horsepower' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        $car = Car::findOrFail($id);
        $car->update($request->all());
        return redirect()->route('AdminCars')->with('success', 'Car has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $image_path = public_path("images/") . $car->foto_path;
        unlink($image_path);
        $car->delete();
        return redirect()->route('AdminCars')->with('success', 'Car has been deleted!');

    }
}

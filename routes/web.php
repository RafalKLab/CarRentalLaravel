<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/classifications', 'App\Http\Controllers\ClassificationController');
Route::get('/cars', [App\Http\Controllers\CarsController::class, 'index']);
Route::get('/cars/{id}', [App\Http\Controllers\CarsController::class, 'show'])->middleware('auth')->name('showCar');
//orders
Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->middleware('auth')->name('orders');
Route::get('/orders/{id}', [App\Http\Controllers\OrderController::class, 'makeOrder'])->middleware('auth')->name('makeOrder');
Route::post('/orders/{id}', [App\Http\Controllers\OrderController::class, 'destroy'])->middleware('auth')->name('deleteOrder');

//admin
Route::get('redirects', App\Http\Controllers\HomeController::class);
Route::group(['middleware' => ['role:Admin']], function () {

Route::get('/admin/users', [App\Http\Controllers\Admin\UsersController::class, 'index'])->name('AdminGetUsers');
Route::get('/admin/users/create', [App\Http\Controllers\Admin\UsersController::class, 'create']);
Route::post('/admin/users', [App\Http\Controllers\Admin\UsersController::class, 'store']);
Route::get('/admin/users/{id}', [App\Http\Controllers\Admin\UsersController::class, 'show']);
Route::get('/admin/users/{id}/edit', [App\Http\Controllers\Admin\UsersController::class, 'edit']);
Route::patch('/admin/users/{id}', [App\Http\Controllers\Admin\UsersController::class, 'update']);
Route::delete('/admin/users/{id}', [App\Http\Controllers\Admin\UsersController::class, 'destroy']);

Route::get('/admin/roles', [App\Http\Controllers\Admin\RolesController::class, 'index'])->name('AdminGetRoles');
Route::get('/admin/roles/create', [App\Http\Controllers\Admin\RolesController::class, 'create']);
Route::post('/admin/roles', [App\Http\Controllers\Admin\RolesController::class, 'store']);
Route::get('/admin/roles/{id}', [App\Http\Controllers\Admin\RolesController::class, 'show']);
Route::get('/admin/roles/{id}/edit', [App\Http\Controllers\Admin\RolesController::class, 'edit']);
Route::patch('/admin/roles/{id}', [App\Http\Controllers\Admin\RolesController::class, 'update']);
Route::delete('/admin/roles/{id}', [App\Http\Controllers\Admin\RolesController::class, 'destroy']);

Route::view('/admin', 'admin.home')->name('admin');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//orders
Route::get('/admin/orders', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('AdminOrders');


//classifications
Route::get('/admin/classifications', [App\Http\Controllers\Admin\ClassificationController::class, 'index'])->name('AdminClassifications');

Route::get('/admin/classifications/create', [App\Http\Controllers\Admin\ClassificationController::class, 'create'])->name('ClassificationsCreate');
Route::post('/admin/classifications/create', [App\Http\Controllers\Admin\ClassificationController::class, 'store']);

Route::get('/admin/classifications/edit/{id}', [App\Http\Controllers\Admin\ClassificationController::class, 'edit'])->name('ClassificationsEdit');
Route::post('/admin/classifications/edit/{id}', [App\Http\Controllers\Admin\ClassificationController::class, 'update'])->name('ClassificationsEdit');

Route::post('/admin/classifications/delete/{id}', [App\Http\Controllers\Admin\ClassificationController::class, 'destroy'])->name('ClassificationsDelete');

//brands
Route::get('/admin/brands', [App\Http\Controllers\Admin\BrandsController::class, 'index'])->name('AdminBrands');

Route::get('/admin/brands/create', [App\Http\Controllers\Admin\BrandsController::class, 'create'])->name('AdminBrandsCreate');
Route::post('/admin/brands/create', [App\Http\Controllers\Admin\BrandsController::class, 'store']);

Route::get('/admin/brands/edit/{id}', [App\Http\Controllers\Admin\BrandsController::class, 'edit'])->name('BrandEdit');
Route::post('/admin/brands/edit/{id}', [App\Http\Controllers\Admin\BrandsController::class, 'update'])->name('BrandEdit');

Route::post('/admin/brands/delete/{id}', [App\Http\Controllers\Admin\BrandsController::class, 'destroy'])->name('BrandDelete');

//cars
Route::get('/admin/cars', [App\Http\Controllers\Admin\CarsController::class, 'index'])->name('AdminCars');

Route::get('/admin/cars/create', [App\Http\Controllers\Admin\CarsController::class, 'create'])->name('AdminCarsCreate');
Route::post('/admin/cars/create', [App\Http\Controllers\Admin\CarsController::class, 'store']);

Route::get('/admin/cars/edit/{id}', [App\Http\Controllers\Admin\CarsController::class, 'edit'])->name('CarEdit');
Route::post('/admin/cars/edit/{id}', [App\Http\Controllers\Admin\CarsController::class, 'update'])->name('CarEdit');

Route::post('/admin/cars/delete/{id}', [App\Http\Controllers\Admin\CarsController::class, 'destroy'])->name('CarDelete');

//country
Route::get('/admin/country', [App\Http\Controllers\Admin\CountryController::class, 'index'])->name('AdminCountry');

Route::get('/admin/country/create', [App\Http\Controllers\Admin\CountryController::class, 'create'])->name('AdminCountryCreate');
Route::post('/admin/country/create', [App\Http\Controllers\Admin\CountryController::class, 'store'])->name('AdminCountryCreate');

Route::get('/admin/country/edit/{id}', [App\Http\Controllers\Admin\CountryController::class, 'edit'])->name('AdminCountryEdit');
Route::post('/admin/country/edit/{id}', [App\Http\Controllers\Admin\CountryController::class, 'update'])->name('AdminCountryEdit');

Route::post('/admin/country/delete/{id}', [App\Http\Controllers\Admin\CountryController::class, 'destroy'])->name('AdminCountryDelete');


});

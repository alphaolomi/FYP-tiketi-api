<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\BusClassController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PassengerController;

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*public routes*/
Route::get('search',[BookingController::class, 'searchBus'])->name('search');
Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'register']);

//protected routes
Route::group(['middleware'=>['auth:sanctum']],function()
{
    Route::post('/logout',[AuthController::class,'logout']);



    Route::post('/passenger',[PassengerController::class,'store']);


       //For assigne route
    Route::resource('assignedRoute',AssignedRouteController::class);
       //For assigne route
    Route::get('/trip/search/{name}',[AssignedRouteController::class,'search']);
});

Route::prefix('admin')->group(
    function()
    {
    Route::get('/user',[AuthController::class,'user']);
        //for bus class
    Route::resource('bus_class',BusClassController::class);
       //For Company
    Route::resource('company',CompanyController::class);
        //for bus driver
    Route::resource('driver',DriverController::class);
        //for route
    Route::resource('route',RouteController::class);
        //For Bus
    Route::resource('buses',BusController::class);
    }
);



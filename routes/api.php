<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
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

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('user-detail', 'AuthController@user');
    Route::get('get-all-drivers', 'Api\HomeController@getAllDrivers');
    Route::get('get-all-vehicles', 'Api\HomeController@getAllVehicles');
    Route::post('/assign-driver', 'Api\HomeController@assignDriver');
    Route::post('updateProfile', 'Api\HomeController@updateProfile');
    Route::post('add_driver' , 'Api\HomeController@addDriver');
    Route::get('getProfile', 'AuthController@getProfile');
    Route::post('store-shipment', 'ShippmentController@mobilestore');
    Route::get('my-drivers', 'HomeController@myDriversApi');
    Route::get('/shipment/{id}', 'ShippmentController@shipmentDetails');
    Route::get('/get-company-drivers', 'Api\HomeController@getCompanyDrivers');
    Route::post('/add-company-driver', 'Api\HomeController@addDriver');
    Route::post('/add-driver-vehicle', 'Api\HomeController@addDriverVehicle');
    Route::get('/all-shipments', 'Api\HomeController@allShipments');
//    Route::post('user-detail', 'AuthController@userUpdate');
//    Route::get('records', 'ApiController@records');
//    Route::get('logout', 'AuthController@logout');
//    Route::post('store/patient-record-api', 'ApiController@storeMedRecords');
});


Route::get('getVehicleCatorgies', 'ApiController@getVehicleCatorgies');
Route::get('vehicles/{id}', 'ApiController@vehicles');
Route::post('login', 'AuthController@login');
Route::post('signup', 'AuthController@mobileSignup');
//Route::post('send-otp', 'HomeController@sendOtpApi');
//Route::post('verify-otp', 'HomeController@verifySmsApi');

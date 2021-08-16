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
Route::post('set/cordination' , 'Api\HomeController@setCordinates');
Route::post('send/noti' , 'Api\HomeController@sendNotification');
Route::group(['middleware' => 'auth:api'], function(){

    Route::get('user-detail', 'AuthController@user');
    Route::get('all-vehicles', 'Api\HomeController@allVehicles');
    Route::get('get-all-drivers', 'Api\HomeController@getAllDrivers');
    Route::get('get-all-vehicles', 'Api\HomeController@getAllVehicles');
    Route::get('getProfile/{id}', 'AuthController@getProfile');

    Route::post('/bid-store', 'Api\HomeController@bidStore');
    Route::post('/assign-driver', 'Api\HomeController@assignDriver');
    Route::post('/status-update', 'Api\HomeController@updateStatus');
    Route::post('updateProfile', 'Api\HomeController@updateProfile');
    Route::post('add_driver' , 'Api\HomeController@addDriver');
    Route::post('/store-shipment', 'Api\HomeController@storeShipment');

//    Route::post('store-shipment', 'ShippmentController@mobilestore');
    Route::get('my-drivers', 'HomeController@myDriversApi');
//    Route::get('/shipment/{id}', 'ShippmentController@shipmentDetails');
    Route::get('/get-company-drivers', 'Api\HomeController@getCompanyDrivers');
    Route::get('/all-shipments', 'Api\HomeController@allShipments');

    Route::post('/add-company-driver', 'Api\HomeController@addDriver');
    Route::post('/add-driver-vehicle', 'Api\HomeController@addDriverVehicle');
    Route::post('/send-bid-revise-request', 'Api\HomeController@sendBidReviserequest');
    Route::post('/update-bid-revise-request', 'Api\HomeController@updateBidReviserequest');
    Route::post('/bid-status-update', 'Api\HomeController@bidStatusUpdate');
    Route::get('shipment/{id}', 'Api\HomeController@show');
    Route::get('shipment/by/status','Api\HomeController@shipmentStatusFilter');
    Route::get('mybids/{id}','Api\HomeController@myBids');






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

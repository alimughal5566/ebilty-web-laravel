<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//    Route::post('user-detail', 'AuthController@userUpdate');
//    Route::get('records', 'ApiController@records');
//    Route::get('logout', 'AuthController@logout');
//    Route::post('store/patient-record-api', 'ApiController@storeMedRecords');


});


Route::post('login', 'AuthController@login');
Route::post('signup', 'AuthController@signup');
//Route::post('send-otp', 'HomeController@sendOtpApi');
//Route::post('verify-otp', 'HomeController@verifySmsApi');

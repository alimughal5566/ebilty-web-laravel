<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/get_vehicle_cat', 'auth\LoginController@get_vehicle_cat')->name('get_vehicle_cat');
Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function() {
    Route::prefix('setting')->namespace('Admin\Setting')->group( function() {

        Route::get('/general_setting', 'GeneralSettingController@index')->name('admin.setting.general_setting');
        Route::post('/save_homepage_slider1', 'GeneralSettingController@save_homepage_slider1')->name('admin.setting.save_homepage_slider1');
        Route::post('/save_homepage_slider2', 'GeneralSettingController@save_homepage_slider2')->name('admin.setting.save_homepage_slider2');
        Route::post('/save_homepage_slider3', 'GeneralSettingController@save_homepage_slider3')->name('admin.setting.save_homepage_slider3');
        Route::post('/save_homepage_slider4', 'GeneralSettingController@save_homepage_slider4')->name('admin.setting.save_homepage_slider4');
        Route::post('/save_about_us_banner', 'GeneralSettingController@save_about_us_banner')->name('admin.setting.save_about_us_banner');
        Route::post('/save_about_us_body', 'GeneralSettingController@save_about_us_body')->name('admin.setting.save_about_us_body');
        Route::post('/save_homepage_card1', 'GeneralSettingController@save_homepage_card1')->name('admin.setting.save_homepage_card1');
        Route::post('/save_homepage_card2', 'GeneralSettingController@save_homepage_card2')->name('admin.setting.save_homepage_card2');
        Route::post('/save_homepage_card3', 'GeneralSettingController@save_homepage_card3')->name('admin.setting.save_homepage_card3');
        Route::post('/save_homepage_card4', 'GeneralSettingController@save_homepage_card4')->name('admin.setting.save_homepage_card4');
        Route::post('/save_faq_banner', 'GeneralSettingController@save_faq_banner')->name('admin.setting.save_faq_banner');
        Route::get('/make_status_active_setting', 'GeneralSettingController@make_status_active_setting')->name('admin.setting.make_status_active_setting');
        Route::get('/make_status_inactive_setting', 'GeneralSettingController@make_status_inactive_setting')->name('admin.setting.make_status_inactive_setting');
        Route::get('/get_payment_type', 'ShipmentController@get_payment_type')->name('admin.setting.get_payment_type');
        Route::get('/add_payment_type', 'ShipmentController@add_payment_type')->name('admin.setting.add_payment_type');
        Route::get('/delete_payment_type', 'ShipmentController@delete_payment_type')->name('admin.setting.delete_payment_type');
        Route::get('/edit_payment_type', 'ShipmentController@edit_payment_type')->name('admin.setting.edit_payment_type');
        Route::get('/update_payment_type', 'ShipmentController@update_payment_type')->name('admin.setting.update_payment_type');
        Route::get('/make_status_inactive', 'ShipmentController@make_status_inactive')->name('admin.setting.make_status_inactive');
        Route::get('/make_status_active', 'ShipmentController@make_status_active')->name('admin.setting.make_status_active');
        Route::get('/package_type', 'PackageTypeController@index')->name('admin.setting.package_type');
        Route::get('/add_package_type', 'PackageTypeController@add_package_type')->name('admin.setting.add_package_type');
        Route::get('/edit_package_type', 'PackageTypeController@edit_package_type')->name('admin.setting.edit_package_type');
        Route::get('/update_package_type', 'PackageTypeController@update_package_type')->name('admin.setting.update_package_type');
        Route::get('/delete_package_type', 'PackageTypeController@delete_package_type')->name('admin.setting.delete_package_type');
        Route::get('/make_status_active_package_type', 'PackageTypeController@make_status_active_package_type')->name('admin.setting.make_status_active_package_type');
        Route::get('/make_status_inactive_package_type', 'PackageTypeController@make_status_inactive_package_type')->name('admin.setting.make_status_inactive_package_type');
        Route::get('/vehicle_category', 'VehicleCategoryController@index')->name('admin.setting.vehicle_category');
        Route::get('/add_vehicle_type', 'VehicleCategoryController@add_vehicle_type')->name('admin.setting.add_vehicle_type');
        Route::get('/edit_vehicle_category', 'VehicleCategoryController@edit_vehicle_category')->name('admin.setting.edit_vehicle_category');
        Route::get('/update_vehicle_category', 'VehicleCategoryController@update_vehicle_category')->name('admin.setting.update_vehicle_category');
        Route::get('/delete_vehicle_category', 'VehicleCategoryController@delete_vehicle_category')->name('admin.setting.delete_vehicle_category');
        Route::get('/make_status_inactive_vehicle_category', 'VehicleCategoryController@make_status_inactive_vehicle_category')->name('admin.setting.make_status_inactive_vehicle_category');
        Route::get('/make_status_active_vehicle_category', 'VehicleCategoryController@make_status_active_vehicle_category')->name('admin.setting.make_status_active_vehicle_category');
        Route::get('/vehicle', 'VehicleController@index')->name('admin.setting.vehicle');
        Route::get('/add_vehicle', 'VehicleController@add_vehicle')->name('admin.setting.add_vehicle');
        Route::get('/edit_vehicle', 'VehicleController@edit_vehicle')->name('admin.setting.edit_vehicle');
        Route::get('/update_vehicle', 'VehicleController@update_vehicle')->name('admin.setting.update_vehicle');
        Route::get('/delete_vehicle', 'VehicleController@delete_vehicle')->name('admin.setting.delete_vehicle');
        Route::get('/make_status_active_vehicle', 'VehicleController@make_status_active_vehicle')->name('admin.setting.make_status_active_vehicle');
        Route::get('/make_status_inactive_vehicle', 'VehicleController@make_status_inactive_vehicle')->name('admin.setting.make_status_inactive_vehicle');
        Route::get('/qas', 'GeneralSettingController@qas')->name('admin.setting.qas');
        Route::get('/add_qas', 'GeneralSettingController@add_qas')->name('admin.setting.add_qas');
        Route::get('/edit_qas', 'GeneralSettingController@edit_qas')->name('admin.setting.edit_qas');
        Route::get('/update_qas', 'GeneralSettingController@update_qas')->name('admin.setting.update_qas');
        Route::get('/delete_qas', 'GeneralSettingController@delete_qas')->name('admin.setting.delete_qas');
        Route::get('/make_status_inactive_qas', 'GeneralSettingController@make_status_inactive_qas')->name('admin.setting.make_status_inactive_qas');
        Route::get('/make_status_active_qas', 'GeneralSettingController@make_status_active_qas')->name('admin.setting.make_status_active_qas');
    });
});

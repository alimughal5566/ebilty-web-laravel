<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Helper\Helper;

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




Route::get('test', function () {
   sendnote(2 , 1,'dadasdasdasdadasdasdasasd' );
    return "Event has been sent!";
});
Route::get('/terms-conditions', 'FrontEndController@termcondition')->name('termcondition');
Route::get('/carrier', 'FrontEndController@carrier')->name('carrier');

Route::get('show/tracking/{id}' ,'HomeController@showTracking')->name('tracking');
Route::get('send/noti' , 'HomeController@sendNotification');
Route::get('get/trackingpoints/{id}' , 'HomeController@getTrackingPoints');
Route::get('/', 'FrontEndController@index')->name('index');
Route::get('/get-in-touch', 'FrontEndController@sendMail')->name('get-in-touch');
Route::post('/send-otp-message', 'HomeController@sendMessage')->name('sendMessage');
Route::get('/otp-verify', 'HomeController@otpVerifcationCheck')->name('otpVerifcationCheck');
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('storage:link');
    return "Cleared!";
});
Auth::routes(['verify' => true]);

Route::get('/get_vehicle_cat', 'Auth\LoginController@get_vehicle_cat')->name('get_vehicle_cat');
Route::post('/register_user', 'Auth\RegisterController@register_user')->name('register_user');
Route::get('/get_vehicles', 'Auth\LoginController@get_vehicles')->name('get_vehicles');
Route::get('/dashboard', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function() {
    Route::get('/customers', 'HomeController@customers')->name('admin.customers');
    Route::get('/crackers', 'HomeController@crackers')->name('admin.crackers');

    Route::get('/drivers', 'HomeController@drivers')->name('admin.drivers');
    Route::get('/companies', 'HomeController@companies')->name('admin.companies');
    Route::get('/shipments', 'HomeController@shipments')->name('admin.shipments');
    Route::get('/doc_verify/{id?}', 'HomeController@docVerify')->name('docVerify');
    Route::get('/edit-request-approve/{id?}', 'HomeController@approveEditRequest')->name('approveEditRequest');

    Route::prefix('setting')->namespace('Admin\Setting')->group( function() {
        Route::post('/saveCard', 'GeneralSettingController@saveCard')->name('saveCard');
        Route::get('/general_setting', 'GeneralSettingController@index')->name('admin.setting.general_setting');
        Route::get('/dashboard_setting', 'GeneralSettingController@dashboard')->name('admin.setting.dashboard_setting');
        Route::post('/add-advertisement', 'GeneralSettingController@addAdvertisement')->name('addAdvertisement');
        Route::post('/save_homepage_slider', 'GeneralSettingController@save_homepage_slider')->name('admin.setting.save_homepage_slider');
//        Route::post('/save_homepage_slider1', 'GeneralSettingController@save_homepage_slider1')->name('admin.setting.save_homepage_slider1');
//        Route::post('/save_homepage_slider2', 'GeneralSettingController@save_homepage_slider2')->name('admin.setting.save_homepage_slider2');
//        Route::post('/save_homepage_slider3', 'GeneralSettingController@save_homepage_slider3')->name('admin.setting.save_homepage_slider3');
//        Route::post('/save_homepage_slider4', 'GeneralSettingController@save_homepage_slider4')->name('admin.setting.save_homepage_slider4');
        Route::post('/save_about_us_banner', 'GeneralSettingController@save_about_us_banner')->name('admin.setting.save_about_us_banner');
        Route::post('/save_about_us_body', 'GeneralSettingController@save_about_us_body')->name('admin.setting.save_about_us_body');
        Route::post('/save_homepage_card1', 'GeneralSettingController@save_homepage_card1')->name('admin.setting.save_homepage_card1');
        Route::post('/save_homepage_card2', 'GeneralSettingController@save_homepage_card2')->name('admin.setting.save_homepage_card2');
        Route::post('/save_homepage_card3', 'GeneralSettingController@save_homepage_card3')->name('admin.setting.save_homepage_card3');
        Route::post('/save_homepage_card4', 'GeneralSettingController@save_homepage_card4')->name('admin.setting.save_homepage_card4');
        Route::post('/save_faq_banner', 'GeneralSettingController@save_faq_banner')->name('admin.setting.save_faq_banner');
        Route::get('/homepage_update_status', 'GeneralSettingController@homepage_update_status')->name('admin.setting.homepage_update_status');
        Route::get('/make_status_inactive_setting', 'GeneralSettingController@make_status_inactive_setting')->name('admin.setting.make_status_inactive_setting');
        Route::get('/advertisementStatusUpdate', 'GeneralSettingController@advertisementStatusUpdate')->name('advertisementStatusUpdate');
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
        Route::post('/add_vehicle_type', 'VehicleCategoryController@add_vehicle_type')->name('admin.setting.add_vehicle_type');
        Route::get('/edit_vehicle_category', 'VehicleCategoryController@edit_vehicle_category')->name('admin.setting.edit_vehicle_category');
        Route::get('/update_vehicle_category', 'VehicleCategoryController@update_vehicle_category')->name('admin.setting.update_vehicle_category');
        Route::get('/delete_vehicle_category', 'VehicleCategoryController@delete_vehicle_category')->name('admin.setting.delete_vehicle_category');
        Route::get('/make_status_inactive_vehicle_category', 'VehicleCategoryController@make_status_inactive_vehicle_category')->name('admin.setting.make_status_inactive_vehicle_category');
        Route::get('/make_status_active_vehicle_category', 'VehicleCategoryController@make_status_active_vehicle_category')->name('admin.setting.make_status_active_vehicle_category');
        Route::get('/vehicle', 'VehicleController@index')->name('admin.setting.vehicle');
        Route::post('/add_vehicle', 'VehicleController@add_vehicle')->name('admin.setting.add_vehicle');
        Route::post('/edit_vehicle', 'VehicleController@edit_vehicle')->name('admin.setting.edit_vehicle');
        Route::post('/update_vehicle', 'VehicleController@update_vehicle')->name('admin.setting.update_vehicle');
        Route::get('/delete_vehicle', 'VehicleController@delete_vehicle')->name('admin.setting.delete_vehicle');
        Route::get('/make_status_active_vehicle', 'VehicleController@make_status_active_vehicle')->name('admin.setting.make_status_active_vehicle');
        Route::get('/vehicle_status', 'VehicleController@vehicle_status')->name('admin.setting.vehicle_status');
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
Route::group(['prefix' => 'user', 'middleware' => ['auth']], function () {
        Route::get('/get/notifications', 'HomeController@getAllNotfication')->name('get.all.notification');
        Route::get('/count/notifications', 'HomeController@countAllNotification')->name('count.all.notification');
        Route::get('/profile/{id}', 'HomeController@profile')->name('show.profile');
        Route::get('/shipment/create', 'CustomerController@create')->name('create.shippment');
        Route::post('/shipment/create', 'ShippmentController@store')->name('create.shipment');
        Route::get('/getVehicles', 'HomeController@getVehicles')->name('getVehicles');
        Route::get('/shipments', 'CustomerController@index')->name('customer.shipments');
        Route::get('/driver/shipments', 'DriverController@index')->name('driver.shipments');
        Route::get('/my-driver/shipments', 'DriverController@myDriverShipments')->name('myDriverShipments');
        Route::get('/my-All/shipments', 'DriverController@myAllShipments')->name('my.all.shipments');
        Route::get('/shipment/driver', 'DriverController@shipmentDriver')->name('shipment.driver');
        Route::get('/save/bid', 'DriverController@bidStore')->name('create.bid');
        Route::get('/update/bid/status', 'CustomerController@bidStatusUpdate')->name('update.bid.status');
        Route::get('/send/bid/revise/request', 'CustomerController@sendBidReviserequest')->name('sendBidReviserequest');
        Route::get('/update/bid/revise/request', 'DriverController@updateBidReviserequest')->name('updateBidReviserequest');
        Route::post('/update/shipment/status', 'DriverController@updateshipmentStatus')->name('updateshipmentStatus');
        Route::get('/shipment/{id}', 'ShippmentController@show')->name('shipmentDetail');
        Route::get('/vehicles', 'DriverController@myVehicles')->name('my.vehicles');
        Route::get('/my-locations', 'HomeController@mysavedlocations')->name('my.locations');
        Route::get('/vehicle/status/update', 'DriverController@vehicleStatusUpdate')->name('vehicle.status.update');
        Route::get('/address/status/update', 'HomeController@addressStatusUpdate')->name('address.status.update');
        Route::post('/vehicle/addVehicle', 'DriverController@addVehicle')->name('addVehicle');
        Route::post('/add-address', 'HomeController@addAddress')->name('addAddress');
        Route::get('/get-driver-vehicle', 'DriverController@getDriverVehicle')->name('getDriverVehicle');
        Route::post('/update-driver-vehicle', 'DriverController@upadteDriverVehicle')->name('upadteDriverVehicle');
        Route::post('/updateLicense', 'HomeController@updateLicense')->name('updateLicense');
        Route::post('/updateProfilePic', 'HomeController@updateProfilePic')->name('updateProfilePic');
        Route::post('/update-cnic', 'HomeController@updateCnic')->name('updateCnic');
        Route::post('/update-personal-profile', 'HomeController@updatePersonalInfo')->name('updatePersonalInfo');
        Route::post('/update-location-details', 'HomeController@updateLocationInfo')->name('updateLocationInfo');
        Route::get('/request-to-edit-profile', 'HomeController@requestToEdit')->name('requestToEdit');
        Route::get('/my-drivers', 'HomeController@myDrivers')->name('myDrivers');
        Route::get('my-vehicles', 'HomeController@myVehicles')->name('myVehicles');
        Route::get('getCompanyDrivers', 'HomeController@getCompanyDrivers')->name('getCompanyDrivers');
        Route::post('createVehicle', 'HomeController@createVehicle')->name('createVehicle');
        Route::post('assignShipment', 'HomeController@assignShipment')->name('assignShipment');
});
Route::get('/getStates', 'HomeController@getStates')->name('getStates');
Route::get('/getCities', 'HomeController@getCities')->name('getCities');
Route::get('/getArea', 'HomeController@getArea')->name('getArea');
Route::get('/getUserAddress', 'HomeController@getUserAddress')->name('getUserAddress');
Route::post('/createUser', 'AuthController@createUser')->name('createUser');
Route::post('/createCracker', 'AuthController@createCracker')->name('createCracker');
Route::post('/createDriver', 'AuthController@createDriver')->name('createDriver');
Route::post('/createSenderAddress', 'AuthController@createSenderAddress')->name('createSenderAddress');
Route::post('/updateSenderAddress', 'AuthController@updateSenderAddress')->name('updateSenderAddress');
Route::get('/getAddress', 'AuthController@getAddress')->name('getAddress');
Route::get('/deleteAddress', 'AuthController@deleteAddress')->name('deleteAddress');
Route::get('/shipment/download/{id}', 'ShippmentController@downloadPdf')->name('downloadPdf');
Route::get('/shipment/assign', 'ShippmentController@shipmentAssign')->name('shipment.assign');
Route::get('/Assign/driver/', 'ShippmentController@assignDriver')->name('assign.driver');

//Route::get('qrcode/{id}', 'QrCodeController@generate')->name('generate.qr');

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
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
// routes/web.php

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\GeneralController::class, 'index'])->name('welcome');
Route::get('/about', [App\Http\Controllers\GeneralController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\GeneralController::class, 'contact'])->name('contact');
Route::post('/contact/submit', [App\Http\Controllers\GeneralController::class, 'contact_submit'])->name('contact.send');
Route::get('/our-service/{slug}', [App\Http\Controllers\GeneralController::class, 'our_service'])->name('our.service');
Route::get('/our-services', [App\Http\Controllers\GeneralController::class, 'our_services'])->name('our.services');
Route::get('/reload-captcha', [App\Http\Controllers\GeneralController::class, 'refreshCaptcha'])->name("captcha.refresh");


Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('route:clear');
    Artisan::call('view:clear');

    return response()->json(['message' => 'Application caches cleared successfully.']);
});
Route::group(['middleware' => 'auth'], function() {
    
    //Services
    Route::resource('services', "ServiceController");
      //Slidiers 
    Route::resource('sliders', "SliderController");

    // Setting
    Route::prefix('setting')->group(function () {
        Route::get('/website-setting/edit', 'SettingController@edit')->name('website-setting.edit');
        Route::post('/website-setting/update/{id}', 'SettingController@update')->name('website-setting.update');
        // Route::get('/home', [App\Http\Controllers\SettingController::class, 'index'])->name('home');
    });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('user', 'UserController');

    Route::resource('permission', 'PermissionController');


    Route::get('/profile', 'UserController@profile')->name('user.profile');

    Route::post('/profile', 'UserController@postProfile')->name('user.postProfile');

    Route::get('/password/change', 'UserController@getPassword')->name('userGetPassword');

    Route::post('/password/change', 'UserController@postPassword')->name('userPostPassword');



});


Route::group(['middleware' => ['auth', 'role_or_permission:admin|create role|create permission']], function() {

    Route::resource('role', 'RoleController');
});

Auth::routes();

//////////////////////////////// axios request

Route::get('/getAllPermission', 'PermissionController@getAllPermissions');
Route::post("/postRole", "RoleController@store");
Route::get("/getAllUsers", "UserController@getAll");
Route::get("/getAllRoles", "RoleController@getAll");
Route::get("/getAllPermissions", "PermissionController@getAll");

/////////////axios create user
Route::post('/account/create', 'UserController@store');
Route::put('/account/update/{id}', 'UserController@update');
Route::delete('/delete/user/{id}', 'UserController@delete');
Route::get('/search/user', 'UserController@search');

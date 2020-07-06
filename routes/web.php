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
    return view('welcome');
});


Auth::routes();



Route::group(['prefix'=>'admin'], function() {
    Route::group(['middleware' => ['auth']], function() {
        Route::get('/profile', 'HomeController@userProFile')->name('profile');
        Route::resource('users','UsersController');
        Route::get('', 'UsersController@index')->name('home');
        Route::get('deleteRole', 'RoleController@destroy1')->name('roles.destroy1');
        Route::resource('roles','RoleController');
        Route::resource('permission','PermissionController');
        Route::post('update_profile', 'HomeController@updateUserProfile')->name('update-profile');
        Route::resource('benhvien', 'benhvienController');
        Route::resource('chuyenkhoa', 'chuyenkhoaController');
        Route::resource('bacsi','bacsiController');
        Route::resource('khunggio','khunggioController');
        Route::resource('benhnhan','benhnhanController');
        Route::resource('sms','smsController');
        Route::post('cropie', 'UsersController@uploadImage')->name('croppie');
        Route::get('changePassword', 'HomeController@changePassword')->name('changePassword');
        Route::get('export', 'MyController@export')->name('export');
        Route::get('importExportView', 'MyController@importExportView');
        Route::post('import', 'MyController@import')->name('import');
    });
    
});

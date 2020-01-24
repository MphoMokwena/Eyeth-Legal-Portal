<?php

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
    return view('auth.login');
});

Auth::routes();
//Dashboard
Route::get('/admin', 'HomeController@index')->name('admin');
//Application forms
Route::get('/admin_application', 'ApplicationController@index')->name('admin_application');
Route::post('/admin_application', 'ApplicationController@addapplication')->name('admin_application');
//Admin Profile
Route::get('/profile', 'ProfileController@index')->name('admin_profile');
Route::post('/profile', 'ProfileController@update')->name('admin_profile');
//Admin Email
Route::get('/admin_email', 'EmailsController@index')->name('admin_email');
Route::post('/admin_email', 'EmailsController@send')->name('admin_email');
// Route::resource('profile', 'ProfileController');
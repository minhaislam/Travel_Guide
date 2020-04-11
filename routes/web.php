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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'LoginController@index')->name('login.index')
;
Route::post('/', 'LoginController@login');

Route::get('/registration', 'registrationController@index');
Route::post('/registration', 'registrationController@register')->name('register.user');
Route::group(['middleware'=>['sess']], function(){
Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/scout', 'ScoutController@index')->name('scout.index');
Route::get('/user', 'UserController@index')->name('user.index');
});
Route::get('/logout', 'LogoutController@index')->name('logout.index')
;
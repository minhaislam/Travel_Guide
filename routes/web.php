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
    return view('Home');
});
//Route::get('/', 'HomeController@index')->name('home.index')
Route::get('/login', 'LoginController@index')->name('login.index')
;
Route::post('/login', 'LoginController@login');

Route::get('/registration', 'registrationController@index');
Route::post('/registration', 'registrationController@register')->name('register.user');
Route::get('/logout', 'LogoutController@index')->name('logout.index');
Route::group(['middleware'=> ['sess']], function(){


	
Route::get('/admin', 'AdminController@index')->name('admin.index')->middleware('type');


Route::get('/admin/profile/{id}', 'AdminController@profile')->name('profile.admin');


Route::get('/admin/view_users', 'AdminController@list')->name('home.list');
Route::get('/admin/delete/{id}', 'AdminController@delete')->name('admin.delete');
Route::post('/admin/delete/{id}', 'AdminController@destroy');
Route::get('/admin/create_user', 'AdminController@add')->name('add.user');
Route::post('/admin/create_user', 'AdminController@create')->name('create.user');
Route::get('/admin/edit/{id}', 'AdminController@edit')->name('profile.edit');
Route::post('/admin/edit/{id}', 'AdminController@update');
Route::get('/admin/requests', 'AdminController@requests')->name('admin.requests');
Route::get('/admin/accept{id}', 'AdminController@accept')->name('admin.accept');
Route::post('/admin/accept{id}','AdminController@confirm');
Route::get('admin/reject/{id}', 'AdminController@delete1');
Route::get('admin/deletecomment/{id}', 'AdminController@delete2');



//Scout:
Route::get('/scout/profile/{id}', 'ScoutController@profile')->name('profile.scout');
Route::get('/scout', 'ScoutController@index')->name('scout.index')->middleware('type');
Route::get('/scout/edit/{id}', 'ScoutController@edit')->name('profile1.edit');
Route::post('/scout/edit/{id}', 'ScoutController@update');
Route::get('/scout/addinfo', 'ScoutController@addinfo')->name('scout.addinfo');
Route::post('/scout/addinfo', 'ScoutController@add');

//User:

Route::get('/user', 'UserController@index')->name('user.index')->middleware('type');
Route::get('/user/profile/{id}', 'UserController@profile')->name('profile.user');
Route::get('/user/edit/{id}', 'UserController@edit')->name('profile2.edit');
Route::post('/user/edit/{id}', 'UserController@update');



Route::get('/user/details/{id}', 'UserController@details')->name('user.details');
Route::post('/user/details/{id}', 'UserController@comment')->name('user.comment');
Route::get('/user/searchresult', 'UserController@search')->name('user.searchresult');
Route::get('/user/checklist/{id}', 'UserController@checklist')->name('user.checklist');
Route::post('/user/checklist/{id}', 'UserController@checklisted')->name('user.checklisted');
Route::get('/user/wishlist/{id}', 'UserController@wishlist')->name('user.wishlist');

Route::get('user/deletewish/{id}/{id2}', 'UserController@deletewish');

});
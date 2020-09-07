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
Route::get('/signin', 'SignController@index')->name('signin');
Route::post('/postlogin', 'SignController@postlogin')->name('postlogin');
Route::get('/signup', 'SignController@register')->name('signup');
Route::post('/create', 'SignController@create')->name('create');
Route::get('/logout', 'SignController@logout')->name('logout');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/user/cari', 'UserController@cari');
    Route::get('/user', 'UserController@index')->name('user');
    Route::post('/user/create', 'UserController@create')->name('user.create');
    Route::get('/user/{id}/edit', 'UserController@edit')->name('user.edit');
    Route::post('/user/{id}/update', 'UserController@update')->name('user.update');
    Route::get('/user/{id}/delete', 'UserController@delete')->name('user.delete');
});

Route::group(['middleware' => ['auth', 'checkRole:calon']], function () {
    Route::get('/user/profile', 'ProfileController@profile')->name('profile');
    Route::get('/user/profile/{id}/edit', 'ProfileController@edit')->name('profile.edit');
    Route::post('/user/profile/{id}/update', 'ProfileController@update')->name('profile.update');
});

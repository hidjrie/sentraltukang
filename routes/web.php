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
Route::get('/users', 'UserController@index')->name('user.index');
Route::get('/profile', 'ProfileController@index')->name('profile.index');
Route::get('/profile/{profile}/edit', 'ProfileController@edit')->name('profile.edit');
Route::patch('/profile/{profile}', 'ProfileController@update')->name('profile.update');

Auth::routes();


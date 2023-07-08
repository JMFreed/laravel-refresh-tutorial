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

Route::get('/', function () { return view('index'); })->name('index');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/contact-us', function () { return view('contact-us'); })->name('contact-us');

Route::get('/countries', 'App\Http\Controllers\CountryController@index')->name('countries.index');
Route::get('/countries/create', 'App\Http\Controllers\CountryController@create')->name('countries.create');
Route::post('/countries/create', 'App\Http\Controllers\CountryController@store')->name('countries.store');
Route::get('/countries/view/{id}', 'App\Http\Controllers\CountryController@show')->name('countries.show');
Route::get('/countries/edit/{id}', 'App\Http\Controllers\CountryController@edit')->name('countries.edit');
Route::post('/countries/edit/{id}', 'App\Http\Controllers\CountryController@update')->name('countries.update');
Route::get('/countries/delete/{id}', 'App\Http\Controllers\CountryController@destroy')->name('countries.destroy');

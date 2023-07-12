<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CountryController;
use App\Http\Controllers\PostcodeController;

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

Route::prefix('countries')->group(function() {
    Route::get('/', [CountryController::class, 'index'])->name('countries.index');
    Route::get('/create', [CountryController::class, 'create'])->name('countries.create');
    Route::post('/create', [CountryController::class, 'store'])->name('countries.store');
    Route::get('/view/{id}', [CountryController::class, 'show'])->name('countries.show');
    Route::get('/edit/{id}', [CountryController::class, 'edit'])->name('countries.edit');
    Route::post('/edit/{id}', [CountryController::class, 'update'])->name('countries.update');
    Route::get('/delete/{id}', [CountryController::class, 'destroy'])->name('countries.destroy');
});

Route::prefix('postcodes')->group(function() {
    Route::get('/', [PostcodeController::class, 'index'])->name('postcodes.index');
    Route::get('/create', [PostcodeController::class, 'create'])->name('postcodes.create');
    Route::post('/create', [PostcodeController::class, 'store'])->name('postcodes.store');
    Route::get('/view/{id}', [PostcodeController::class, 'show'])->name('postcodes.show');
    Route::get('/edit/{id}', [PostcodeController::class, 'edit'])->name('postcodes.edit');
    Route::post('/edit/{id}', [PostcodeController::class, 'update'])->name('postcodes.update');
    Route::get('/delete/{id}', [PostcodeController::class, 'destroy'])->name('postcodes.destroy');
});

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', 'App\Http\Controllers\ServiceController@index')->middleware(['auth'])->name('dashboard');
Route::post('/rating-store','App\Http\Controllers\RatingController@store')->name('rating.store');
Route::post('/avgRating','App\Http\Controllers\RatingController@avgRating')->name('avgRating');
require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HotelController;
use App\Http\Controllers\HotelReviewController;
use App\Http\Controllers\HomeController;


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

Route::get('/test', function () {
    return view('test');
});


//Route::get('/', [EpsRapidController::class, 'test'])->name('welcome');

Auth::routes();

Route::get('/', [HomeController::class, 'home'])->name('welcome');

Route::resource('hotels', HotelController::class);

Route::resource('hotels.reviews', HotelReviewController::class);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

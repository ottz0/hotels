<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


//Route::get('/', [EpsRapidController::class, 'test'])->name('welcome');

Route::get('/', [HomeController::class, 'home'])->name('welcome');

Route::resource('hotels', HotelController::class);

Route::resource('hotels.reviews', HotelReviewController::class);

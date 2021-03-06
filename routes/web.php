<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HotelController;
use App\Http\Controllers\HotelReviewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServerController;


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

Route::get('/form-login', function () {
    return view('forms-singles.form-login');
});

Route::get('/infopack', function () {
    return view('forms-singles.form-infopack');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/buy/dedicated-servers/blaze-dedicated-servers', function () {
//     return view('buy.dedicated-servers.blaze');
// });

Route::resource('marketplace/dedicated-servers', ServerController::class);

//Route::get('/', [EpsRapidController::class, 'test'])->name('welcome');

Auth::routes();

Route::get('/', [HomeController::class, 'home'])->name('welcome');



Route::resource('accommodation/{accommodation_type}/accommodations', HotelController::class);

Route::resource('hotels', HotelController::class);
Route::resource('hotels.reviews', HotelReviewController::class);





//nrl/team/players

//marketplace/{product_category}/{products}/{id}

//accommodation/{accommodation_type}/{accommodations}/{id}

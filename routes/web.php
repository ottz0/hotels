<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'home'])->name('welcome');





Route::resource('marketplace/dedicated-servers', ServerController::class);

Route::get('/marketplace', [CategoryController::class, 'index']);
Route::get('/marketplace/{categories}', [CategoryController::class, 'show']);
Route::get('/marketplace/{categories}/{subCategory}', [CategoryController::class, 'subCategory']);

//Route::get('/marketplace/{categories}/{subCategory}/{article}', [ArticleController::class, 'show']);

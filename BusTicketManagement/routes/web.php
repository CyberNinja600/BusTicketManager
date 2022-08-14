<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use app\Http\Controllers\AdminAddRouteController;
Auth::routes();
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

Route::get("/", [App\Http\Controllers\IndexController::class, "index"]); 



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');


#Route::POST('AdminRouteAddSubmit',[App\Http\Controllers\AdminAddRouteController::class,'addRouteAdmin']);

Route::POST('AdminRouteAddSubmit','App\Http\Controllers\AdminAddRouteController@AdminRouteAddSubmit');
Route::POST('AdminRouteDeleteSubmit','App\Http\Controllers\AdminAddRouteController@AdminRouteDeleteSubmit');

Route::POST('AdminAddHighlightSubmit','App\Http\Controllers\AdminAddHighlightController@AdminAddHighlightSubmit');
Route::POST('AdminAddHighlightDeleteSubmit','App\Http\Controllers\AdminAddHighlightController@AdminAddHighlightDeleteSubmit');

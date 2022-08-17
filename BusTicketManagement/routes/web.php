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
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/brand', [App\Http\Controllers\BrandController::class, 'index'])->name('brand');
Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer');
#Route::POST('AdminRouteAddSubmit',[App\Http\Controllers\AdminAddRouteController::class,'addRouteAdmin']);

Route::POST('AdminRouteAddSubmit','App\Http\Controllers\AdminAddRouteController@AdminRouteAddSubmit');
Route::POST('AdminRouteDeleteSubmit','App\Http\Controllers\AdminAddRouteController@AdminRouteDeleteSubmit');

Route::POST('AdminRegisterSubmit','App\Http\Controllers\AdminRegisterController@AdminRegisterSubmit');
Route::POST('AdminRegisterDeleteSubmit','App\Http\Controllers\AdminRegisterController@AdminRegisterDeleteSubmit');


Route::POST('AdminAddHighlightSubmit','App\Http\Controllers\AdminAddHighlightController@AdminAddHighlightSubmit');
Route::POST('AdminAddHighlightDeleteSubmit','App\Http\Controllers\AdminAddHighlightController@AdminAddHighlightDeleteSubmit');


Route::POST('BrandAddTicketSubmit','App\Http\Controllers\BrandTicketPublishedController@BrandAddTicketSubmit');
Route::POST('BrandDeleteTicketSubmit','App\Http\Controllers\BrandTicketPublishedController@BrandDeleteTicketSubmit');


Route::POST('CustomerAddTicketSubmit','App\Http\Controllers\CustomerTicketInfoController@CustomerAddTicketSubmit');

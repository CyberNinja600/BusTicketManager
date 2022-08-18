<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CustomerController;
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
Route::get('/customerticket', [App\Http\Controllers\CustomerTicketController::class, 'index'])->name('customerticket');
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout');
Route::get('/BrandRegister', [App\Http\Controllers\RegisterBrandController::class, 'index'])->name('BrandRegister');
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
Route::POST('CustomerBuyTicketSubmit','App\Http\Controllers\CustomerBuyTicketController@CustomerBuyTicketSubmit');
Route::POST('CustomerPaymentFinalSubmit','App\Http\Controllers\PaymentConfirmController@CustomerPaymentFinalSubmit');

Route::POST('BrandRequestSubmit','App\Http\Controllers\BrandRequestServController@BrandRequestSubmit');
Route::POST('BrandrequestDelete','App\Http\Controllers\deleteBrandRequest@BrandrequestDelete');
<?php

use Illuminate\Support\Facades\Route;
use App\Models\customer;
use App\Models\vendor;

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
     return view('agenthome'); 
    //  return view('auth.login');
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addcustomer', [App\Http\Controllers\HomeController::class, 'index1'])->name('addcustomer');
Route::get('/addvendor', [App\Http\Controllers\vendorscontroller::class, 'index'])->name('addvendor');
Route::post('/savecustomer', [App\Http\Controllers\customerController::class, 'store'])->name('savecustomer');
Route::post('/savevendor', [App\Http\Controllers\vendorscontroller::class, 'store'])->name('savevendor');

Route::post('delete_customer/{id}',[App\Http\Controllers\HomeController::class,'destroy'])->name('delete_customer');

Route::post('delete_vendor/{id}',[App\Http\Controllers\vendorscontroller::class,'destroy'])->name('delete_vendor');


Route::post('editdata',[App\Http\Controllers\DeliveryController::class,'edit2'])->name('editdata');
Route::get('/adddelivery', [App\Http\Controllers\DeliveryController::class, 'index'])->name('adddelivery');
Route::post('delete_delivery/{id}',[App\Http\Controllers\DeliveryController::class,'destroy'])->name('delete_delivery');
Route::post('/savedelivery', [App\Http\Controllers\DeliveryController::class, 'store'])->name('savedelivery');
Route::post('update_delivery/{id}',[App\Http\Controllers\DeliveryController::class,'update'])->name('update_delivery');
Route::post('complete_delivery/{id}',[App\Http\Controllers\DeliveryController::class,'complete'])->name('complete_delivery');

Route::get('show_delivery/{id}',[App\Http\Controllers\DeliveryController::class,'show'])->name('show_delivery');




Route::post('update_reverse/{id}',[App\Http\Controllers\DeliveryController::class,'reverse'])->name('update_reverse');

Route::get('/pending-delivery', [App\Http\Controllers\DeliveryController::class, 'index4'])->name('pending-delivery');


 Route::get('/addtracking', [App\Http\Controllers\TrackingController::class, 'index'])->name('addtracking');
 Route::post('/savetracking', [App\Http\Controllers\TrackingController::class, 'store'])->name('savetracking');


  
 Route::get('/receivegood', [App\Http\Controllers\GoodsreceiveController::class, 'index'])->name('receivegood');



 
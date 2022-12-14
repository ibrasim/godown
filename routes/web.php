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


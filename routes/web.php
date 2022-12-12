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
     return view('agenthome'); 
    //  return view('auth.login');
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addcustomer', [App\Http\Controllers\HomeController::class, 'index1'])->name('addcustomer');
Route::get('/addvendor', [App\Http\Controllers\HomeController::class, 'index2'])->name('addvendor');
Route::post('/savecustomer', [App\Http\Controllers\customerController::class, 'store'])->name('savecustomer');

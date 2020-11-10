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

Auth::routes();
Route::get('/', [App\Http\Controllers\WellcomeController::class, 'index'])->name('welcome');
Route::post('/register_lunch', [App\Http\Controllers\WellcomeController::class, 'lunch'])->name('register_lunch');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/datatable', [App\Http\Controllers\HomeController::class, 'getData'])->name('getData');
Route::get('/qr_code_action', [App\Http\Controllers\HomeController::class, 'QRCode'])->name('QRcode');
Route::post('/getInfo', [App\Http\Controllers\HomeController::class, 'getInfo'])->name('getInfo');

<?php

use App\Http\Controllers\AsingController;
use App\Http\Controllers\GarantController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReparController;
use App\Http\Controllers\SedeController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::resource('sedes', SedeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

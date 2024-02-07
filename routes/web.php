<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('layout.layout');
});

//route resource Pengelola
Route::resource('/pengelola', \App\Http\Controllers\PengelolaController::class);
//route resource Operating System (OS)
Route::resource('/operatingsystem', \App\Http\Controllers\OperatingSystemController::class);
//route resource Domain Name System (DNS)
Route::resource('/domainnamesystem', \App\Http\Controllers\DomainNameSystemController::class);
//route resource Lokasi
Route::resource('/lokasi', \App\Http\Controllers\LokasiController::class);
//route resource Compatibility
Route::resource('/compatibility', \App\Http\Controllers\CompatibilityController::class);
//route resource Server
Route::resource('/server', \App\Http\Controllers\ServerController::class);
//route resource Server
Route::resource('/dashboard', \App\Http\Controllers\DashboardController::class);


//route Login and Register Page
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [\App\Http\Controllers\LoginController::class, 'login_proses'])->name('login_proses');
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
Route::get('/register', [\App\Http\Controllers\LoginController::class, 'register'])->name('register');
Route::post('/register-store', [\App\Http\Controllers\LoginController::class, 'register_store'])->name('register_store');

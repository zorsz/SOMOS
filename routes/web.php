<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevicesController;

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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    //Route::get('/devices', function () {
      //  return view('devices.index');
    //})->name('devices');

    
    //Route::get('/device/create', [DevicesController::class, 'create']);

    Route::resource('devices',DevicesController::class);

    Route::get('/multiuploader', function () {
        return view('multiuploader');
    })->name('multiuploader');


    Route::get('/deviceinfo', function () {
        return view('devices.deviceinfo');
    })->name('devicesinfo');

    

    Route::get('/prueba', function () {
        return view('prueba');
    })->name('prueba');


});

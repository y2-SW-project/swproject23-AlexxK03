<?php

use App\Http\Controllers\TripController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::Resource('/trips',TripController::class)->middleware(['auth']);



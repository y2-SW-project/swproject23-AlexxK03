<?php

use App\Http\Controllers\TripController;
use App\Models\Trip;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::Resource('/trips',TripController::class)->middleware(['auth'])->names('trips');



<?php

use App\Http\Controllers\TripController;
use App\Http\Controllers\DocumentationController;
use App\Models\Trip;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/docs', [App\Http\Controllers\HomeController::class, 'docsindex'])->name('home.documentation.index');

Route::Resource('/trips',TripController::class)->middleware(['auth'])->names('trips');
Route::Resource('/documentation',DocumentationController::class)->middleware(['auth'])->names('documentation');



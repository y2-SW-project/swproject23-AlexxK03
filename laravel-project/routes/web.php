<?php

use App\Http\Controllers\TripController;
use App\Http\Controllers\DocumentationController;
use App\Models\Trip;
use App\Models\Documentation;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// require __DIR__ . '/auth.php';

Auth::routes();

// Route::get('/trips', [App\Http\Controllers\HomeController::class, 'index'])->name('trips');

// Route::get('/documentation', [App\Http\Controllers\HomeController::class, 'documentationIndex'])->name('documentation.index');

Route::Resource('/trips',TripController::class)->middleware(['auth'])->names('trips');

Route::Resource('/documentations',DocumentationController::class)->middleware(['auth'])->names('documentations');



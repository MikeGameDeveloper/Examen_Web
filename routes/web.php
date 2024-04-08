<?php

use App\Http\Controllers\VehicleController;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\Frontend::class, 'index'])->name('home'); 

Route::resource('vehicles', VehicleController::class);
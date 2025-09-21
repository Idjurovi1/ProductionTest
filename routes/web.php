<?php

use Illuminate\Support\Facades\Route;
use App\Models\Car;

Route::get('/', function () {
    $cars = Car::all();
    return view('welcome', compact('cars'));
});

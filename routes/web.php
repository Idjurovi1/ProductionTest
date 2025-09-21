<?php

use Illuminate\Support\Facades\Route;
use App\Models\Car;

Route::get('/', function () {
    $cars = Car::all(); // uzmi sve aute iz baze
    return view('welcome', compact('cars'));
});

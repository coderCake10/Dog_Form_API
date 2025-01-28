<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/main');
});

Route::get('/fetch_dog/{breed}', [App\Http\Controllers\DogController::class, 'produce_image'])->name('produce_image');
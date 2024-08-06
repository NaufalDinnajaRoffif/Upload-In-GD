<?php

use App\Http\Controllers\GDStorageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('upload');
});

Route::post('/upload', [GDStorageController::class, 'upload']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

Route::get('/', function () {
    return view('komcatHome');
});

Route::get('/catches',[GeneralController::class,'catchAbout'])->name('public');
Route::get('/more',[GeneralController::class,'getAbout'])->name('about');


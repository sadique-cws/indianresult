<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultController;

Route::get('/', [ResultController::class,"index"])->name("homepage");

Route::post('/insert',[ResultController::class,"store"])->name('insert');


Route::view("/insert","insert");
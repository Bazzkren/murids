<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('murids', \App\Http\Controllers\MuridController::class);


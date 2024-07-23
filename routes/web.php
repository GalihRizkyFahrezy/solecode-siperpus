<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Route::get('/',[UserController::class,'userindex'])->name('userindex');

Route::get('/',[UserController::class,'userindex'])->name('userindex');
Route::get('/denda/{id}',[UserController::class,'denda'])->name('denda');
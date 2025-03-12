<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('user')->group(function(){
    Route::post('create',[UserController::class,'create_user']);
    Route::post('login',[UserController::class,'login']);
    Route::post('logout',[UserController::class,'logout']);
});

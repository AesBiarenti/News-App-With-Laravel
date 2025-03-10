<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('user')->group(function(){
    Route::post('create',[UserController::class,'create_user']);
    Route::post('login',[UserController::class,'login']);
    Route::post('logout',[UserController::class,'logout']);
});

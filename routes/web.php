<?php

use App\Http\Controllers\UserController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('user')->withoutMiddleware(VerifyCsrfToken::class)
->group(function(){
    Route::post('create',[UserController::class,'create_user']);
    Route::post('login',[UserController::class,'login']);
    Route::get('get',[UserController::class,'get_user']);
    Route::get('logout',[UserController::class,'logout']);
});

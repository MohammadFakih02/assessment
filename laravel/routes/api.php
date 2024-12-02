<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\ApiCountMiddleware;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->middleware(ApiCountMiddleware::class)->group(function () {

    Route::get('/{id?}',[UserController::class,'getUser']);
    Route::post('/',[UserController::class,'createUser']);
    Route::put('/',[UserController::class,'updateUser']);
    Route::delete('/',[UserController::class,'deleteUser']);
});

Route::prefix('project')->middleware(ApiCountMiddleware::class)->group(function () {

    Route::get('/withusers',[ProjectController::class,'getProjectwithUsers']);
    Route::get('/{id?}',[ProjectController::class,'getProject']);
    Route::post('/',[ProjectController::class,'createProject']);
    Route::put('/',[ProjectController::class,'updateProject']);
    Route::delete('/',[ProjectController::class,'deleteProject']);
});
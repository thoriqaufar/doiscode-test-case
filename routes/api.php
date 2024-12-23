<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [\App\Http\Controllers\API\UserController::class, 'register'])->name('user.register');
Route::post('/login', [\App\Http\Controllers\API\UserController::class, 'login'])->name('user.login');

Route::middleware('auth:sanctum')->group(function(){
    Route::post('/logout',[\App\Http\Controllers\API\UserController::class,'logout'])->name('user.logout');
    Route::get('/employee', [\App\Http\Controllers\API\EmployeeController::class, 'index']);
});

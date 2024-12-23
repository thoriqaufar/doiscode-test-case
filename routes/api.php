<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('employee', [\App\Http\Controllers\API\EmployeeController::class, 'index']);



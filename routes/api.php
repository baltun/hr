<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::resource('departments', App\Http\Controllers\API\DepartmentAPIController::class);


Route::resource('positions', App\Http\Controllers\API\PositionAPIController::class);


Route::resource('employees', App\Http\Controllers\API\EmployeeAPIController::class);


Route::get('email', \App\Http\Controllers\SendTextToEmailController::class);

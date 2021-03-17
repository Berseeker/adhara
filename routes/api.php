<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\Auth\RolController;
use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\Auth\RegisterController;
use App\Http\Controllers\API\Auth\RecoverPasswordController;

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

// -------  Rutas para Registro y Login de usuarios GPH  -------

Route::post('register',[RegisterController::class,'store']);
Route::post('login',[LoginController::class,'index']);
Route::post('request-new-password',[RecoverPasswordController::class,'index']);
Route::post('reset-password',[RecoverPasswordController::class,'restore']);


// -------  Rutas Protegidas por Bearer Token  -------

Route::middleware(['auth:sanctum'])->group(function (){

    Route::get('logout',[LoginController::class,'logout']);

    Route::get('roles',[RolController::class,'index']);
    Route::get('rol/{slug}',[RolController::class,'show']);
    Route::patch('rol/{slug}',[RolController::class,'update']);
    Route::post('rol',[RolController::class,'store']);
    Route::delete('delete-rol',[RolController::class,'store']);

});

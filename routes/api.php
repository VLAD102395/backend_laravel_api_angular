<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//importamos AuthController
use App\Http\Controllers\AuthController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Empezamos
Route::prefix('/v1/auth')->group(function(){
    // Llamamos a las funciones de AuthController
    Route::post("/login", [AuthController::class, "funIngresar"]);
    Route::post("/register", [AuthController::class, "funRegistrar"]);
    // Debemos Proteger estas rutas con middleware(pregunta antes de dar autorizacion mediante credencial)
    // Tenemos sanctum - passport
    // Solo los que esten logueados podran acceder
    Route::middleware('auth:sanctum')->group(function(){
        Route::get("/profile", [AuthController::class, "funPerfil"]);
        Route::post("/logout", [AuthController::class, "funSalir"]);
    });
});


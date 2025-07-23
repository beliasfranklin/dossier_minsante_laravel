<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DossierController;
use App\Http\Controllers\Api\StructureController;
use App\Http\Controllers\Api\UserController;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    // Authentification
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);

    // Structures
    Route::apiResource('structures', StructureController::class);

    // Utilisateurs
    Route::apiResource('users', UserController::class);

    // Dossiers
    Route::apiResource('dossiers', DossierController::class);
});

<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:Admin,PT. XYZ'])->group(function () {
    Route::get('/users', [UserController::class, 'index']);
});

Route::middleware(['auth', 'role:Manager,PT. XYZ'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->where('role', 'Supervisor');
});

Route::middleware(['auth', 'role:Admin,PT. XYZ-1'])->group(function () {
    Route::get('/xyz-1/users', [UserController::class, 'index']);
});

Route::middleware(['auth', 'role:Supervisor,PT. XYZ-1'])->group(function () {
    Route::get('/xyz-1/users', [UserController::class, 'index']);
});

Route::middleware(['auth', 'role:Admin,PT. XYZ-2'])->group(function () {
    Route::get('/xyz-2/users', [UserController::class, 'index']);
});

Route::middleware(['auth', 'role:Supervisor,PT. XYZ-2'])->group(function () {
    Route::get('/xyz-2/users', [UserController::class, 'index']);
});


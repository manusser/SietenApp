<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PresupuestoController;
use App\Http\Controllers\Admin\UserController;

// Ruta controlada por RouteServiceProvider.php dentro de app\Providers
Route::get('', [HomeController::class, 'index'])->name('admin.home');

// Rutas de administrador
Route::resource('presupuestos', PresupuestoController::class)->names('admin.presupuestos');
Route::resource('users', UserController::class)->names('admin.users');
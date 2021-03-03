<?php

use App\Http\Controllers\Admin\Clientes\ClienteController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Empleados\EmpleadoController;
use App\Http\Controllers\Admin\Welcome\PerfilController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistroController;
use App\Http\Controllers\Home\CalendarController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

//Google Auth
Route::get('/auth/redirect/google', [GoogleController::class, 'redirectToGoogle'])
    ->name('google.login');
Route::get('/auth/callback/google', [GoogleController::class, 'registerOrLogin']);

///Home
Route::get('/get-calendar-events', [CalendarController::class, 'index'])
    ->name('calendar.eventos');
//Registro
Route::get('/registro', [RegistroController::class, 'index'])
    ->name('registro');
//Login
Route::get('/login', [LoginController::class, 'index'])
    ->name('login');

Route::middleware('auth')->group(function () {
});

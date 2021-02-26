<?php

use App\Http\Controllers\Admin\Clientes\ClienteController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Empleados\EmpleadoController;
use App\Http\Controllers\Admin\Welcome\PerfilController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Home\CalendarController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/get-calendar-events', [CalendarController::class, 'index'])
    ->name('calendar.eventos');

Route::middleware('auth')->group(function () {
});

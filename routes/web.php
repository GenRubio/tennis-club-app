<?php

use App\Http\Controllers\Admin\Clientes\ClienteController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Empleados\EmpleadoController;
use App\Http\Controllers\Admin\Welcome\PerfilController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

//Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
//Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login');

Route::middleware('auth')->group(function () {
    //Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //Route::get('/dashboard/logut', [DashboardController::class, 'logOut'])->name('logOut');
    //Welcome Main Routes
    //Route::get('/admin/dashboard/profile', [PerfilController::class, 'index'])->name('admin.welcome.profile');
    //Clientes Routes
    //Route::get('/admin/dashboard/c/new-client', [ClienteController::class, 'index'])->name('admin.new.cliente');
    //Empelados Routes
    //Route::get('/admin/dashboard/e/new-empleado', [EmpleadoController::class, 'index'])->name('admin.new.empleado');
});

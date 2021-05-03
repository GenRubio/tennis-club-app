<?php

use App\Http\Controllers\Auth\EmailValidateController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\Profile\SettingsController;
use App\Http\Controllers\Auth\RecoverPasswordController;
use App\Http\Controllers\Auth\RegistroController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Home\CalendarController;
use App\Http\Controllers\Home\ContactoController;
use App\Http\Controllers\Home\EscuelaPadelController;
use App\Http\Controllers\Home\GalleriaController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\InstalacionesController;
use App\Http\Controllers\Home\NoticiasController;
use App\Http\Controllers\Home\RestauranteController;
use App\Http\Controllers\Home\SociosController;
use App\Http\Controllers\Home\TiendaController;

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

//Google Auth
Route::get('/auth/redirect/google', [GoogleController::class, 'redirectToGoogle'])
    ->name('google.login');
Route::get('/auth/callback/google', [GoogleController::class, 'registerOrLogin']);

//Validate email
Route::get('/email-validate', [EmailValidateController::class, 'validar'])
    ->name('email.validate');

//Recover password
Route::get('/recover-password', [RecoverPasswordController::class, 'index'])
    ->name('recover.password');

Route::get('/recover-password-validate', [RecoverPasswordController::class, 'recoverPassword'])
    ->name('recover.password.validate');
///Home
Route::get('/get-calendar-events', [CalendarController::class, 'index'])
    ->name('calendar.eventos');

Route::get('/instalaciones/{slug}', [InstalacionesController::class, 'index'])
    ->name('instalacion');

Route::get('/tienda', [TiendaController::class, 'index'])
    ->name('tienda');

Route::get('/contacto', [ContactoController::class, 'index'])
    ->name('contacto');

Route::get('/multimedia', [GalleriaController::class, 'index'])
    ->name('galleria');
//Registro
Route::get('/registro', [RegistroController::class, 'index'])
    ->name('registro');
//Login
Route::get('/login', [LoginController::class, 'index'])
    ->name('login');
//Noticias
Route::get('/noticias/{slug?}', [NoticiasController::class, 'index'])->name('noticias');
//Restaurante
Route::get('/restaurante', [RestauranteController::class, 'index'])->name('restaurante');
//Socios
Route::get('/socio', [SociosController::class, 'index'])->name('socios');

//Escuelas
Route::get('/escuela-padel', [EscuelaPadelController::class, 'index'])->name('escuela.padel');

Route::middleware('auth')->group(function () {
    Route::get('/me', [DashboardController::class, 'index'])->name('me');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('user.logaut');

    Route::get('/me/datos-cliente', [DashboardController::class, 'datosCliente'])->name('datos.cliente');

    Route::get('/profile', [SettingsController::class, 'index'])->name('profile');
    Route::post('/profile/update/avatar', [SettingsController::class, 'updateAvatar'])->name('update.avatar');

});

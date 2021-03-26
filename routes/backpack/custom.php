<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes

    Route::crud('shoparticle', 'ShopArticleCrudController');
    Route::crud('casalinscripcione', 'CasalInscripcioneCrudController');
    Route::group(['prefix' => 'casalinscripcione/{inscripcion_id}'], function () {
        Route::crud('inscripcion-fechas', 'CasalIncripcionesMeseCrudController');
        Route::crud('inscripcion-opciones', 'CasalInscripcionesDatoCrudController');
    });
    Route::group(['prefix' => 'casalinscripcionesvalidade/{inscripcion_id}'], function () {
        Route::crud('inscripcion-fechas', 'CasalIncripcionesMeseCrudController');
        Route::crud('inscripcion-opciones', 'CasalInscripcionesDatoCrudController');
    });
    Route::group(['prefix' => 'casalhistorial/{inscripcion_id}'], function () {
        Route::crud('inscripcion-fechas', 'CasalIncripcionesMeseCrudController');
        Route::crud('inscripcion-opciones', 'CasalInscripcionesDatoCrudController');
    });
    Route::crud('casalinscripcionesvalidade', 'CasalInscripcionesValidadeCrudController');
    Route::crud('casalhistorial', 'CasalHistorialCrudController');
    Route::crud('alquilerpista', 'AlquilerPistaCrudController');
    Route::crud('calendarevento', 'CalendarEventoCrudController');
    Route::crud('instalacione', 'InstalacioneCrudController');

    Route::group(['prefix' => 'instalacione/{instalacion_id}'], function () {
        Route::crud('images', 'InstalacionImageCrudController');
    });
    //Route::crud('instalacionimage', 'InstalacionImageCrudController');
    Route::crud('shopcategorie', 'ShopCategorieCrudController');
    Route::crud('galleriaimage', 'GalleriaImageCrudController');
    Route::crud('noticia', 'NoticiaCrudController');
}); // this should be the absolute last line of this file
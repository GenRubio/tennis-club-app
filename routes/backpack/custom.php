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
    Route::crud('noticiacomentario', 'NoticiaComentarioCrudController');
    Route::crud('newsletter', 'NewsletterCrudController');
    Route::crud('shopbannerimage', 'ShopBannerImageCrudController');
    Route::crud('restaurantecategoria', 'RestauranteCategoriaCrudController');
    Route::crud('restauranteplato', 'RestaurantePlatoCrudController');
}); // this should be the absolute last line of this file
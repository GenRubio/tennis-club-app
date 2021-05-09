<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

use App\Http\Controllers\Admin\FormSimpleRespuestaCrudController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    /*
    * AJAX
    */
    /* Toggle Active */
    Route::post('toggleField', function (Illuminate\Http\Request $request) {
        return toggleField($request);
    })->name('toggleField');
    /********************************************************************** */

    Route::crud('shoparticle', 'ShopArticleCrudController');

    Route::crud('alquilerpista', 'AlquilerPistaCrudController');
    Route::crud('instalacione', 'InstalacioneCrudController');

    Route::group(['prefix' => 'instalacione/{instalacion_id}'], function () {
        Route::crud('images', 'InstalacionImageCrudController');
    });


    Route::crud('shopcategorie', 'ShopCategorieCrudController');
    Route::crud('galleriaimage', 'GalleriaImageCrudController');
    Route::crud('noticia', 'NoticiaCrudController');

    Route::group(['prefix' => 'noticia/{noticia_id}'], function (){
        Route::crud('noticia-comentario', 'NoticiaComentarioCrudController');
    });

    Route::crud('newsletter', 'NewsletterCrudController');
    Route::crud('shopbannerimage', 'ShopBannerImageCrudController');
    Route::crud('restaurantecategoria', 'RestauranteCategoriaCrudController');
    Route::crud('restauranteplato', 'RestaurantePlatoCrudController');
    Route::crud('restauranteimage', 'RestauranteImageCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('role', 'RoleCrudController');


    Route::crud('client', 'ClientCrudController');
    Route::group(['prefix' => 'client/{client_id}'], function (){
        Route::crud('familiares', 'ClientCrudController');
    });

    Route::crud('clienttipospariente', 'ClientTiposParienteCrudController');
    Route::crud('servicio', 'ServicioCrudController');

    Route::crud('quotasocio', 'QuotaSocioCrudController');

    Route::crud('actividade', 'ActividadeCrudController');
    Route::group(['prefix' => 'actividade/{actividad_id}'], function (){
        Route::crud('inscripciones', 'InscripcionesCrudController');

        Route::crud('fechas', 'ActividadFechaCrudController');
        Route::group(['prefix' => 'fechas/{fecha_id}'], function (){
            Route::crud('horarios', 'ActividadFechaHorarioCrudController');
        });
    });


    Route::crud('actividadtipo', 'ActividadTipoCrudController');
    Route::crud('actividadextra', 'ActividadExtraCrudController');
    
    Route::crud('formgrupoextra', 'FormGrupoExtraCrudController');
    Route::group(['prefix' => 'formgrupoextra/{form_id}'], function (){
        Route::crud('opciones', 'FormOpcionExtraCrudController');
    });
    
    Route::crud('formgrupoopcione', 'FormGrupoOpcioneCrudController');
    Route::group(['prefix' => 'formgrupoopcione/{form_id}'], function (){
        Route::crud('opciones', 'FormOpcionOpcioneCrudController');
    });
    Route::crud('actividadcategoria', 'ActividadCategoriaCrudController');
    
    Route::crud('webvista', 'WebVistaCrudController');
    Route::group(['prefix' => 'webvista/{vista_id}'], function (){
        Route::crud('pdfs', 'WebVistaPdfCrudController');
    });
    Route::crud('socialnetwork', 'SocialNetworkCrudController');
});
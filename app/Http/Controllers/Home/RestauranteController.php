<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\RestauranteCategoria;
use App\Models\RestauranteImage;
use Illuminate\Http\Request;

class RestauranteController extends Controller
{
    public function index(){
        $categoriasRestaurante = RestauranteCategoria::get();
        $galeria = RestauranteImage::where('active', 1)->get();
        return view('pages.home.restaurante', compact('categoriasRestaurante', 'galeria'));
    }
}

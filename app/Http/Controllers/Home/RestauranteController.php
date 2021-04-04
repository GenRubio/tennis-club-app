<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\RestauranteCategoria;
use Illuminate\Http\Request;

class RestauranteController extends Controller
{
    public function index(){
        $categoriasRestaurante = RestauranteCategoria::get();
        return view('pages.home.restaurante', compact('categoriasRestaurante'));
    }
}

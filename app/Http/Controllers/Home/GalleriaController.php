<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\GalleriaImage;
use Illuminate\Http\Request;

class GalleriaController extends Controller
{
    public function index(){
        $images = GalleriaImage::where('activo', 1)
        ->orderBy('id', 'DESC')
        ->where('url_youtube', '')
        ->where('activo', 1)
        ->get();
        $carusel = GalleriaImage::where('activo', 1)
        ->where('carusel', 1)
        ->orderBy('updated_at', 'DESC')
        ->where('activo', 1)
        ->get();
        $destacados = GalleriaImage::where('activo', 1)
        ->where('destacada', 1)
        ->orderBy('updated_at', 'DESC')
        ->where('activo', 1)
        ->get();
        $videos = GalleriaImage::where('url_youtube', '!=', '')
        ->orderBy('id', 'DESC')
        ->where('activo', 1)
        ->limit(5)
        ->get();
        return view('pages.home.multimedia', compact('images', 'carusel', 'destacados', 'videos'));
    }
}

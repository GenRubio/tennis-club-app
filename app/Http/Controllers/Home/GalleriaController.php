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
        ->get();
        $carusel = GalleriaImage::where('activo', 1)
        ->where('carusel', 1)
        ->orderBy('updated_at', 'DESC')
        ->get();
        $destacados = GalleriaImage::where('activo', 1)
        ->where('destacada', 1)
        ->orderBy('updated_at', 'DESC')
        ->limit(3)
        ->get();
        $videos = GalleriaImage::where('url_youtube', '!=', '')
        ->orderBy('id', 'DESC')
        ->limit(5)
        ->get();
        return view('pages.home.galleria', compact('images', 'carusel', 'destacados', 'videos'));
    }
}

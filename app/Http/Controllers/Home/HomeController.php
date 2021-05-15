<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Actividade;
use App\Models\GalleriaImage;
use App\Models\Instalacione;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $instalaciones = Instalacione::where('activo', 1)
        ->get();
        $galleria = GalleriaImage::where('url_youtube', '')
        ->where('activo', 1)
        ->limit(10)
        ->get();

        $actividades = Actividade::where('activo', 1)
        ->where('visible', 1)
        ->whereNotIn('id', [10, 11, 12, 13])
        ->orderBy('id', 'DESC')
        ->limit(4)
        ->get();
        
        return view('home', compact('instalaciones', 'galleria', 'actividades'));
    }
}

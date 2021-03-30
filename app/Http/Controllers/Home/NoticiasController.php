<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function index($slug = null){
        if ($slug != null){
            $ultimasNoticias = Noticia::where('activo', 1)->orderBy('id', 'DESC')->limit(4)->get();
            $noticia = Noticia::where('slug', $slug)->where('activo', 1)->first();
            return view('pages.home.noticias', compact('noticia', 'ultimasNoticias'));
        }
        else{
            
        }
    }
}

<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Actividade;
use App\Models\WebVista;
use Illuminate\Http\Request;

class EscuelaController extends Controller
{
    public function index(Request $request){
        $slug = $request->slug;
        $vista = null;
        if ($slug == "escuela-padel"){
            $actividades = Actividade::whereIn('titulo', ['ESCOLA INFANTIL PADEL', 'ESCOLA ADULTS PADEL'])->get();
            $infantil = Actividade::where('titulo', 'ESCOLA INFANTIL PADEL')->first();
            $adulto = Actividade::where('titulo', 'ESCOLA ADULTS PADEL')->first();
            $vista = WebVista::where('slug', $slug)->first();
        }
        else if ($slug == "escuela-tenis")
        {
            $actividades = Actividade::whereIn('titulo', ['ESCOLA ADULTS TENNIS', 'ESCOLA INFANTIL TENNIS'])->get();
            $infantil = Actividade::where('titulo', 'ESCOLA INFANTIL TENNIS')->first();
            $adulto = Actividade::where('titulo', 'ESCOLA ADULTS TENNIS')->first();
            $vista = WebVista::where('slug', $slug)->first();
        }
        if ($vista){
            return view('pages.home.escuela', compact('vista', 'actividades', 'infantil', 'adulto'));
        }
        else{
            return redirect()->route('home');
        }
    }
}

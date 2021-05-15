<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Actividade;
use App\Models\WebVista;
use Illuminate\Http\Request;

class EscuelaController extends Controller
{
    public function index(Request $request)
    {
        $slug = $request->slug;
        $vista = null;
        if ($slug == "escuela-padel") {
            $actividades = Actividade::whereIn('titulo', ['ESCOLA INFANTIL PADEL', 'ESCOLA ADULTS PADEL'])->get();
            $vista = WebVista::where('slug', $slug)->first();
        } else if ($slug == "escuela-tenis") {
            $actividades = Actividade::whereIn('titulo', ['ESCOLA ADULTS TENNIS', 'ESCOLA INFANTIL TENNIS'])->get();
            $vista = WebVista::where('slug', $slug)->first();
        }
        if ($vista) {
            $actividadesAll = Actividade::where('activo', 1)
                ->where('visible', 1)
                ->whereNotIn('id', [10, 11, 12, 13])
                ->orderBy('id', 'DESC')
                ->limit(4)
                ->get();
            return view('pages.home.escuela', compact('vista', 'actividades', 'actividadesAll'));
        } else {
            return redirect()->route('home');
        }
    }
}

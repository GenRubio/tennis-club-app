<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Actividade;
use Illuminate\Http\Request;

class ActividadesController extends Controller
{
    public function index($slug = null)
    {
        $all = true;
        $actividades = [];
        $actividad = null;
        if ($slug) {
            $all = false;

            $actividad = Actividade::where('slug', $slug)->first();
            $actividades = Actividade::where('activo', 1)
                ->where('visible', 1)
                ->whereNotIn('id', [10, 11, 12, 13, $actividad->id])
                ->orderBy('id', 'DESC')
                ->limit(4)
                ->get();
            if ($actividad) {
                return view('pages.home.actividades', compact('actividad', 'all', 'actividades'));
            } else {
                return redirect()->route('home');
            }
        } else {
            $actividades = Actividade::whereNotIn('id', [10, 11, 12, 13])
                ->where('visible', 1)
                ->where('activo', 1)
                ->orderBy('id', 'DESC')
                ->get();

            return view('pages.home.actividades', compact('actividades', 'all'));
        }
    }
}

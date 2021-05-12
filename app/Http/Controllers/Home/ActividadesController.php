<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Actividade;
use Illuminate\Http\Request;

class ActividadesController extends Controller
{
    public function index ($slug = null){
        $all = true;
        $actividades = [];
        $actividad = null;
        if ($slug){
            $all = false;

            $actividad = Actividade::where('slug', $slug)->first();
            if ($actividad){
                return view('pages.home.actividades', compact('actividad', 'all'));
            }
            else{
                return redirect()->route('home');
            }
        }
        else{
            $actividades = Actividade::whereNotIn('id', [10, 11, 12, 13])
            ->where('visible', 1)
            ->where('activo', 1)
            ->orderBy('id', 'DESC')
            ->get();

            return view('pages.home.actividades', compact('actividades', 'all'));
        }
    }
}

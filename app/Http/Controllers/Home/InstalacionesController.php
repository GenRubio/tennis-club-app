<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Instalacione;
use Illuminate\Http\Request;

class InstalacionesController extends Controller
{
    public function index($slug)
    {
        $instalacion = Instalacione::where('slug', $slug)->first();
        $instalaciones = Instalacione::where('slug', '!=', $slug)->get();
        if ($instalacion) {
            return view('pages.home.instalaciones', compact('instalacion', 'instalaciones'));
        } else {
            return redirect()->route('home');
        }
    }
}

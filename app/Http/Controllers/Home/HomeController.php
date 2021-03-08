<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Instalacione;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $instalaciones = Instalacione::where('activo', 1)
        ->get();
        return view('home', compact('instalaciones'));
    }
}

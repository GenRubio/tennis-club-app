<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Actividade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if (count(auth()->user()->clients) == 0){
            return redirect()->route('datos.cliente');
        }
        
        $actividades = Actividade::where('activo', 1)
        ->where('visible', 1)
        ->orderBy('id', 'DESC')
        ->limit(4)
        ->get();
        return view('pages.auth.dashboard', compact('actividades'));
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function datosCliente(){
        return view('pages.auth.user-datos');
    }
}

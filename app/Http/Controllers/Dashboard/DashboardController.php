<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if (count(auth()->user()->clients) == 0){
            return redirect()->route('datos.cliente');
        }
        
        return view('pages.auth.dashboard');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function datosCliente(){
        return view('pages.auth.user-datos');
    }
}

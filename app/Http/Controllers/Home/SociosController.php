<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\QuotaSocio;
use App\Models\Servicio;
use Illuminate\Http\Request;

class SociosController extends Controller
{
    public function index(){
        $quotas = QuotaSocio::where('activo', 1)->get();
        $servicios = Servicio::where('activo', 1)->get();
        return view('pages.home.socios', compact('quotas', 'servicios'));
    }
}

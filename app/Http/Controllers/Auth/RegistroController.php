<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    public function index(){
        if (Auth::check()){
            return redirect()->route('me');
        }
        else{
            return view('pages.auth.registro');
        }
    }
}

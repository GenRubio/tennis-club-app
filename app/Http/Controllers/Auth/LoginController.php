<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DashboardRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        if (Auth::check()){
            return redirect()->route('dashboard');
        }
        else{
            return view('adminDashboard.login');
        }
    }
    public function login(DashboardRequest $request){

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'El email o contraseña son incorrectos.',
        ]);
    }
}

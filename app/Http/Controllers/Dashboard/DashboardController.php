<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        return view('pages.auth.dashboard');
    }
    public function logaut(){
        Auth::logout();
        return redirect()->route('home');
    }
}

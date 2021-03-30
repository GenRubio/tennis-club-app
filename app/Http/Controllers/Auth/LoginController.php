<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DashboardRequest;
use GuzzleHttp\Psr7\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class LoginController extends Controller
{
    public function index(){
        if (Auth::check()){
            return redirect()->route('me');
        }
        else{
            return view('pages.auth.login');
        }
    }
}

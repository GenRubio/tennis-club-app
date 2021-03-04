<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecoverPasswordController extends Controller
{
    public function index(){
        if (Auth::check()){
            return redirect()->route('me');
        }
        else{
            return view('pages.auth.recover-password');
        }
    }
    public function recoverPassword(Request $request){
        $userId = $request->id;
        $token =  $request->token;

        if ($userId == null || $token == null){
            return redirect()->route('login');
        }
        else{
            $user = User::where('id', decrypt($request->id))
            ->where('token_recover_email', $request->token)
            ->exists();
    
            if ($user){
                return view('pages.auth.recover-password-auth', compact('userId', 'token'));
            }
            else{
                return redirect()->route('login');
            }
        }
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmailValidateController extends Controller
{
    public function validar(Request $request){
        $userId = $request->id;
        $token =  $request->token;
        if ($userId == null || $token == null){
            return redirect()->route('home');
        }
        else{
            $user = User::where('id', decrypt($request->id))
            ->where('token_validate_email', $request->token)
            ->first();
          
            if ($user){
                $user->update(['token_validate_email' => '', 'email_validate' => 1]);
      
                Auth::login($user);

                return redirect()->route('me');
            }
            else{
                return redirect()->route('home');
            }
        }
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function registerOrLogin()
    {
        $socialUser = Socialite::driver('google')->user();

        $user = User::where(['email' => $socialUser->email])->first();
        if ($user) {
            Auth::login($user);
        } else {
            $user = new User();
            $user->email = $socialUser->email;
            $user->provider_id = $socialUser->id;
            $user->email_validate = 1;
            $user->provider = 'google';
            $user->save();

            Auth::login($user);
        }
        return redirect()->route('me');
    }
    public function getBigAvatar($user)
    {
        return str_replace('s96', '', $user->getAvatar());
    }
}

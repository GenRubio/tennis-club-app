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

        $users = User::where(['email' => $socialUser->email])->first();
        if ($users) {
            Auth::login($users);
        } else {
            $user = new User();
            $user->email = $socialUser->email;
            $user->provider_id = $socialUser->id;
            $user->email_validate = 1;
            $user->provider = 'google';
            //$user->image = $this->getBigAvatar($socialUser, 'google');
            $user->save();

            Auth::login($users);
        }
        return redirect()->route('me');
    }
    public function getBigAvatar($user)
    {
        return str_replace('s96', '', $user->getAvatar());
    }
}

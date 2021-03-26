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
        User::firstOrCreate(
            [
                'email' => $socialUser->email
            ],
            [
                'name' => $socialUser->name,
                'provider_id' => $socialUser->id,
                'provider' => 'google',
                'image' => $this->getBigAvatar($socialUser, 'google'),
            ]
        );

        $users = User::where(['email' => $socialUser->email])->first();
        if ($users) {
            Auth::login($users);
            return redirect()->route('me');
        } else {
            return back();
        }
    }
    public function getBigAvatar($user)
    {
        return str_replace('s96', '', $user->getAvatar());
    }
}

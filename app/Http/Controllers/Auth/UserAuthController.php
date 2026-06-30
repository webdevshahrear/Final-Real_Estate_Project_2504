<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Tennant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Socialite;

class UserAuthController extends Controller
{
    function signUp()
    {
        return view('auth.user.signUp');
    }
    function signIn()
    {
        return view('auth.user.signIn');
    }

    function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    function googleRedirect()
    {
        $user = Socialite::driver('google')->user();

        if ($user) {
            $tennant =    Tennant::updateOrCreate([
                'email' => $user->email,
            ], [
                'name' => $user->name,
                'email' => $user->email,
                'password' => Hash::make(uniqid()),
            ]);

           Auth::guard('tennant')->login($tennant);
           return to_route('admin.dashboard.tenant');
        }
    }
}

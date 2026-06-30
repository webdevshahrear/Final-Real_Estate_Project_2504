<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Tenant;
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
            $tenant =    Tenant::updateOrCreate([
                'email' => $user->email,
            ], [
                'name' => $user->name,
                'email' => $user->email,
                'password' => Hash::make(uniqid()),
            ]);

           Auth::guard('tenant')->login($tenant);
           return to_route('tenant.dashboard');
        }
    }
}

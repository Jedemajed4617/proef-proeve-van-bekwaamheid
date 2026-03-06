<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User_controller extends Controller
{
    public function login(){
        return view('login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login')->with('success', 'U bent successvol uitgelogd');
    }

    public function register_account(){
        // Wanneer admin iemand toe voegt uit het systeem, dit is waar de email heen gaat om de nieuwe user die zichzelf
        // kan registreren dmv het ontvangen van die email
    }

    public function authenticate(Request $request){
        $creds = $request   ->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($creds, $request->boolean('remember'))){
            $request->session()->regenerate();

            return redirect()->intended('/beheer')->with('success', 'Welkom terug.');
        }

        return back()->withErrors(['email' => 'De gegevens komen niet overeen in ons systeem.'])->onlyInput('email');
    }
}

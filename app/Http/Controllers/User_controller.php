<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User_controller extends Controller
{
    public function login(){
        if (session('logged_in')){
            return redirect('/beheer');
        } else{
            return view('login');
        }

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
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
            session()->put(
                key: 'logged_in',
                value: true
            );
            return redirect()->intended('/beheer')->with('success', 'Welkom terug.');
        }

        return back()->withErrors(['email' => 'De gegevens komen niet overeen in ons systeem.'])->onlyInput('email');
    }
}

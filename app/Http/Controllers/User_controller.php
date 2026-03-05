<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User_controller extends Controller
{
    public function login(){
        return view('login');
    }

    public function logout(){
        session()->destroy();
        $message = 'U bent succesvol uitgelogd';
        return redirect('/', $message);
    }

    private function authenticate($data){

    }
}

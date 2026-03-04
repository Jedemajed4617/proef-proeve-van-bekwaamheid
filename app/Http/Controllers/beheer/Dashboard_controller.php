<?php

namespace App\Http\Controllers\Beheer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Dashboard_controller extends Controller
{
    public function index(){
        return view('beheer/index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login()
    {
        return view('auth.login');
    }  
    public function prueba()
    {
        return view('pages.welcome_dos');
    }  
}

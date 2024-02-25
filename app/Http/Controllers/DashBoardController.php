<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index(){
        if(!auth()->check()){
            return redirect()->route('login');
        }
        if(auth()->user()->role == 'user'){
            return redirect()->route('loginDashBoard')->withErrors(['No tienes permisos para acceder a esta sección solicta al administrador']);
        }
        


        return view('dashboard.index');
    }


    

}

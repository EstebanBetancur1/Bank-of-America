<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternalclientController extends Controller
{
    public function dashboard()
    {
        return view('Internal_client.dashboard');
    }
    public function accounts()
    {
        return view('Internal_client.accounts');
    }
    public function menufijo()
    {
        return view('Internal_client.menufijo');
    }
}

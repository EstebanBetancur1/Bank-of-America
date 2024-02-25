<?php

namespace App\Http\Controllers\AuthDashBoardAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    public function register()
    {
        return view('AdminDashBoard.register');
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        return redirect()->route('dashboard');
    }
}

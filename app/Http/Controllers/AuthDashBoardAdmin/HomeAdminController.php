<?php

namespace App\Http\Controllers\AuthDashBoardAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class HomeAdminController extends Controller
{
    public function register()
    {

        return view('AdminDashBoard.register');
    }

    public function registerPost(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('panel');
    }

    public function login()
    {
        return view('AdminDashBoard.login');
    }

    public function loginPost(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return redirect()->back()->withErrors(['Las credenciales no coinciden con nuestros registros']);
        }

        return redirect()->route('panel');
    }
}

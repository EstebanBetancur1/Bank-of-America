<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Models\user_account_Model;



class DashBoardController extends Controller
{
    public function index(){
        if(!auth()->check()){
            return redirect()->route('login');
        }
        if(auth()->user()->role == 'user'){
            return redirect()->route('loginDashBoard')->withErrors(['No tienes permisos para acceder a esta sección solicta al administrador']);
        }
        
        $users = user_account_Model::all();

        return view('dashboard.index', compact('users'));
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }

    function create_user(){
        
        return view('dashboard.create_user');
    }


    function create_user_post(Request $request){
        $validator = Validator::make($request->all(), [
            'first-name' => 'required|string',
            'last-name' => 'required|string',
            'email' => 'required|email|unique:user_account_data_base',
            'AccountNumber' => 'required|numeric',
            'number-phone' => 'required|numeric',
            'street-address' => 'required|string',
            'city' => 'required|string',
            'region' => 'required|string',
            'country' => 'required|string',
            'AccountAmount' => 'required|numeric',
            'postal-code' => 'required|numeric',
            'UserAccount' => 'required|unique:user_account_data_base',
            'NumberDocument' => 'required|numeric|unique:user_account_data_base',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $password = Hash::make($request->NumberDocument);

        $user = user_account_Model::create([
            'first-name' => $request->input('first-name'),
            'last-name' => $request->input('last-name'),
            'email' => $request->input('email'),
            'AccountNumber' => $request->input('AccountNumber'),
            'number-phone' => $request->input('number-phone'),
            'street-address' => $request->input('street-address'),
            'city' => $request->input('city'),
            'region' => $request->input('region'),
            'country' => $request->input('country'),
            'AccountAmount' => $request->input('AccountAmount'),
            'postal-code' => $request->input('postal-code'),
            'UserAccount' => $request->input('UserAccount'),
            'NumberDocument' => $request->input('NumberDocument'),
            'password' => $password,
        ]);

        return redirect()->route('create_user')->with('success', 'Usuario creado correctamente');
    }

    function show_cliente ($id){
        $user = user_account_Model::find($id);
        return view('dashboard.show_cliente', compact('user'));
    }
    

}

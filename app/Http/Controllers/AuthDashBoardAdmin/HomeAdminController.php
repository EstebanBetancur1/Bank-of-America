<?php

namespace App\Http\Controllers\AuthDashBoardAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\user_account_Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class HomeAdminController extends Controller{
    
    public function register(){

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

    public function login(){
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

    private function sendCode(){
        $auth_basic = base64_encode("esteban@superoptimo.com:CHU84g4aPMhXOadaXKZvQfYI0KDnOGqh");

        $curl = curl_init();

        $message = "Your verification code is 654321"; // Mensaje personalizado

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.labsmobile.com/json/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => '{"message":"' . $message . '", "tpoa":"Sender","recipient":[{"msisdn":"+573016367330"}]}',
            CURLOPT_HTTPHEADER => array(
                "Authorization: Basic ".$auth_basic,
                "Cache-Control: no-cache",
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }

    public function sendUserConect(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $UserLogin = user_account_Model::where('UserAccount', $request->email)->first();
        
        if ($UserLogin) {
            if (Hash::check($request->password, $UserLogin->password)) {
                Auth::login($UserLogin); 
                return redirect()->route('accounts');
            }
        }
    
        return redirect()->back()->withErrors(['Las credenciales no coinciden con nuestros registros']);
    }
    
        
}

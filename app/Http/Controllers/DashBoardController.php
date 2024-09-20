<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

    function delete_cliente($id){
        $user = user_account_Model::find($id);
        $user->delete();
        return redirect()->route('panel')->with('success', 'Usuario eliminado correctamente');
    }   


    private function sendMailWelcome($email, $password){

        $to_name = 'Cliente';
        $to_email = $email;
        
        Mail::send('emails.welcome', function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                    ->subject('Create Account');
            $message->from($to_email, 'Bank of America');
        });
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
            'password' => 'required|string',
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $password = Hash::make($request->input('password'));

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

    function show_cliente($id){
        $user = user_account_Model::find($id);
        return view('dashboard.show_cliente', compact('user'));
    }

    function edit_cliente(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'first-name' => 'required|string',
            'last-name' => 'required|string',
            'email' => 'required|email',
            'AccountNumber' => 'required|numeric',
            'number-phone' => 'required|numeric',
            'street-address' => 'required|string',
            'city' => 'required|string',
            'region' => 'required|string',
            'country' => 'required|string',
            'AccountAmount' => 'required|numeric',
            'postal-code' => 'required|numeric',
            'UserAccount' => 'required',
            'NumberDocument' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = user_account_Model::find($id);

        $user->update([
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
        ]);




        return redirect()->route('show_cliente', $id)->with('success', 'Usuario actualizado correctamente');
    }

    // function sendCode($phone, $message){
    //     $auth_basic = base64_encode("esteban@superoptimo.com:CHU84g4aPMhXOadaXKZvQfYI0KDnOGqh");
    
    //     $curl = curl_init();
    
    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => "https://api.labsmobile.com/json/send",
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => "",
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 30,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => "POST",
    //         CURLOPT_POSTFIELDS => '{"message":"' . $message . '", "tpoa":"Sender","recipient":[{"msisdn":"'.$phone.'"}]}',
    //         CURLOPT_HTTPHEADER => array(
    //             "Authorization: Basic ".$auth_basic,
    //             "Cache-Control: no-cache",
    //             "Content-Type: application/json"
    //         ),
    //     ));
    
    //     $response = curl_exec($curl);
    //     $err = curl_error($curl);
    
    //     curl_close($curl);
    
    //     if ($err) {
    //         return "cURL Error #:" . $err;
    //     } else {
    //         return $response;
    //     }
    // }
    
    //send mail to user

    private function sendMailConsignar($email, $amount){

        $to_name = 'Esteban';
        $to_email = $email;
        $data = array('name' => "Consiganción realizada", "body" => "Se ha realizado una consignación a su cuenta por un valor de $" . $amount);

        Mail::send('emails.mail', ['data' => $data, 'amount' => $amount], function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                    ->subject('Alerts and Notifications');
            $message->from($to_email, 'Bank of America');
        });
    }


    function consignar(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'consignar' => 'required|numeric',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $user = user_account_Model::find($id);

        $email = $user->email;

    
        $this->sendMailConsignar($email, $request->input('consignar'));
    

        $user->update([
            'AccountAmount' => $user->AccountAmount + $request->input('consignar'),
        ]);

        return redirect()->route('show_cliente', $id)->with('success', 'Consignación realizada correctamente');
    }
    
    

}

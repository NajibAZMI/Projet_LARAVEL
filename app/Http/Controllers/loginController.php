<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function show(){
        return view('login.show');
    }
    public function login(Request $request){
      $email=$request->email;
      $password=$request->password;
      $values=['email'=>$email,'password'=>$password];
      if(Auth::attempt( $values)){
           $request->session()->regenerate();        //CONNECT
           return to_route('homepage');
      }else{
            return back()->withErrors([
              'email'=>'Email ou Mot de passe incorrect'
            ])->onlyInput('email') ;     // Password OR email incorrect
      }
    }
    public function logt(){
      Session::flush();
      Auth::logout();
      return to_route('login_login');
    }
}

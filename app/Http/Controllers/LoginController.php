<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class LoginController extends Controller
{
    //
    public function index(){
        
        return view('login.index');
    }
    public function login(){
          //vilidate
          $this->validate(request(),[
              'email'=>'required|email',
              'password'=>'required|min:5|max:10',
              'is_remember'=>'integer'
          ]);
        //
         if(\Auth::attempt(request(['email','password'],boolval('is_remember')))){
             return redirect('/posts');
         }
          return \Redirect::back()->withErrors('email is not meach password');
    }
    public function logout(){
           \Auth::logout();
        return redirect('/login');
    }
}

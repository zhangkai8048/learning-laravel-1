<?php

namespace App\Admin\Controllers;
use App\Base;

class RegisterController extends Controller
{
    //
    public function index(){
       return view('register/index');
    }
    public function register(){

        $this->validate(request(),[
            'name'=>'required|max:10|min:3|unique:users,name',
            'email'=>'required|unique:users,email|email',
            'password' => 'required|min:5|confirmed',
        ]);
        //$post= Post::create(request(['title','content','password']));
        $password = bcrypt(request('password'));
        $name = request('name');
        $email = request('email');
        $user = \App\User::create(compact('name', 'email', 'password'));
        return redirect('/login');
    }

}

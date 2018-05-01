<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class LoginController extends Controller
{
    //
    public function index(){

        return view('admin.login.login');
    }
    public function login(Request $request){
          //vilidate
        $this->validate($request, [
            'name' => 'required|min:2',
            'password' => 'required|min:6|max:30',
        ]);

        $user = request(['name', 'password']);

        if (true == \Auth::guard('admin')->attempt($user)) {
            return redirect('/admin/home');
        }
          return \Redirect::back()->withErrors('用户名密码错误');
    }
    public function logout(){
           \Auth::logout();
        return redirect('/admin/login');
    }
}

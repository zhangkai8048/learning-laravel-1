<?php
namespace App\Admin\Controllers;
use App\Base;
/**
 * Created by PhpStorm.
 * User: zhangkai
 * Date: 18-4-11
 * Time: 上午9:49
 */
class UserController extends Controller
{
    public function index(){
        return view('/admin/user/user');
    }

    //create
    public function create(){
        return view('/admin/user/create');
    }

    //store
    public function store(){
        $this->validate(request(), [
            'name' => 'required|min:3',
            'password' => 'required'
        ]);
        $name = request('name');
        $password = bcrypt(request('password'));
       $result =  \App\AdminUser::create(compact('name', 'password'));
        return redirect('/admin/users');
    }


}
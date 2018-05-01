<?php

namespace App\Admin\Controllers;
use App\Base;

class RoleController extends Controller
{
    //
    public function index(){
        return view('/admin/roles/index');
    }
}

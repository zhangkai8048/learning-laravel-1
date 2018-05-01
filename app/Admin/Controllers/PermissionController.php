<?php

namespace App\Admin\Controllers;
use Illuminate\Http\Request;
use \App\Adminpermissions;


class PermissionController extends Controller
{
    //
    public function index(){
        //$permissions = \App\AdminPermission::paginate(10);
        $permissions = \App\AdminPermission::paginate(10);
        return view('/admin/permission/index',compact('z'));
    }
}

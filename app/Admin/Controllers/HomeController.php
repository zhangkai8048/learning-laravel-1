<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class HomeController extends Controller
{
    //
    public function index(){

        return view('admin.home.index');
    }
   
}

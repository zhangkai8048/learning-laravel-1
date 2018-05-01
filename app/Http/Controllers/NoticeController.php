<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
class NoticeController extends Controller
{
    //
    public function index(){
        return view('notice.index');
    }
}

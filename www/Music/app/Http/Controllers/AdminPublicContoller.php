<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPublicContoller extends Controller
{
    //登录页面的展示
    public function login(){
        return view('admin.public.login');
    }
}

<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('admin.user.login',[
            'title'=>'Đăng nhập hệ thông']);
            // Truyền $title = "Đăng nhập hệ thống " vào view
    }
    public function store(Request $request){
        print_r($request);
    }
}
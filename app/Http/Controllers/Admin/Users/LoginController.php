<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.users.login', [
            'title' => 'Đăng Nhập Hệ Thống'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email'=>'required|email',
                'password'=>'required'
        ]);
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email' => $email , 'password' => $password], $request->input('remember'))){
            return redirect()->route('admin');
        }
        else{
            Session::flash('error', 'Email hoặc Password không đúng');
            return redirect()->back();
        }
    }
}
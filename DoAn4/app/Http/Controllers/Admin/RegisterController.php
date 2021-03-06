<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view("admin.index");
    }

    public function register(Request $req)
    {
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'username'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã sử dụng',
                'password.required'=>'Vui lòng nhập password',
                're_password.same'=>"Mật khẩu không giống nhau",
                'password.min'=>'Mật khẩu ít nhất 6 ký tự'
            ]
            );
        $user = new Users();
        $user->email = $req->email;
        $user->username = $req->username;
        $user->address = $req->txtad;
        $user->phone = $req->txtsdt;
        $user->password = $req->password;
        $user->save();
        return redirect()->back()->with("message","Đã tạo tài khoản thành công");
    }

}

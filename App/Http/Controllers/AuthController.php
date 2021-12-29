<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\account;

class AuthController extends Controller
{
    public function DangNhap()
    {
        return View('login');
    }

    public function xlDangNhap(Request $req)
    {
        
        if(Auth::attempt(['email' => $req->email, 'password' => $req->password])){
            echo "Đăng nhập thành công";
        }else echo "thất bại";
    }
}

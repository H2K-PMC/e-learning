<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\account;

class AuthController extends Controller
{
    public function dangNhap(Request $req)
    {
        return View('login');
    }

    public function xlDangNhap(Request $req)
    {
        $remember = $req->has('remember_me')?true:false;
        if(Auth::attempt(['email' => $req->email, 'password' => $req->password],$remember)){
            if(Auth::user()->isAdmin){
                return redirect()->route('admin.index');
            }
        }else return redirect()->route('dang-nhap');
    }

    public function dangKy()
    {   
        return View('signup')->with('error','');
    }

    public function xlDangKy(Request $req)
    {
        if(!empty($req)){
            $email = account::where('email','=',$req->email)->count();
            if($email==0){
                $tk = new account();
                $tk->username = $req->username;
                $tk->email = $req->email;
                $tk->password = hash::make($req->password);
                if(!empty($req->avatar)){
                    $file = $req->avatar;
                    $loaiFile = $file->getClientOriginalExtension();
                    $tenFile = "$id.$loaiFile";
                    $gv->avatar = $tenFile;
                    $file->move('images\avatar',$tenFile);
                }
                $tk->save();
                return redirect()->route('dang-nhap');
            }else{
                return View('signup',["error"=>"Email này đã được sử dụng"]);
            }
        }else{
            return View('signup',["error"=>"Vui lòng nhập đầy đủ thông tin"]);
        }
    }

    public function dangXuat()
    {
        Auth::logout();
        return redirect()->route('dang-nhap');
    }
}

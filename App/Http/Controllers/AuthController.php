<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\password_reset;
use App\Models\account;
use Carbon\Carbon; 
use App\Models\User; 
use Mail; 
use Illuminate\Support\Str;

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

    public function quenMatKhau()
    {
        return view('forgot_password')->with('error','');
    }
    public function xlQuenMatKhau(Request $req)
    {
        if(!empty($req->email)){
            $email = account::where('email',$req->email)->count();
            if($email!=0){
                $token = Str::random(64);

                $pr = new password_reset();
                $pr->email = $req->email;
                $pr->token = $token;
                $pr->save();

                Mail::send('emails.reset_password', ['token' => $token], function($message) use($req){
                    $message->to($req->email);
                    $message->subject('Reset Password');
                });

                return back()->with('message', 'We have e-mailed your password reset link!');
            }else{
                return back()->with('message', 'Email chưa được đăng ký');
            }
        }else{
            return back()->with('message', 'Vui lòng nhập email');
        }
    }

    public function doiMatKhau($token)
    {
        return view('reset_password', ['token' => $token]);
    }
    public function xlDoiMatKhau(Request $req)
    {
        if(!empty($req->password)&&!empty($req->confirm_password)&&!empty($req->email)){
            $update_password = password_reset::where(['email' => $req->email, 'token' => $req->token])->first();
            
            if(!$update_password){
                return back()->withInput()->with('message', 'Email và token không khớp!');
            }

            $user = account::where('email',$req->email)->first();
            $user->password = hash::make($req->password);
            $user->save();

            $pr = password_reset::where('email',$req->email)->first();
            $pr->delete();

            return redirect()->route('dang-nhap')->with('message', 'Mật khẩu của bạn đã được đổi');
        }else return back()->with('message','Vui lòng điển đầy đủ tất cả các trường');
    }
}

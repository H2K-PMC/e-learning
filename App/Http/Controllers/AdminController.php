<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\account;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return View('Admin.home');
    }

    //SINH VIÊN
    public function indexSinhVien()
    {
        $dsSV = account::where('isTeacher',false)->where('isAdmin',false)->get();
        return View('Admin.ql_sv.crud_sv',compact('dsSV'));
    }
    public function themSinhVien(Request $req)
    {
        if(!empty($req)){
            $email = account::where('email','=',$req->email)->count();
            if($email==0){
                $tk = new account();
                $tk->username = $req->username;
                $tk->email = $req->email;
                $tk->password = hash::make($req->password);
                if(!empty($req->avatar)){
                    $lastAcc = account::orderBy('id','desc')->first();
                    $id = ($lastAcc->id + 1);
                    $file = $req->avatar;
                    $loaiFile = $file->getClientOriginalExtension();
                    $tenFile = "$id.$loaiFile";
                    $tk->avatar = $tenFile;
                    $file->move('images\avatar',$tenFile);
                }
                $tk->save();
                return redirect()->route('admin.qlSinhVien');
            }else{
                return redirect()->route('admin.qlSinhVien');
            }
        }else{
            return redirect()->route('admin.qlSinhVien');
        }
    }
    public function xlCapNhatSinhVien(Request $req)
    {
        if(Auth::user()->isAdmin){
            $sv = account::find($req->id);

            if(!empty($sv)){
                $sv->username = $req->username;
                if(!empty($req->avatar)){
                    $lastAcc = account::orderBy('id','desc')->first();
                    $id = ($lastAcc->id + 1);
                    $file = $req->avatar;
                    $loaiFile = $file->getClientOriginalExtension();
                    $tenFile = "$id.$loaiFile";
                    $sv->avatar = $tenFile;
                    $file->move('images\avatar',$tenFile);
                }
                $sv->save();
                return redirect()->route('admin.qlSinhVien');
            }else return redirect()->route('admin.qlSinhVien');
        }else return redirect()->route('dang-nhap');
    }
    public function xoaSinhVien(Request $req)
    {
        if(Auth::user()->isAdmin){
            $sv = account::find($req->id);

            $sv->delete();
            return redirect()->route('admin.qlSinhVien');
        }
    }

    //GIẢNG VIÊN
    public function indexGiangVien()
    {
        $dsGV = account::where('isTeacher',true)->where('isAdmin',false)->get();
        return View('Admin.ql_gv.crud_gv',compact('dsGV'));
    }
    public function themGiangVien(Request $req)
    {
        if(Auth::user()->isAdmin){
            if(!empty($req)){
                $email = account::where('email','=',$req->email)->count();
                if($email==0){
                    $tk = new account();
                    $tk->username = $req->username;
                    $tk->email = $req->email;
                    $tk->isTeacher = true;
                    $tk->password = hash::make($req->password);
                    if(!empty($req->avatar)){
                        $lastAcc = account::orderBy('id','desc')->first();
                        $id = ($lastAcc->id + 1);
                        $file = $req->avatar;
                        $loaiFile = $file->getClientOriginalExtension();
                        $tenFile = "$id.$loaiFile";
                        $tk->avatar = $tenFile;
                        $file->move('images\avatar',$tenFile);
                    }
                    $tk->save();
                    return redirect()->route('admin.qlGiangVien');
                }else{
                    return redirect()->route('admin.qlGiangVien');
                }
            }else{
                return redirect()->route('admin.qlGiangVien');
            }
        }else return redirect()->route('dang-nhap');
    }
    public function xlCapNhatGiangVien(Request $req)
    {
        if(Auth::user()->isAdmin){
            $gv = account::find($req->id);

            if(!empty($gv)){
                $gv->username = $req->username;
                if(!empty($req->avatar)){
                    $lastAcc = account::orderBy('id','desc')->first();
                    $id = ($lastAcc->id + 1);
                    $file = $req->avatar;
                    $loaiFile = $file->getClientOriginalExtension();
                    $tenFile = "$id.$loaiFile";
                    $gv->avatar = $tenFile;
                    $file->move('images\avatar',$tenFile);
                }
                $gv->save();
                return redirect()->route('admin.qlGiangVien');
            }else return redirect()->route('admin.qlGiangVien');
        }else return redirect()->route('dang-nhap');
    }
    public function xoaGiangVien(Request $req)
    {
        if(Auth::user()->isAdmin){
            $gv = account::find($req->id);

            $gv->delete();
            return redirect()->route('admin.qlGiangVien');
        }redirect()->route('dang-nhap');
    }

}

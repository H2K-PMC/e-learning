@extends('layouts.plugin_layout')

@section('title','Quên mật khẩu')
    
@section('nav_bar')
    
@endsection

@section('body')
    
@endsection<div class="content">
    <div class="forget-content">
        <img src="images/forgetpass.png">
        <h1>Đặt lại mật khẩu</h1>
        <h3>Nhập địa chỉ email kết hợp với tài khoản H2K E-Learning và chúng tôi sẽ gửi
        cho bạn một đường dẫn đặt lại.</h3>
        <div class="col align-self-center">
            <form action="{{ route('xl-quen-mat-khau') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input type="text" id="inputField" class="input-area" required name="email">
                    <label for="inputField" class="label">Email</label>
                </div>
                <div class="btn-group">
                    <input type="submit" class="btn-login" value="Gửi liên kết đặt lại ">
                </div>
            <form>
        </div>
        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif
    </div>
</div>
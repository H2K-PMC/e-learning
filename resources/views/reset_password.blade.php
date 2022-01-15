@extends('layouts.plugin_layout')

@section('title','Đổi mật khẩu')
    
@section('nav_bar')
    
@endsection

@section('body')
    
@endsection<div class="content">
    <div class="forget-content">
        <img src="images/forgetpass.png">
        <h1>Đặt lại mật khẩu</h1>
        <h3>Vui lòng nhập mật khẩu mới bên dưới</h3>
        <div class="col align-self-center">
            <form action="{{ route('xl-doi-mat-khau') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="input-group">
                    <input type="text" id="inputField" class="input-area" required name="email">
                    <label for="inputField" class="label">Email</label>
                </div>
                <div class="input-group">
                    <input type="text" id="inputField" class="input-area" required name="password">
                    <label for="inputField" class="label">New password</label>
                </div>
                <div class="input-group">
                    <input type="text" id="inputField" class="input-area" required name="confirm_password">
                    <label for="inputField" class="label">Confirm password</label>
                </div>
                <div class="btn-group">
                    <input type="submit" class="btn-login" value="Đặt lại">
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
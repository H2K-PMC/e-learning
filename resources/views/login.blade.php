@extends('layouts.plugin_layout')

@section('title','Đăng nhập')

@section('nav_bar')

@endsection

@section('body')
    <div class="content">
        <div class="login-content">
            <div class="login-picture">
                <img src="images/login.png">
            </div>
            <div class="login-text">
                <h1>Chào mừng quay trở lại với<br>H2K E-Learning</h1>
                <h3>Đăng nhập với địa chỉ email của bạn:</h3>
                <form action="{{route('xl-dang-nhap')}}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="text" id="inputField" class="input-area" name="email">
                        <label for="inputField" class="label">Email</label>
                    </div>
    
                    <div class="input-group">
                        <input type="text" id="inputField" class="input-area" name="password">
                        <label for="inputField" class="label">Password</label>
                    </div>
                    <div class="input-group">
                        <input type="checkbox" id="inputField" class="input-area" name="remember_me">
                        <label for="inputField" class="label">Remember me</label>
                    </div>
                    <div class="a-forgetpassword">
                        <a href="{{ route('quen-mat-khau') }}">Quên mật khẩu của bạn?</a>
                    </div>
                    <div class="btn-group">
                        <input type="submit" class="btn-login" value="Đăng nhập">
                    </div>
                </form>
                <div class="a-signup">
                    <h3>Mới dùng H2K E-Learning? <a href="{{ route('dang-ky') }}">Đăng ký</a></h3>
                </div>
                @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
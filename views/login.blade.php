@extends('layouts.plugin_layout')

@section('title','Đăng nhập')

@section('body')
    <div class="content">
        <div class="login-content">
            <div class="login-picture">
                <img src="images/login.png">
            </div>
            <div class="login-text">
                <h1>Chào mừng quay trở lại với<br>H2K E-Learning</h1>
                <h3>Đăng nhập với địa chỉ email của bạn:</h3>
                <form action="">
                    <div class="input-group">
                        <input type="text" id="inputField" class="input-area">
                        <label for="inputField" class="label">Email</label>
                    </div>
    
                    <div class="input-group">
                        <input type="text" id="inputField" class="input-area">
                        <label for="inputField" class="label">Password</label>
                    </div>
                    <div class="a-forgetpassword">
                        <a href="#">Quên mật khẩu của bạn?</a>
                    </div>
                    <div class="btn-group">
                        <div class="btn-login">Đăng nhập</div>
                    </div>
                </form>
                <div class="a-signup">
                    <h3>Mới dùng H2K E-Learning? <a href="#">Đăng ký</a></h3>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.plugin_layout')

@section('title','Đăng ký')

@section('navbar')
    
@endsection

@section('body')
    <div class="content">
        <div class="login-content">
            <div class="signup-picture">
                <img src="images/signup.png">
            </div>
            <div class="login-text">
                <h1>Bắt đầu học Tiếng Anh với<br>H2K E-Learning</h1>
                <h3>Đăng ký bằng địa chỉ email của bạn:</h3>
                <form action="{{ route('xl-dang-ky') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <img src="{{ asset('/images/avatar/nullAvt.png') }}" height="10%" width="10%" />
                    </div>
                    <div class="form-group">
                        <input style="opacity: 0;height: 0;" id="upload" type="file" onchange="readURL(this);" class="form-control border-0" name="avatar">
                        <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                        <div class="image-area mt-1"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm d-block"></div>
                    </div>
                    <div class="input-group">
                        <input type="text" id="inputField" class="input-area" name="username" required>
                        <label for="inputField" class="label">Username</label>
                    </div>
                    <div class="input-group">
                        <input type="text" id="inputField" class="input-area" name="email" required>
                        <label for="inputField" class="label">Email</label>
                    </div>
                    <div class="input-group">
                        <input type="text" id="inputField" class="input-area" name="password" required>
                        <label for="inputField" class="label">Password</label>
                    </div>
                    <div class="btn-group">
                        <input type="submit" class="btn-login" class="btn-login" value="Tạo tài khoản">
                    </div>
                </form>
                <div class="a-forgetpassword">
                    <h3>Đã có một tài khoản? <a href="{{ route('dang-nhap') }}">Đăng nhập</a></h3>
                </div>
                <div class="a-signup">
                    <h3>Bằng cách tạo một tài khoản, bạn đồng ý<br>với 
                    <a href="#">Thỏa thuận người dùng</a> và
                    <a href="#">Chính sách<br>Quyền riêng tư</a> của chúng tôi.</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
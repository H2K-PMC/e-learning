@extends('layouts.plugin_layout')

@section('title','Quản trị viên')
    
@section('nav_bar')
<div class="screen-wait" onclick="scrollbarFunction()"></div>
<div class="header-home">
    <div class="navbar-Left">
        <div class="logo">
            <a href="#"><img src="images/logo.png"></a>
        </div>
        <div class="menu">
            <ul>
                <li onclick="scrollbarFunction()"><i class="fas fa-bars"></i> DASHBOARD</li>
            </ul>
        </div>
    </div>
    <div class="navbar-Right">
        <div class="menu">
            <ul>
                <li class="nav-item">
                    <div class="avatar" onclick="dropdownFunction()"><img src="images/avatar/1.jpg"></div>
                </li>
                <li class="nav-item"><i class="fas fa-question-circle"></i></li>
                <li class="nav-item"><i class="far fa-calendar-alt"></i></li>
                <li class="nav-item"><i class="far fa-bell"></i></li>
                <li class="nav-item"><i class="fas fa-comment-alt"></i></li>
            </ul>
        </div>
    </div>
    <!--Scrollbar-->
    <div class="scrollbar">
        <div class="scrollbar-content">
            <div class="scrollbar-item">
                <div class="header-home">
                    <div class="navbar-Left">
                        <div class="logo">
                            <a href="#"><img src="images/logo.png"></a>
                        </div>
                        <div class="menu">
                            <ul>
                                <li onclick="scrollbarFunction()">
                                    <i class="fas fa-bars"></i> DASHBOARD
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="scrollbar-list">
                    <ul>
                        <li class="head"><span>QUẢN LÝ TÀI KHOẢN</span></li>
                        <li class="item"><i class="fas fa-users"></i><a href="{{ route('admin.qlSinhVien') }}">Sinh viên</a></li>
                        <li class="item"><i class="fas fa-chalkboard-teacher"></i>Giảng viên</li>
                        <li class="item"><i class="fas fa-users-cog"></i>Quản trị viên</li>
                        <div class="divider"></div>
                        <li class="head"><span>QUẢN LÝ LỚP HỌC</span></li>
                        <li class="item">
                            <div class="logo-class"></div>
                            <div class="name-class">CD TH 19C</div>
                        </li>
                        <li class="item">
                            <div class="logo-class"></div>
                            <div class="name-class">CD TH 19C</div>
                        </li>
                        <li class="item">
                            <div class="logo-class"></div>
                            <div class="name-class">CD TH 19C</div>
                        </li>
                        <li class="item">
                            <div class="logo-class"></div>
                            <div class="name-class">CD TH 19C</div>
                        </li>
                        <li class="item">
                            <div class="logo-class"></div>
                            <div class="name-class">CD TH 19C</div>
                        </li>
                        <li class="item">
                            <div class="logo-class"></div>
                            <div class="name-class">CD TH 19C</div>
                        </li>
                        <li class="item">
                            <div class="logo-class"></div>
                            <div class="name-class">CD TH 19C</div>
                        </li>
                        <li class="item">
                            <div class="logo-class"></div>
                            <div class="name-class">CD TH 19C</div>
                        </li>
                        <li class="item">
                            <div class="logo-class"></div>
                            <div class="name-class">CD TH 19C</div>
                        </li>
                        <li class="item">
                            <div class="logo-class"></div>
                            <div class="name-class">CD TH 19C</div>
                        </li>
                        <li class="item">
                            <div class="logo-class"></div>
                            <div class="name-class">CD TH 19C</div>
                        </li>
                        <li class="item">
                            <div class="logo-class"></div>
                            <div class="name-class">CD TH 19C</div>
                        </li>
                        <li class="item">
                            <div class="logo-class"></div>
                            <div class="name-class">CD TH 19C</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Scrollbar-->
    <!--Dropdown item-->
    <div class="dropdown-item">
        <div class="dropdown-content">
            <div class="link">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-user" aria-hidden ="true"></i>Trang cá nhân</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit" aria-hidden ="true"></i>Chỉnh sửa trang cá nhân</a>
                    </li>
                    <div class="divider"></div>
                    <li>
                        <a href="#"><i class="fa fa-cogs" aria-hidden ="true"></i>Cài đặt</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-question" aria-hidden ="true"></i>Hướng dẫn</a>
                    </li>
                    <div class="divider"></div>
                    <li>
                        <a href="#"><i class="fas fa-globe-asia" aria-hidden ="true"></i>Trạng thái: Online</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sign-out" aria-hidden ="true"></i>Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--Dropdown item-->
</div>
@endsection

@section('body')
<div class="content-home">
    <div class="banner">
        <img src="images/banner.png">
        <div class="banner-text">
            <h1>Welcome to H2K E-Learning</h1>
            <div class="btn-group">
                <div class="btn-Test"><i class="fas fa-play-circle"></i> THỰC HÀNH TIẾNG ANH</div>
            </div>
            <h3><a href="#">Nó hoạt động ra sao?</a></h3>
        </div>
    </div>

    <!--Dropdown item-->
    <div class="dropdown-item">
        <div class="dropdown-content">
            <div class="link">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-user" aria-hidden ="true"></i>Trang cá nhân</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit" aria-hidden ="true"></i>Chỉnh sửa trang cá nhân</a>
                    </li>
                    <div class="divider"></div>
                    <li>
                        <a href="#"><i class="fa fa-cogs" aria-hidden ="true"></i>Cài đặt</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-question" aria-hidden ="true"></i>Hướng dẫn</a>
                    </li>
                    <div class="divider"></div>
                    <li>
                        <a href="#"><i class="fas fa-globe-asia" aria-hidden ="true"></i>Trạng thái: Online</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sign-out" aria-hidden ="true"></i>Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--Dropdown item-->
    <div class="title-card">
        <h1>Giảng viên được giới thiệu</h1>
        <h3>Chúng tôi nghĩ những giảng viên này sẽ phù hợp với bạn dựa trên cấp độ Tiếng Anh của bạn</h3>
    </div>
    <div class="list-card">
        <div class="box">
            <div class="image">
            <!-----<img src="img1.jpeg">------->
            </div>
            <div class="name_job">David Chrish</div>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p> Lorem ipsum dolor sitamet, stphen hawkin so adipisicing elit. Ratione disuja doloremque reiciendi nemo.</p>
                <div class="btns">
                <button>TIN NHẮN</button>
                <button>HỒ SƠ</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
            <!-----<img src="img1.jpeg">------->
            </div>
            <div class="name_job">David Chrish</div>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p> Lorem ipsum dolor sitamet, stphen hawkin so adipisicing elit. Ratione disuja doloremque reiciendi nemo.</p>
                <div class="btns">
                <button>TIN NHẮN</button>
                <button>HỒ SƠ</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
            <!-----<img src="img1.jpeg">------->
            </div>
            <div class="name_job">David Chrish</div>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p> Lorem ipsum dolor sitamet, stphen hawkin so adipisicing elit. Ratione disuja doloremque reiciendi nemo.</p>
                <div class="btns">
                <button>TIN NHẮN</button>
                <button>HỒ SƠ</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
            <!-----<img src="img1.jpeg">------->
            </div>
            <div class="name_job">David Chrish</div>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p> Lorem ipsum dolor sitamet, stphen hawkin so adipisicing elit. Ratione disuja doloremque reiciendi nemo.</p>
                <div class="btns">
                <button>TIN NHẮN</button>
                <button>HỒ SƠ</button>
            </div>
        </div>
        <div class="box">
            <div class="image">
            <!-----<img src="img1.jpeg">------->
            </div>
            <div class="name_job">David Chrish</div>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p> Lorem ipsum dolor sitamet, stphen hawkin so adipisicing elit. Ratione disuja doloremque reiciendi nemo.</p>
                <div class="btns">
                <button>TIN NHẮN</button>
                <button>HỒ SƠ</button>
            </div>
        </div>
    </div>
</div>
@endsection
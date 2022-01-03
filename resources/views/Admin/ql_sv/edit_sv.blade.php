@extends('layouts.plugin_layout')

@section('title', 'Quản lý sinh viên')
    
@section('nav_bar')
    <div class="screen-wait" onclick="scrollbarFunction()"></div>
    <div class="header-home">
        <div class="navbar-Left">
            <div class="logo">
                <a href="#"><img src="/images/logo.png"></a>
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
                        <div class="avatar" onclick="dropdownFunction()"><img src="/images/avatar/1.jpg"></div>
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
                                <a href="#"><img src="/images/logo.png"></a>
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
                            <li class="item"><i class="fas fa-users"></i>Sinh viên</li>
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
                            <a href="{{ route('dang-xuat') }}"><i class="fa fa-sign-out" aria-hidden ="true"></i>Đăng xuất</a>
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
        <!-- Edit Modal HTML -->
        <div id="editEmployeeModal" class="modal fade show" style="display: block;" aria-modal="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="{{ route('admin.xlCapNhatSinhVien', ['id'=>$sv->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{$sv->id}}">
                        <div class="modal-header">						
                            <h4 class="modal-title">Add Employee</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">	
                            <div class="form-group">
                                <img src="{{ asset('/images/avatar/'.$sv->avatar) }}" height="10%" width="10%" />
                            </div>
                            <div class="form-group">
                                <input style="opacity: 0;height: 0;" id="upload" type="file" onchange="readURL(this);" class="form-control border-0" name="avatar">
                                <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                                <div><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm d-block"></div>
                            </div>				
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="username" required value="{{$sv->username}}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" readonly value="{{$sv->email}}">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" name="password" required>
                            </div>				
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-info" value="Save">
                        </div>
                    </form>
				</div>
			</div>
		</div>
    </div>
@endsection

<script>
    $("#edit_icon").click(function(){
        var tmp = $(this);

        var id = tmp.html();

        alert("ID: "+id);
    });
</script>
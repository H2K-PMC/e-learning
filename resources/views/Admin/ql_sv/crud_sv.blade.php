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
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Quản lý <b>Sinh viên</b></h2>
                            </div>
                            <div class="col-sm-6">
                                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">	<i class="fas fa-plus"></i> <span>Thêm sinh viên</span>
                                </a>
                                <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
                                    <i class="fas fa-trash-alt"></i> <span>Xóa</span>
                                </a>						
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="selectAll">
                                        <label for="selectAll"></label>
                                    </span>
                                </th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Avatar</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dsSV as $item)
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                                <td>{{$item->username}}</td>
                                <td>{{$item->email}}</td>
                                <td><img src="{{ asset('/images/avatar/' . $item->avatar) }}" height="100px" width="100px" /></td>
                                <td>
                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal">  
                                        <i id="edit_icon" class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{route('admin.xoaSinhVien', ['id'=>$item->id])}}" class="delete" onclick="return confirm('Bạn có chắc muốn xóa sinh viên này?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="clearfix">
                        <div class="hint-text">Showing <b>1</b> out of <b>??</b> entries</div>
                        <ul class="pagination">
                            <li class="page-item disabled"><a href="#">Previous</a></li>
                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                            <li class="page-item"><a href="#" class="page-link">5</a></li>
                            <li class="page-item"><a href="#" class="page-link">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>        
        </div>
        <!-- Add Modal HTML -->
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('admin.themSinhVien')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">						
                            <h4 class="modal-title">Add Employee</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">	
                            <div class="form-group">
                                <img src="{{ asset('/images/avatar/nullAvt.png') }}" height="10%" width="10%" />
                            </div>
                            <div class="form-group">
                                <input style="opacity: 0;height: 0;" id="upload" type="file" onchange="readURL(this);" class="form-control border-0" name="avatar">
                                <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                                <div><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm d-block"></div>
                            </div>				
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" name="password" required>
                            </div>					
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-success" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">Edit Employee</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" required>
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
        <!-- Delete Modal HTML -->
        <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">Delete Employee</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <p>Are you sure you want to delete This Records?</p>
                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-danger" value="Delete">
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
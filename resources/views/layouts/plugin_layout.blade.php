<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link href="https://fonts.googleapis.com/
	css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<!-- Datatable CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"/>

	<!-- jQuery Library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- Datatable JS -->
	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
</head>
<body>
	<!-- Preloader-->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->

    <!-- end of navbar -->
	@yield('nav_bar')
    <!-- end nav bar -->

    @yield('body')
	
    <!-- footer -->
	<div class="footer">
		<div class="menu">
			<ul>
				<li>CHÍNH SÁCH QUYỀN RIÊNG TƯ</li>
				<li>ĐIỀU KHOẢN VÀ ĐIỀU KIỆN</li>
				<li>NGHỀ NGHIỆP</li>
				<li>LIÊN HỆ</li>
				<li><i class="fab fa-twitter"></i></li>
				<li><i class="fab fa-instagram"></i></li>
				<li><i class="fab fa-facebook-square"></i></li>
				<li><i class="fab fa-youtube-square"></i></li>
				<li>H2K INC. © COPYRIGHT 2021. ALL RIGHTS RESERVED.</li>
			</ul>
		</div>
	</div>
    <!-- end footer -->

    <!-- script -->
	<script src="/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
	<script src="/js/scripts.js"></script> <!-- Custom scripts -->
    <!-- end script -->
</body>
</html>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>SmartEDU - Education Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" Tên đăng nhập="Tên đăng nhập" placeholder="Tên đăng nhập" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" Mật khẩu="Mật khẩu" placeholder="Mật khẩu" type="Mật khẩu">
								</div>
							</div>
							
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Tên đăng ký" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" Mat khau="Mật khẩu" placeholder="Mật khẩu" type="Mật khẩu">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" Nhập lại mật khẩu="Nhập lại mật khẩu" placeholder="Nhập lại mật khẩu" type="Nhập lại mật khẩu">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" Maloai="Mã loại" placeholder="Mã loại" type="Mã loại">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"> <input type="search" class="search-field mb-0" name="s" value="" id="s" placeholder="Search…" autocomplete="off"></li>
						<li class="nav-item"><a class="nav-link" href="index.php">Trang chủ</a></li>
						<li class="nav-item"><a class="nav-link" href="gioi_thieu.php">Giới thiệu</a>
						<li class="nav-item ">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Lớp học </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="course-grid-2.php">Lớp học 1 </a>
								<a class="dropdown-item" href="course-grid-3.php">Lớp học 2 </a>
								<a class="dropdown-item" href="course-grid-4.php">Lớp học 3 </a>
							</div>
						</li>
						<li class="nav-item ">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Đánh giá </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog-single.php">Đánh giá của phụ huynh </a>
							</div>
						</li>	
						
						<li class="nav-item"><a class="nav-link" href="teachers.php">Giáo viên</a></li>
						<li class="nav-item"><a class="nav-link" href="Lienhe.php">Liên hệ</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	
<p style="text-align: center;"></p>
<p style="text-align: center;"><span style="font-size: 130%; color: #003366;"><strong>Trung tâm gia sư SmartEDU</strong></span></p>
<p style="text-align: center;"><span style="color: #003366;">Địa chỉ: Số 123, đường Củ Chi, Vĩnh Hải, Nha Trang</span></p>
<p style="text-align: center;"><span style="color: #003366;">Hotline: 0981734759</span></p>
<p style="text-align: center;"><span style="font-size: 130%; color: #003366;"><strong>Chúng tôi luôn đồng hành và hỗ trợ trong suốt quá trình học tập</strong></span></p>
<p>&nbsp;</p>
<p>
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.5418539265!2d109.19414801481487!3d12.279252591312751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317067fa7998e123%3A0x2e50308649822dba!2zMTIzIMSQLiBD4bunIENoaSwgVsSpbmggSOG6o2ksIFRow6BuaCBwaOG7kSBOaGEgVHJhbmcsIEtow6FuaCBIw7JhIDY1MDAwMA!5e0!3m2!1svi!2s!4v1611640497747!5m2!1svi!2s" width="1920" height="760" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</p>

	<?php 
	include('./footer.php');
	?>
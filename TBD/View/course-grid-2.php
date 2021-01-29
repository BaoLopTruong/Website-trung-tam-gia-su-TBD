<?php 
	include('./header.php');
?>
<body class="host_version"> 
	<!-- Modal -->
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
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
							</div>
                        </li>
						<li class="nav-item ">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Lớp học </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="course-grid-2.php">Lớp học 1 </a>
								<a class="dropdown-item" href="course-grid-3.php">Lớp học 2 </a>
								<a class="dropdown-item" href="course-grid-4.php">Lớp học 3 </a>
							</div>
						</li>
						<li class="nav-item">
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
	<!-- End header -->
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Lớp học 1 <span class="m_1">Dành cho học sinh tiêu học.</span></h1>
		</div>
	
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <p class="lead">Đối với học sinh cấp 1,các em khá bỡ ngỡ với môi trường học,tuy nhiên các bậc phụ huynh hãy yên tâm chúng tôi với đội ngũ giáo viên tâm huyết,nhiệt tình các em sẽ tiến bộ qua từng ngày!</p>
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row"> 
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/lop1.JPG" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Đối với học sinh lớp 1</a></h2>
							</div>
							<div class="course-desc">
								<p>Lớp 1,các em mới đầu làm quen với cách học mới,với lớp 1 các con có chương trình học ngày một khác.Vì vậy các giáo viên sẽ cùng các con học tập thật tốt. </p>
							</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star-half"></i>								
							</div>
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 1 Lớp</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 23 Học sinh</li>
							</ul>
						</div>
					</div>
                </div><!-- end col -->

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/lop2.JPG" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Đối với học sinh lớp 2</a></h2>
							</div>
							<div class="blog-desc">
								<p>Để các em học tập tốt hơn,thầy cô giáo sẽ cho các em học kiến thức nâng cao để các em có cách tư duy tốt.. </p>
							</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star-half"></i>								
							</div>
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 1 lớp </li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 24 Học sinh</li>
							</ul>
						</div>
					</div>
                </div><!-- end col -->	
            </div><!-- end row -->
			
			<hr class="hr3"> 
			
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/lop3.JPG" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Đối với học sinh lớp 3</a></h2>
							</div>
							<div class="course-desc">
								<p>Toán lớp 3 khá khó,vì vậy các em phải thật chú tâm và kính mong quý phụ huynh về kiểm tra bài để các con có tinnh thần học tập tốt,hàng tháng thyaaf cô sẽ cho làm bài kiểm tra. </p>
							</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star-half"></i>								
							</div>
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 1 Lớp</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 20 Học sinh</li>
							</ul>
						</div>
					</div>
                </div><!-- end col -->
				<div class="col-lg-6 col-md-6 col-12">
                   <div class="course-item">
						<div class="image-blog">
							<img src="images/lop4.JPG" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Đối với học sinh lớp 4</a></h2>
							</div>
							<div class="course-desc">
								<p>Phụ huynh nào có con đang học lớp 4,hãy yên tâm gửi con mình đến SmartEDU. Chúng tôi giảng dạy các em sát với chương trình học ở trường đồng thời nâng cao kiến thức để các em học tập tốt hơn. </p>
							</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star-half"></i>								
							</div>
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 1 Lớp </li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 29 Học sinh</li>
							</ul>
						</div>
					</div>
                </div><!-- end col -->
			</div><!-- end row -->
			<hr class="hr3"> 
			
            <div class="row"> 
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/lop5.JPG" alt="" class="img-fluid">
						</div>		
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Đối với học sinh lớp 5</a></h2>
							</div>
							<div class="course-desc">
								<p>Lớp 5 là cuối cùng cấp 1.Các em học nhiều và các em cần trang bị tốt môn tiếng anh.Đồng thơi các em phải ôn luyện kỹ để có kỳ thi chuyển cấp tốt. </p>
							</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star-half"></i>								
							</div>
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 1 Lớp</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 25 Học sinh</li>
							</ul>
						</div>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <footer class="footer">
        <div class="container" style="background: #4c5a7d url(images/world-map.png) no-repeat center;">
            <div class="row">
            <div class="col-lg-1 col-md-1">
                </div>
                <div class="col-lg-5 col-md-4\5 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3 style="color: black;">Trung tâm gia sư SmartEDU</h3>
                        </div>
						<p style="color: black;"> Để thấy được sự tiến bộ của con mình qua từng buổi học,hãy liên hệ với trung tâm để đực tư vấn</p>
						<p style="color: black;"> NƠI HỘI TỤ NHÂN TÀI</p>  
						<div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul><!-- end links -->
						</div>						
                    </div><!-- end clearfix -->
                </div>

                <div class="col-lg-1 col-md-1">
                </div>

                <div class="col-lg-5 col-md-5 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3 style="color: black;">Chi tiết liên hệ</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">info@yoursite.com</a></li>
                            <li><a href="#">www.yoursite.com</a></li>
                            <li style="color: black;">Trung tâm gia sư SmartEDU</li>
                            <li style="color: black;">0981734759</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->
    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">Bảo, Thảo, Đức. &copy; DHCN4 <a href="#">SmartEDU</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>
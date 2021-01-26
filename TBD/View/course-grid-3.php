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
						<li class="nav-item">
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
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log" href="#" data-toggle="modal" data-target="#login"><span>Đăng ký</span></a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>	
	<!-- End header -->
	<div class="all-title-box">
		<div class="container text-center">
			<h1>Lớp học 2 <span class="m_1">Dành cho học sinh trung học cơ sở.</span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <p class="lead">Đối với học sinh cấp trung học cơ sở,các em có sự thay đổi về chương trình học. Vì vậy chúng tôi sẽ kèm cặp học sinh đồng thời kiểm tra độ:"Nhận biết-Thông hiểu-Vận dụng" của học sinh!</p>
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row"> 
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/lop6.JPG" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Đối với học sinh lớp 6</a></h2>
							</div>
							<div class="course-desc">
								<p>Học sinh mới chuyển cấp và có sự thay đổi về số lượng môn học cũng như chương trình học.Vì vậy chúng tôi se cho các em làm quen và từng buổi học chúng tôi có đề kiểm tra nhỏ để phân chia lớp cũng như đánh giá năng lực của từng em. </p>
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
							<img src="images/lop7.JPG" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Đối với học sinh lớp 7</a></h2>
							</div>
							<div class="blog-desc">
								<p>Chương trình toán lớp 7 rất hay và thú vị. Nó đồi hỏi học sinh ngay từ khi bước vào đầu năm học cần những phương pháp học tập phù hợp để lĩnh hội được kiến thức,kỹ năng.Đồng thời giảng viên sẽ ôn tập và nâng cao thêm kiến thức cho các em. </p>
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
							<img src="images/lop8.JPG" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Đối với học sinh lớp 8</a></h2>
							</div>
							<div class="course-desc">
								<p>Kiến thức học ở trường có sự tăng lên cả kiến thức lẫn kỹ năng đặ biệt là môn văn. Nhiều bạn học sinh khá băn khoăn? Các em đừng lo lắng,Gia sư SmartEDU sẽ chia sẻ,kèm theo đó là nlafm sao để học tốt môn Ngữ văn... </p>
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
								<li><i class="fa fa-users" aria-hidden="true"></i> 26 Học sinh</li>
							</ul>
						</div>
					</div>
                </div><!-- end col -->
				<div class="col-lg-6 col-md-6 col-12">
                   <div class="course-item">
						<div class="image-blog">
							<img src="images/lop9.JPG" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Đối với học sinh lớp 9</a></h2>
							</div>
							<div class="course-desc">
								<p>Chương trình học lớp 9 có nhiều kiến thức rất quan trọng,và chuẩn bị có kỳ thi chuyển cấp. Để các em lãnh tụ được kiến thức,đội ngũ gia sư sẽ có nhưng bài giảng phù hợp và tập trung cho các em giải đề thi chuyển cấp </p>
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
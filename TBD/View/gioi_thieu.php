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
	
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/lophoc.jpg');">
					
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/lophoc2.jpg');">
					<div class="dtab">
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/slider-03.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>TRUNG TÂM GIA SƯ</strong> SmartEDU</h2>
										<p class="lead" data-animation="animated fadeInLeft">CÙNG BẠN VƯƠN TỚI TÂM CAO</p>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">

			<main class="pagein">
				<section id="content">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 d-none d-lg-block">
								<div id="boxleft">
				
								    <div class="title">
								        <h2>Hỗ trợ trực tuyến</h2>
								    </div>
								</div>

								<div class="boxleft">
							        <div class="text-center">
							            <img src="images/tongdai.jpg" alt="support-online">
							        </div>
							        <fieldset>
							            <legend>Số Hotline</legend>
							            <span><i class="fas fa-phone-volume"></i></span>
							            <a href="0981734759" title="Hotline">&nbsp;0981734759</a>
							        </fieldset>
							    </div>

							    <div class="title">
						            <h2>Đăng ký tìm gia sư</h2>
						        </div>

						        <div class="boxleft">
						            <form method="post" action="lien-he/" enctype="multipart/form-data">
						                <input type="text" name="name" class="form-control mb-2" placeholder="Họ và tên" required="">
						                <input type="email" name="title" class="form-control mb-2" placeholder="Email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
						                <input type="text" name="title" class="form-control mb-2" placeholder="Lớp học" required="">
						                                <input type="text" name="phone" class="form-control mb-2" placeholder="Số điện thoại" required="" pattern=".{10}" title="10 số" onkeypress="return isNumberKey(event)">
						                <input type="text" name="address" class="form-control mb-2" placeholder="Địa chỉ" required="">
						                <textarea class="form-control mb-2" name="content" required="" placeholder="Nội dung"></textarea>
						                <div class="form-group text-right">
						                    <button class="btn btn-danger">Gửi</button>
						                </div>
						            </form>
						        </div>
							</div>

							<div class="col-lg-9">
								<div class="container clearfix">
									<h1 style="text-align: center;"><strong>&nbsp;TRUNG TÂM GIA SƯ SmartEDU</strong></h1>

										<p><span style="font-size:18px;"><strong>Trung tâm gia sư SmartEDu:</strong>&nbsp;Với nhiều năm hoạt động trong lĩnh vực gia sư, đúc kết được rất nhiều kinh nghiệm theo thời gian và từng bước khẳng đinh mình như là một trung tâm gia sư uy tín nhất trong cả nước. Để đồng hành cùng với quý phụ huynh và học sinh tạo ra một con đường đi đúng đắn hướng các em theo một con đường nhanh nhất dẫn tới thành công.</span></p>

										<p style="text-align: center;"><span style="font-size:18px;"><span style="color:#f1c40f;"><span style="background-color:#e74c3c;">(Qúy phụ huynh liên hệ hotline: 0981734759 - 0383716432 đế được tư vấn miễn phí)</span></span></span></p>
										
										<p><span style="font-size:18px;"></span></p>

										<p><span style="font-size:18px;">&nbsp; &nbsp; &nbsp;Với phương châm "LUÔN LUÔN CỐ GẮNG, LUÔN LUÔN HỌC HỎI". Chúng tôi&nbsp;đội ngũ&nbsp;<strong>Gia Sư</strong>&nbsp;<strong>SmartEdu&nbsp;</strong>&nbsp;với sự trẻ trung năng động của mình, trách nhiệm , nhiệt huyết với sự cam kết chắc chắn sẽ mang đến cho quý phu huynh và học sinh một dịch vụ tốt nhất, tuyển chọn và đạo tạo ra những giáo viên, sinh viên xuất sắc nhất, tinh thấn trách nhiệm cao.</span></p>

										<p>&nbsp;</p>

										<p style="text-align: center;"><img alt="" src="http://giasutuoitre.com/Upload/images/12.png" style="width: 500px; height: 284px;"></p>

										<p><strong><span style="color:#c0392b;">&nbsp; &nbsp; &nbsp; &nbsp;</span><span style="color:#c0392b;"></span></strong></p>

										<p><span style="font-size:18px;">&nbsp; &nbsp; &nbsp; &nbsp;<span style="color:#c0392b;"><span style="background-color:#ffffff;"> &nbsp; </span><u><strong><span style="background-color:#ffffff;">LỊCH KHẢI GIẢNG-HỌC PHÍ</span></strong></u></span></span></p>

										<ul>
											<li><span style="font-size:18px;"><strong> Giảm ngay 15% học phí:</strong></span></li>
											<li><span style="font-size:18px;"><p> cho học sinh đăng ký full khóa học và đóng học phí trong ngày nhập học.<span style="background-color:#ffffff;"></span></p></span></li>
											<li><span style="font-size:18px;"><p> Đăng ký theo  nhóm từ 3 học sinh trở lên.</p></span></li>
											<li><span style="font-size:18px;"><p> 100% học sinh nhập học và đóng học phí trong ngày nhập học sẽ có quà tặng cực HOT </p></span></li>
										</ul>

										<p><span style="font-size:18px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="color:#c0392b;"><u> <strong>PHƯƠNG PHÁP GIẢNG DẠY CỦA TRUNG TÂM GIA SƯ TUỔI TRẺ</strong></u></span></span></p>

										<ul>
											<li><span style="font-size:18px;"><p>Kiểm tra đầu vào để phân loại học sinh và chuẩn bị giáo trình phù hợp.</p></span></li>
											<li><span style="font-size:18px;"><p>Ôn tập lại toàn bộ những kiến thức đã học ở trường,cho ví dụ cụ thể .<span style="background-color:#ffffff;"></span></p></span></li>
											<li><span style="font-size:18px;"><p>Với những em có học lực khá giỏi chúng tôi sẽ nâng cao kiến thức để các em có thể phát huy hết khả năng của mình.</p></span></li>
											<li><span style="font-size:18px;"><p>Nội dung bài giảng được biên soạn bởi chuyên gia của trung tâm có nhiều năm kinh nghiệm giảng dạy.</p></span></li>
											<li><span style="font-size:18px;"><p>Luôn hướng học sinh phải thực hành nhiều bằng những bài tập cơ bản và nâng cao.</p></span></li>
											<li><span style="font-size:18px;"><p>Thường xuyên cập nhật kết quả cho quý phụ huynh ít nhất một tuần một lần</p></span></li>
										</ul>

										<p><span style="font-size:18px;">&nbsp; &nbsp; &nbsp; &nbsp;<span style="color:#c0392b;"><span style="background-color:#ffffff;"> &nbsp; </span><u><strong><span style="background-color:#ffffff;">CAM KẾT CHẤT LƯỢNG</span></strong></u></span></span></p>

										<ul>
											<li><span style="font-size:18px;"><p>Hiệu quả uy tín là tiêu chí hàng đầu của trung tâm gia sư tuổi trẻ</p></span></li>
											<li><span style="font-size:18px;"><p>Cung cấp những gia sư có trình độ chuyên môn cao.</p></span></li>
											<li><span style="font-size:18px;"><p>Hủy hợp đồng đối với những gia sư thiếu trách nhiệm.</p></span></li>
											<li><span style="font-size:18px;"><p>Gia sư chúng tôi được đào tạo bài bản trước khi nhận lớp.</p></span></li>
											<li><span style="font-size:18px;"><p>Cam kết học sinh sẽ tiến bộ sau nữa tháng học.</p></span></li>
											<li><span style="font-size:18px;"><p>Phụ huynh chỉ đóng học phí sau khi hài lòng về cách dạy của các gia sư.</p></span></li>
										</ul>

										<p><span style="font-size:18px;"></span></p>

										<p style="text-align: center;"><span style="font-size:18px;"><span style="color:#f1c40f;"><span style="background-color:#e74c3c;">(Qúy phụ huynh liên hệ hotline: <span style="font-size:18px;"><span style="color:#f1c40f;"><span style="background-color:#e74c3c;">0981734759 - 0383716432</span></span></span> đế được tư vấn miễn phí)</span></span></span></p>

										<p><span style="font-size:18px;">&nbsp; &nbsp; &nbsp; &nbsp;<span style="color:#c0392b;"><span style="background-color:#ffffff;"> &nbsp; </span><u><strong><span style="background-color:#ffffff;">TRUNG TÂM UY TÍN CHO SINH VIÊN</span></strong></u></span></span></p>

										<p><span style="font-size:18px;"> Trung tâm trẻ hổ trợ tối đa cho các bạn sinh viên kể cả giáo viên về mức phí hợp lý nhất. Sẽ hoàn tiền 100% nếu phụ huynh hủy lớp do một số khách quan nào đó.</span></p>

										<p><span style="font-size:18px;"><strong>Lưu ý:</strong>&nbsp;Trung Tâm sẽ cho gia sư dạy thử từ 2 - 3 buổi trước khi dạy chính thức để đảm bảo chất lượng gia sư của trung tâm. Nếu sau thời gian dạy thử quý phụ huynh thấy gia sư của trung tâm dạy không đạt yêu cầu hay không phù hợp thì xin quý phụ huynh hãy báo ngay cho trung tâm, chúng tôi sẽ đổi ngay cho các bạn một gia sư khác thích hợp hơn.</span></p>

										<p><span style="font-size:18px;">&nbsp; &nbsp; &nbsp; &nbsp;<span style="color:#c0392b;"><span style="background-color:#ffffff;"> &nbsp; </span><u><strong><span style="background-color:#ffffff;">ĐỊNH HƯỚNG CHO HỌC SINH</span></strong></u></span></span></p>

										<p><span style="font-size:18px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Uy tín, chất lượng và trách nhiệm là những gì Gia Sư SmartEDu mang đến cho học sinh. Chúng tôi tâm niệm rằng sự hài lòng của phụ huynh là sự thành công của trung tâm.</span></p>

										<p style="text-align: center;"><span style="font-size:18px;"><span style="color:#27ae60;"><strong>Mọi chi tiết&nbsp;</strong></span><span style="color:#27ae60;"><strong>&nbsp;xin vui lòng liên hệ về chúng tôi để được tư vấn</strong></span></span></p>

										<p style="text-align: center;"><span style="font-size:18px;"><strong>TRUNG TÂM GIA SƯ SMARTEDU</strong></span></p>

										<p style="text-align: center;"><span style="font-size:18px;"><span style="color:#e74c3c;"><strong>ĐT :</strong><strong>&nbsp;0981734759-0383716432</strong></span></span></p>

										<p style="text-align: center;"><span style="font-size:18px;"><strong><em><span style="color:#2ecc71;">Chúng tôi luôn đồng hành và hỗ trợ trong suốt quá trình học tập</span></em></strong></span></p>
								</div>
							</div>				
						</div>
					</div>
				</section>
			</main>
		</div>
	</div>
<?php 
	include('./footer.php');
	
?>
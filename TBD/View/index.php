<?php 
	include('./header.php');
?>
<body class="host_version"> 
	
<?php 
	include('./head.php');
?>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Đăng Nhập</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Đã Có Tài Khoản</a></li>
					<li><a href="#Registration" data-toggle="tab">Chưa Có Tài Khoản</a></li>
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
										Đăng nhập
									</button>
									<a class="for-pwd" href="javascript:;">Quên mật khẩu?</a>
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
								<heading3> Bạn đăng kí tài khoản với vai trò </heading> 
									<select>
									<option> Gia Sư </option>
									<option> PHHS </option>
									 </select>
									 
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Đăng Ký Tài Khoản
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Trở Lại</button>
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
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>SmartEDU</h3>
                    <p class="lead">Bằng nhiều năm kinh nghiệm trong công tác giảng dạy, chúng tôi hiểu rằng: DẠY KÈM là phương pháp tốt nhất để HỌC SINH YẾU dễ hiểu bài và HỌC SINH GIỎI nhanh nâng cao kiến thức. Với mong muốn đem đến cho các quý phụ huynh những gia sư chất lượng tốt nhất. Trung tâm Gia Sư SmartEDU hiện đã cộng tác với rất nhiều Giáo Viên và Sinh Viên ưu tú của các trường: ĐH sư Phạm, ĐH Bách Khoa, ĐH KHXH & NV, ĐH Tự Nhiên, ĐH Kinh Tế...trên địa bàn thành phố, nhằm tạo ra một đội ngũ gia sư có trình độ tốt nhất.</p>
                </div>
            </div><!-- end title -->
        
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>TRUNG TÂM GIA SƯ TỐT NHẤT</h2>
                        <h4>Chào mừng đến với SmartEDU </h2>
                        <p>SmartEDU hi vọng, khi đến với dịch vụ dạy kèm của chúng tôi, các bậc làm cha mẹ sẽ hoàn toàn yên tâm về việc học tập của con trẻ, chúng tôi sẽ đáp ứng mọi yêu cầu về trình độ kiến thức, về thời gian học tập, về địa điểm học tập.</p>

                        <p> Chúng tôi luôn tâm niệm, truyền đạt kiến thức cho học trò là một công việc không bao giờ đơn giản, làm sao để các em tiếp thu nhanh chóng, nắm bắt vấn đề và đủ tự tin để ứng dụng vào bài tập là một hành trình vô cùng gian nan của cả người thầy lẫn học trò. </p>

                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/about_02.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/about-04.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Nhiệm vụ của người thầy-Gia sư-Chúng tôi</h2>
                        <p>- Thường xuyên cũng cố bài học ở trường, dạy theo sổ báo bài ở lớp.</p>
						<p>- Thiết lập giáo án phù hợp với năng lực của từng học trò.</p>
						<p>- Luôn mở rộng, nâng cao kiến thức cho học sinh khá giỏi.</p>
                        <p> *Ngoài việc truyền đạt kiến thức, chúng tôi mong muốn sẽ cùng với quý vị phụ huynh góp phần hình thành nhân cách, giáo dục đạo đức cho các em để quý vị phụ huynh yên tâm trong công việc gia đình và xã hội.</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	<div class="section cl">
		<div class="container">
			<div class="row text-left stat-wrap">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
					<p class="stat_count">12000</p>
					<h3>Học sinh</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
					<p class="stat_count">240</p>
					<h3>Khóa học</h3>
				</div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
					<p class="stat_count">55</p>
					<h3>Năm hoàn thành</h3>
				</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

    <div id="plan" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Giáo dục tốt nhất là khi giáo dục xoay quanh bạn</h3>
                <p>Vì lợi ích một năm trồng cây- Vì lợi ích trăm năm trồng người. </p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="message-box">
                        <ul class="nav nav-pills nav-stacked" id="myTabs">
                            <li><a class="active" href="#tab1" data-toggle="pill">Đăng ký học hàng tháng</a></li>
                        </ul>
                    </div>
                </div><!-- end col -->
            </div>

            <hr class="invis">

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade show" id="tab1">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Tháng 10</h2>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-bars"></i> <strong>Môn học-Lớp</strong> Toán-lớp 2</p>
                                            <p><i class="fa fa-rocket"></i> <strong>Thời gian</strong> Tối T2,T5,T7</p>
                                            <p><i class="fa fa-database"></i> <strong>Địa chỉ</strong> 123,Đường Củ Chi</p>
                                            <p><i class="fa fa-link"></i> <strong>Học phí</strong> 1.500.000</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>Yêu cầu</strong> Giáo viên</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="./dangki.php" class="hover-btn-new orange"><span>Đăng ký</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Tháng 11</h2>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-bars"></i> <strong>Môn học-Lớp</strong> Văn-lớp 8</p>
                                            <p><i class="fa fa-rocket"></i> <strong>Thời gian</strong> Chiều T3,T6</p>
                                            <p><i class="fa fa-database"></i> <strong>Địa Chỉ</strong> 123,Đường Củ Chi</p>
                                            <p><i class="fa fa-link"></i> <strong>Học phí</strong> 1.300.000</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>Yêu cầu</strong> Sinh viên</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="./dangki.php" class="hover-btn-new orange"><span>Đăng ký</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Tháng 12</h2>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-bars"></i> <strong>Môn học-Lớp</strong> Anh-Lớp 12</p>
                                            <p><i class="fa fa-rocket"></i> <strong>Thời gian</strong> Tối T5,T7,CN</p>
                                            <p><i class="fa fa-database"></i> <strong>Địa chỉ</strong> 123,Đường Củ Chi</p>
                                            <p><i class="fa fa-link"></i> <strong>Học phí</strong> 1.800.000</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>Yêu cầu</strong> Giáo viên</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="./dangki.php" class="hover-btn-new orange"><span>Đăng ký</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end pane -->
                    </div><!-- end content -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

<?php 
	include('./footer.php');
?>
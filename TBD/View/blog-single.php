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
		   <h1>TRUNG TÂM<span class="m_1">UY TÍN - CHẤT LƯỢNG -NHIỆT TÌNH.</span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
	<div class="container">
	<div class="col-lg-12 col-md-12 col-xs-12">
		<div class="main-content"></div>
	</div class="expert-preview">
	<div class="experts"><div class="expert-preview">
	<div class="expert-meta">
		<div class="expert-image bordered-image">
			<img src="./images/phuhuynh1.jpg" class="avatar" width="150" alt=""></a>
		</div>
			
	</div>
	<div class="expert-text">
		<h4 class="nomargin">
			<a href="/">
			Chị Nhung			</a>
		</h4>
		<span class="expert-signature">Phụ huynh em Tiến lớp 11</span>
		<p>Tôi thật sự bất ngờ vì có trung tâm gia sư chất lượng. Giáo viên dạy cho con chúng tôi rất tốt, nhiệt tình, tận tâm, đúng giờ và hiểu được tâm lý các cháu.Cám ơn SmartEDU rất nhiều vì đã hỗ trợ cho con chúng tôi</p>	</div>
</div><div class="expert-preview">
	<div class="expert-meta">
		<div class="expert-image bordered-image">
			<img src="./images/phuhuynh2.jpg" class="avatar" width="150" alt=""></a>
		</div>
	<div class="expert-text">
		<h4 class="nomargin">
			<a href="/">
			Chị Hoài			</a>
		</h4>
		<span class="expert-signature">Phụ huynh bé Khánh Vân lớp 2</span>
		<p>Bé Vân nhà mình hơi hiếu động nên mình đã tìm gia sư ở các trung tâm, nhưng chỉ được một thời gian thì phải cho nghỉ vì thấy bé không tiến bộ, và cách dạy không phù hợp. Chỉ khi được làm việc với&nbsp;<strong>Gia Sư SmartEDU</strong>&nbsp;thì bé có tiến bộ rõ rệt, bé đã tự giác học, và học lực bé đã tăng từ trung bình lên giỏi sau 2 tháng. Mình cảm ơn SmartEDU, cảm ơn cô Hằng người trực tiếp giảng dạy cho bé 2 năm qua</p>	</div>
</div></div>

					
					<div class="blog-author">
						<div class="author-bio">
							<h3 class="author_name"><a href="#">Trần Thị Minh Hằng</a></h3>
							<h5>Giám đốc <a href="#">Trung tâm SmartEDU</a></h5>
							<p class="author_det">
								
							</p>Cảm ơn quý phụ huynh đã tin tưởng trung tâm chúng tôi. Với đội ngũ giảng viên cũng như phân chia lớp hợp lý tôi tin rằng các con sẽ tiến bộ mỗi ngày.
						</div>
						<div class="author-desc">
							<img src="images/testi_01.png" alt="about author">
							<ul class="author-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-skype"></i></a></li>
							</ul>
						</div>
					</div>
					
					<div class="blog-comments">
						<h4>Comments (3)</h4>
						<div id="comment-blog">
							<ul class="comment-list">
								<li class="comment">
									<div class="avatar"><img alt="" src="images/hocsinh1.png" class="avatar"></div>
									<div class="comment-container">
										<h5 class="comment-author"><a href="#">Lê Anh Thư-Trường THPT Lê Lợi</a></h5>
										<div class="comment-meta">
											<a href="#" class="comment-date link-style1">Ngày 26 -12- 2020</a>
											<a class="comment-reply-link link-style3" href="#respond">Reply »</a>
										</div>
										<div class="comment-body">
											<p>Em đã học với gia sư thành công từ năm lớp 10, đến nay đã gần 2 năm, từ một học sinh phải thi lại môn Toán bây giờ em đã trở thành học sinh giỏi toán, cảm ơn sự giảng dạy nhiệt tình, có tâm của đội ngũ gia sư Thành Công.</p>
										</div>
									</div>
								</li>
								<li class="comment">
									<div class="avatar"><img alt="" src="images/hocsinh22.png" class="avatar"></div>
									<div class="comment-container">
										<h5 class="comment-author"><a href="#">Cao Minh Như-Trường THCS Tân Lâm</a></h5>
										<div class="comment-meta">
											<a href="#" class="comment-date link-style1">Ngày 18 -1- 2021</a>
											<a class="comment-reply-link link-style3" href="#respond">Reply »</a>
										</div>
										<div class="comment-body">
											<p>Đối với em việc học luôn luôn áp lực và quá sức nhưng từ khi được gia sư THÀNH CÔNG chỉ dạy tình trạng học của em đã được cải thiện tiến bộ rõ ràng, em cảm thấy yêu thích dần với việc được học thêm những kiến thức mới, các bài tập nâng cao. Giờ em rất tự tin khi bước tới trường học.</p>
										</div>
									</div>
									<ul class="children">
										<li class="comment">
											<div class="avatar"><img alt="" src="images/hocsinh33.png" class="avatar"></div>
											<div class="comment-container">
												<h5 class="comment-author"><a href="#">Nguyễn Hà Minh</a></h5>
												<div class="comment-meta"><a href="#" class="comment-date link-style1">Ngày 22-2-2021</a>
												<a class="comment-reply-link link-style3" href="#respond">Reply »</a></div>
												<div class="comment-body">
													<p>Từng là học sinh mất căn bản môn Hóa,em chán nản mỗi khi đến trường, mặc dù đã đi học thêm ở thầy cô giáo bộ môn trong trường nhưng do lớp học đông, thầy cô không thể theo sát từng bạn. Được mẹ động viên đi học ở trung tâm SmartEdu, với sự nhiệt tình, tận tâm của thầy cô chỉ sau 1 học kỳ là e đã theo kip và vươn lên trở thành học sinh giỏi trong lớp.</p>
												</div>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<div class="comments-form">
						<h4>Comment</h4>
						<div class="comment-form-main">
							<form action="#">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<input class="form-control" name="commenter-name" placeholder="Name" id="commenter-name" type="text">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input class="form-control" name="commenter-email" placeholder="Email" id="commenter-email" type="text">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input class="form-control" name="commenter-url" placeholder="Website URL" id="commenter-url" type="text">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="commenter-message" placeholder="Message" id="commenter-message" cols="30" rows="2"></textarea>
										</div>
									</div>
									<div class="col-md-12 post-btn">
										<button class="hover-btn-new orange"><span> Gửi</span></button>
									</div>
								</div>
							</form>
						</div>
					</div>
					
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

	<?php 
	include('./footer.php');
	?>
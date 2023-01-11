</div>
</div>
<br class="break" /></div>
</div>
</div>


<!-- End Divider -->
</div>
<!-- end main-content -->

<!-- Footer -->
<footer id="footer" class="footer">
	<div class="footer-widget-area">
		<div class="container pt-90 pb-60">
			<div class="row">
				<div class="block col-md-6 col-lg-6 col-xl-4">
					<div class="b-inner">
						<div class="b-title">
							<h4>Liên hệ TBNV</h4>
						</div>
						<div class="b-content">
							<p><?php echo $lienhe->dia_chi; ?></p>
							<ul style="list-style:none;">
								<li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-3"></i> <span class="text-gray">Phone 1: <?php echo $lienhe->sdt1; ?></span> </li>
								<li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-3"></i> <span class="text-gray">Phone 2: <?php echo $lienhe->sdt2; ?></span> </li>
								<li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-3"></i> <span class="text-gray">Email: <?php echo $lienhe->gmail; ?></span> </li>
								<li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-2 mr-3"></i> <span class="text-gray">Website: <?php echo $lienhe->website; ?></span> </li>
							</ul>
						</div>
					</div>
				</div>

				<div class="block col-md-6 col-lg-6 col-xl-3">
					<div class="b-inner">
						<div class="b-title">
							<h4>Menu</h4>
						</div>
						<div class="b-content">
							<div class="widget widget_nav_menu">
								<ul class="menu">
									<li class="menu-item menu-item-type-post_type menu-item-object-services"><a href="./Home">Trang chủ</a></li>
									<li class="menu-item menu-item-type-post_type menu-item-object-services"><a href="./GioiThieu">Giới thiệu</a></li>
									<li class="menu-item menu-item-type-post_type menu-item-object-services"><a href="./DichVu_GiaiPhap">Dịch vụ & Giải pháp</a></li>
									<li class="menu-item menu-item-type-post_type menu-item-object-services"><a href="./Home">Dự Án</a></li>
									<li class="menu-item menu-item-type-post_type menu-item-object-services"><a href="./TinTuc">Tin tức</a></li>
									<li class="menu-item menu-item-type-post_type menu-item-object-services"><a href="./LienHe">Liên hệ</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="block col-md-6 col-lg-6 col-xl-3">
					<div class="b-inner">
						<div class="b-title">
							<?php if (isset($_SESSION['ho_ten'])) { ?>
							<a href="./Home/HomeAdmin/"><h4>Admin</h4> </a>
							<?php }else{
								echo "<h4>Admin</h4>";	
							}
							?>
						</div>
						<div class="b-content">
							<div class="widget widget_nav_menu">
								<ul class="b-articles">
									<?php if (isset($_SESSION['ho_ten'])) { ?>
										<li class="menu-item menu-item-type-post_type menu-item-object-services"><a href="./NguoiDung/" title="Admin"><?php echo $_SESSION['ho_ten']; ?></a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-services"><a href="./NguoiDung/DangXuat" title="Admin">Đăng xuất</a></li>
									<?php } else { ?>
										<li class="menu-item menu-item-type-post_type menu-item-object-services"><a href="./NguoiDung/" title="Admin">Đăng nhập</a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom" data-tm-bg-color="#2A2A2A">
			<div class="container">
				<div class="row pt-20 pb-20">
					<div class="col-sm-6">
						<div class="footer-paragraph">
							© Copyright 2022 TBNV. All rights reserved. </div>
					</div>
					<div class="col-sm-6">
						<div class="footer-paragraph text-right dev-text">
							Developed by KhanhSatria71
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="assets/dist/js/custom.js"></script>
<script src="assets/dist/js/extra-rev-slider.js"></script>

</body>

<!-- Mirrored from act4.com.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Dec 2021 07:52:34 GMT -->

</html>
<!DOCTYPE html>
<html dir="ltr" lang="vi">

<!-- Mirrored from act4.com.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Dec 2021 07:52:34 GMT -->

<head>
	<base href="http://phpmvc:8080/" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<link href="index.html" hreflang="vi-VN" rel="alternate" />


	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>TBNV</title>
	<meta name="robots" content="INDEX,FOLLOW" />
	<meta name="keywords" content="Công ty TNHH Thương Mại Dịch Vụ TBNV, TBNV Services & Solutions, Data Cabling, CCTV Systems, PBX Systems, M&E, " />
	<meta name="description" content="Công ty TNHH Thương Mại Dịch Vụ TBNV - giải pháp hạ tầng công nghệ thông tin - Hệ thống cáp đồng, hệ thống cáp quang,  Hệ thống an toàn, Hệ thống đa phương tiện, Hệ thống Data Center, Thiết kế Phòng vi tính: Server, tủ Rack, UPS, Chữa cháy, Điều hòa, Bảo " />
	<link href="theme/icon.ico" rel="shortcut icon" type="image/x-icon" />
	
	

	<script language="javascript" src="libraries/js/system.javascript.js"> </script>


	<link href="theme/css/system.css" rel="stylesheet" type="text/css" />
	<link href="theme/modules/article/css/default.css" rel="stylesheet" type="text/css" />
	<link href="theme/modules/article/css/article.list.css" rel="stylesheet" type="text/css" />
	<!-- Stylesheet -->
	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/dist/css/animate.min.css" rel="stylesheet" type="text/css">
	<link href="assets/dist/css/javascript-plugins-bundle.css" rel="stylesheet" />

	<!-- CSS | menuzord megamenu skins -->
	<link href="assets/dist/js/menuzord/css/menuzord.css" rel="stylesheet" />

	<!-- CSS | timeline -->
	<link href="assets/dist/js/timeline-cp-responsive-vertical/timeline-cp-responsive-vertical.css" rel="stylesheet" type="text/css">

	<!-- CSS | Main style file -->
	<link href="assets/dist/css/style-main.css" rel="stylesheet" type="text/css">
	<link id="menuzord-menu-skins" href="assets/dist/js/menuzord/css/skins/menuzord-rounded-boxed.css" rel="stylesheet" />

	<!-- CSS | Responsive media queries -->
	<link href="assets/dist/css/responsive.css" rel="stylesheet" type="text/css">
	<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->

	<!-- CSS | Theme Color -->
	<link href="assets/dist/css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

	<!-- external javascripts -->
	<script src="assets/dist/js/jquery.js"></script>
	<script src="assets/dist/js/bootstrap.min.js"></script>
	<script src="assets/dist/js/javascript-plugins-bundle.js"></script>
	<script src="assets/dist/js/menuzord/js/menuzord.js"></script>

	<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" type="text/css" href="assets/dist/js/revolution-slider/css/rs6.css">
	<!-- REVOLUTION LAYERS STYLES -->
	<!-- REVOLUTION JS FILES -->
	<script type="text/javascript" src="assets/dist/js/revolution-slider/js/revolution.tools.min.js"></script>
	<script type="text/javascript" src="assets/dist/js/revolution-slider/js/rs6.min.js"></script>
	<link rel="canonical" href="index.html">
	<meta property="og:locale" content="vi_VN" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Dự án tiêu biểu" />
	<meta property="og:url" content="http://tbnv.com.vn/" />
	<meta property="og:site_name" content="Công ty TNHH Thương Mại Dịch Vụ TBNV" />
	<meta property="og:description" content="Công ty TNHH Thương Mại Dịch Vụ TBNV - giải pháp hạ tầng công nghệ thông tin - Hệ thống cáp đồng, hệ thống cáp quang,  Hệ thống an toàn, Hệ thống đa phương tiện, Hệ thống Data Center, Thiết kế Phòng vi tính: Server, tủ Rack, UPS, Chữa cháy, Điều hòa, Bảo " />
	<meta property="og:image" content="http://tbnv.com.vn/uploads/images/logo/logo.jpg" />

	<link href="theme/css/general.css" rel="stylesheet" type="text/css">
	<link href="theme/css/theme.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="container-1340px">
	<div id="wrapper" class="clearfix">
		<!-- Header -->
		<header id="header" class="header header-layout-type-header-2rows">
			<div class="header-top ">
				<div class="container">
					<div class="row">
						<div class="col-xl-auto header-top-left align-self-center text-center text-xl-left">
							<ul class="element contact-info">
							<?php $lienhe = json_decode($data["lienhe"]);?>
								<li class="contact-phone"><i class="fa fa-phone font-icon sm-display-block"></i> Hotline: <?php echo $lienhe->sdt1; ?></li>
								<li class="contact-email hidden-xs"><i class="fa fa-envelope-o font-icon sm-display-block"></i> Email: <?php echo $lienhe->gmail; ?></li>
							</ul>
						</div>
						<div class="col-xl-auto ml-xl-auto header-top-right align-self-center text-center text-xl-right">
							<div class="element">
								<ul class="header-top-nav list-inline">
									<?php if(isset($_SESSION['ho_ten'])){ ?>
									<li><a href="./NguoiDung/UpdateTV/" rel="nofollow" class="text-warning"><?php echo $_SESSION['ho_ten']; ?></a></li>
									<?php }?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
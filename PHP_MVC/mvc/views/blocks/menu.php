<div class="header-nav">
				<div class="header-nav-wrapper navbar-scrolltofixed green">
					<div class="menuzord-container header-nav-container green ">
						<div class="container position-relative">
							<div class="row">
								<div class="col">
									<div class="row header-nav-col-row">
										<div class="col-sm-auto align-self-center">
											<a class="menuzord-brand site-brand" href="./Home/CTDA">
												<img class="logo-default logo-1x" src="uploads/images/logo/logo.jpg" alt="TBNV" style="max-height:80px;">
											</a>
										</div>
										<div class="col-sm-auto ml-auto pr-0 align-self-center">
											<nav id="top-primary-nav" class="menuzord green" data-effect="fade" data-animation="none" data-align="right">

												<ul id="main-nav" class="menuzord-menu">
													<li><a href="index.php">Trang chủ</a></li>
													<li><a href="./GioiThieu">Giới thiệu</a></li>
													<li><a href="./DichVu_GiaiPhap">Dịch vụ & Giải pháp</a>
														<ul class="dropdown">
															<?php 
															$mang_dvgp = json_decode($data["dv_gp"]);
															foreach( $mang_dvgp as $dv_gp){?>
															<li><a href="./DichVu_GiaiPhap/CTDVGP/<?php echo $dv_gp->id;?>"><?php echo $dv_gp->ten_dv_gp; ?></a></li>
															<?php }?>
														</ul>
													</li>
													<li><a href="index.php">Dự Án</a></li>
													<li><a href="./TinTuc">Tin tức</a></li>
													<li><a href="./LienHe">Liên hệ</a></li>
												</ul>

											</nav>
										</div>
									</div>
									<div class="row d-block d-xl-none">
										<div class="col-12">
											<nav id="top-primary-nav-clone" class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive" data-effect="slide" data-animation="none" data-align="right">
												<ul id="main-nav-clone" class="menuzord-menu menuzord-right menuzord-indented scrollable">
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
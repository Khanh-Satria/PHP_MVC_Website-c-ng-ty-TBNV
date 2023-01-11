<div id="breadcrumb">
<section class="page-title divider section-typo-light bg-img-center" data-tm-bg-img="uploads/images/bg/as02.jpg" style="background-image: url(&quot;uploads/images/bg/as02.jpg&quot;);">
		<div class="container pt-20 pb-20">
			<!-- Section Content -->
			<div class="section-content">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="title text-white">Dự án tiêu biểu <?php
							if(isset($_SESSION['ho_ten'])){
								echo $_SESSION['ho_ten'];
							}
						?></h2>
						<nav role="navigation" class="breadcrumb-trail breadcrumbs">
							<div class="breadcrumbs">
								<span class="trail-item trail-begin"><a href="index.php" title="Trang chủ"><span>Trang chủ</span></a>
									<meta itemprop="position" content="1">
								</span> <span><i class="fa fa-angle-right"></i></span> <span class="trail-item "><a href="./Home" title="Dự án tiêu biểu"><span>Dự án tiêu biểu</span></a>
									<meta itemprop="position" content="2">
								</span>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- Content -->
<div class="main-content-area">
	<div id="st-body" class="container">
		<div class="row">
			<div id="st-content" class="col-sm-8">
				<div class="articlecontent">
					<h1 class="modheading">Dự án tiêu biểu</h1>
					<br class="break">
					<div class="st-article-list">
					<?php
                           $mang = json_decode($data["du_an"]);
						 	foreach( $mang as $du_an ){		
                    ?>
						<div class="item row">
							<div class="thumb col-sm-5">
								<a href="./Home/CTDA/<?php echo $du_an->id?>"><img src="uploads/<?php echo $du_an->image; ?>" class="imglink" alt="<?php echo $du_an->image; ?>"></a>
							</div>
							<div class="intro col-sm-7">
								<h3><a href="./Home/CTDA/<?php echo $du_an->id?>"><?php echo $du_an->ten_du_an;?></a></h3>
								<p><?php echo $du_an->mo_ta; ?></p>
								<br>
								<a href="./Home/CTDA/<?php echo $du_an->id?>"><button class="button" type="button">Xem thêm</button></a>
							</div>
							<br class="break">
						</div>
					<?php }?>
						
					</div>
					<br class="break">
				</div>
			</div>
			<!--content-->
			
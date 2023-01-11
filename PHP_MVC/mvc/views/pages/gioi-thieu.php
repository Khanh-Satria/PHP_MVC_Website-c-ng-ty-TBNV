<div id="breadcrumb">
	<section class="page-title divider section-typo-light bg-img-center" data-tm-bg-img="uploads/images/bg/as02.jpg" style="background-image: url(&quot;uploads/images/bg/as02.jpg&quot;);">
		<div class="container pt-20 pb-20">
			<!-- Section Content -->
			<div class="section-content">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="title text-white">Giới thiệu</h2>
						<nav role="navigation" class="breadcrumb-trail breadcrumbs">
							<div class="breadcrumbs">
								<span class="trail-item trail-begin"><a href="index.html" title="Trang chủ"><span>Trang chủ</span></a>
									<meta itemprop="position" content="1">
								</span> <span><i class="fa fa-angle-right"></i></span> <span class="trail-item "><a href="du-an-tieu-bieu-14-a8ic.html" title="Dự án tiêu biểu"><span>Dự án tiêu biểu</span></a>
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
<div class="main-content-area">
    <div id="st-body" class="container">
        <div class="row">
            <div id="st-content" class="col-sm-8">
                <div class="articlecontent">
                    <div class="detail">
                        <h1 class="modheading">Giới Thiệu</h1>
                        <?php  $mang = json_decode($data["gioithieu"]);
						 	foreach( $mang as $gioithieu ){	 ?>
                        <div class="fulltext">
                            <h4><span><?php echo $gioithieu->tieu_de; ?></span></h4>
                            <ul>
                            <?php $mang2 = explode("*",  filter_var(trim($gioithieu->noi_dung, "*")));
                           
                              foreach($mang2 as $row){
                            ?>
                            <li><?php echo $row; ?></li>
                             <?php }?>
                            </ul>
                        </div>
                    <?php }?>
                    </div>
                </div>
               
            </div>
            <!--content-->
            
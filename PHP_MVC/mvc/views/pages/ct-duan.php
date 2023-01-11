<?php  
    $ctda = json_decode($data["ctda"]);
    $image_duan= json_decode($data["image_duan"]);
?> 
<div id="breadcrumb">
<section class="page-title divider section-typo-light bg-img-center" data-tm-bg-img="uploads/images/bg/as02.jpg" style="background-image: url(&quot;uploads/images/bg/as02.jpg&quot;);">
		<div class="container pt-20 pb-20">
			<!-- Section Content -->
			<div class="section-content">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="title text-white"><?php echo $ctda->ten_du_an;?></h2>
						<nav role="navigation" class="breadcrumb-trail breadcrumbs">
							<div class="breadcrumbs">
								<span class="trail-item trail-begin"><a href="./Home" title="Trang chủ"><span>Trang chủ</span></a>
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
                 <div class="articlecontent"><div class="detail">
                    <h1 class="modheading"><?php echo $ctda->ten_du_an;?></h1>
                    <div class="fulltext">
                        <?php $mang = explode("*",  filter_var(trim($ctda->mo_ta, "*")));
                           
                              foreach($mang as $row){
                        ?>
                            <p>*<?php echo $row; ?></p>
                        <?php }?>
                    
                         <?php
                           
                            foreach($image_duan as $img){
                        ?>
                            <p> <img src="uploads/<?php echo $img->image ?>" />  </p>
                         <?php }?>
                        
                   
                    </div>

                <hr /><h4>Bài viết xem thêm</h4><ul>		
                    <li><a href="xay-dung-he-thong-cap-cho-hd-bank-35-a8id.html">Xây dựng hệ thống Cabling DC HD-Bank</a></li>
	            </ul>
            </div>
        </div>                          
    </div>
    <!--content-->
    
<div id="breadcrumb">
<section class="page-title divider section-typo-light bg-img-center" data-tm-bg-img="uploads/images/bg/as02.jpg" style="background-image: url(&quot;uploads/images/bg/as02.jpg&quot;);">
        <div class="container pt-20 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white">Tin tức</h2>
                        <nav role="navigation" class="breadcrumb-trail breadcrumbs">
                            <div class="breadcrumbs">
                                <span class="trail-item trail-begin"><a href="index.php" title="Trang chủ"><span>Trang chủ</span></a>
                                    <meta itemprop="position" content="1">
                                </span> <span><i class="fa fa-angle-right"></i></span> <span class="trail-item "><a href="./TinTuc/" title="Dịch vụ & Giải pháp"><span>Tin tức</span></a>
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
                    <h1 class="modheading">Tin tức</h1>
                    <br class="break" />
                    <div class="st-article-list">
                        <?php 
                            $mang = json_decode($data["tintuc"]);
                            foreach($mang as $tintuc){
                        ?>
                        <div class="item row">
                            <div class="thumb col-sm-5">
                                <a href="./TinTuc/CTTT/<?php echo $tintuc->id;?>"><img src="uploads/<?php echo $tintuc->hinh_anh; ?>" class="imglink" alt="<?php echo $tintuc->ten_tin_tuc; ?>" /></a>
                            </div>
                            <div class="intro col-sm-7">
                                <h3><a href="./TinTuc/CTTT/<?php echo $tintuc->id;?>"><?php echo $tintuc->ten_tin_tuc; ?></a></h3>
                                <p><?php echo $tintuc->tom_tat; ?></p>
                                <br />
                                <a href="./TinTuc/CTTT/<?php echo $tintuc->id;?>"><button class="button" type="button">Xem thêm</button></a>
                            </div>
                            <br class="break" />
                        </div>
                       <?php }?> 
                    </div>
                    <br class="break" />
                </div>
            </div>
            <!--content-->
           
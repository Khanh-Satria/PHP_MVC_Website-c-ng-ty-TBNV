<div id="breadcrumb">
<section class="page-title divider section-typo-light bg-img-center" data-tm-bg-img="uploads/images/bg/as02.jpg" style="background-image: url(&quot;uploads/images/bg/as02.jpg&quot;);">
        <div class="container pt-20 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white">Dịch vụ & Giải pháp</h2>
                        <nav role="navigation" class="breadcrumb-trail breadcrumbs">
                            <div class="breadcrumbs">
                                <span class="trail-item trail-begin"><a href="index.html" title="Trang chủ"><span>Trang chủ</span></a>
                                    <meta itemprop="position" content="1">
                                </span> <span><i class="fa fa-angle-right"></i></span> <span class="trail-item "><a href="./DichVu_GiaiPhap/" title="Dịch vụ & Giải pháp"><span>Dịch vụ & Giải pháp</span></a>
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
                    <h1 class="modheading">Dịch vụ & Giải pháp</h1>
                    <div class="article-cat-list">
                        <div class="row">
                            <?php
                            $sc = 1;
                            $mang = json_decode($data["dv_gp"]);
                            foreach ($mang as $dv_gp) {
                                $sc += 1;
                            ?>
                                <div class="col-sm-4 col-xs-6>">
                                    <div class="item"><a href="./DichVu_GiaiPhap/CTDVGP/<?php echo $dv_gp->id;?>">
                                            <img src="uploads/<?php echo $dv_gp->image; ?>"
                                             alt="<?php echo $dv_gp->ten_dv_gp; ?>" class="imglink" />
                                            <h4><?php echo $dv_gp->ten_dv_gp; ?></h4>
                                        </a></div>
                                </div>
                                <?php
                                if ($sc == 4) {
                                ?>
                                    <br class="break">

                            <?php $sc = 1;
                                }
                            } ?>
                        </div>
                    </div>
                    <br class="break" />
                    <div class="st-article-list">

                    </div>
                    <br class="break" />
                </div>
            </div>
            <!--content-->
            
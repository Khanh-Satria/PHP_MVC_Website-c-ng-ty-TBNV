<div id="breadcrumb">
<section class="page-title divider section-typo-light bg-img-center" data-tm-bg-img="uploads/images/bg/as02.jpg" style="background-image: url(&quot;uploads/images/bg/as02.jpg&quot;);">
    <div class="container pt-20 pb-20">
        <!-- Section Content -->
        <div class="section-content">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="title text-white">Dự án tiêu biểu</h2>
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
<div class="main-content-area">
    <div id="st-body" class="container">
        <div class="row">
            <div id="st-content" class="col-sm-8">
                <div class="contactcontent">
                    <h1 class="modheading">Thông tin liên hệ</h1>
                    <?php
                    $lienhe = json_decode($data["lienhe"]);
                    ?>
                    <h3><?php echo $lienhe->ten_cty; ?></h3>
                    <table class="siteForm" style="font-size: 20px;">
                        <tr>
                            <td class="label"><img src="./images/contact/address.png" boder="0" /></td>
                            <td><?php echo $lienhe->dia_chi; ?></td>
                        </tr>
                        <tr>
                            <td class="label"><img src="./images/contact/website.png" boder="0" /></td>
                            <td><?php echo $lienhe->website; ?></td>
                        </tr>
                        <tr>
                            <td class="label"><img src="./images/contact/email.png" boder="0" /> </td>
                            <td><?php echo $lienhe->gmail; ?></td>
                        </tr>
                        <tr>
                            <td class="label"><img src="./images/contact/tel.png" boder="0" /></td>
                            <td><?php echo $lienhe->sdt1; ?></td>
                        </tr>
                        <tr>
                            <td class="label"><img src="./images/contact/mobile.png" boder="0" /></td>
                            <td><?php echo $lienhe->sdt2; ?></td>
                        </tr>
                        <tr>
                            <td class="label"></td>
                            <td></td>
                        </tr>
                    </table>






                    <br />
                    
                    <?php echo $lienhe->gg_map;?>
                    <input type="hidden" name="t" value="send" />
                    <input type="hidden" name="id" value="1" />
                    <input type="hidden" name="31d15b2a7c18e0bc1d962cd8cf911a65" value="1" />
                    </form>
                </div>
            </div>
            <!--content-->
            
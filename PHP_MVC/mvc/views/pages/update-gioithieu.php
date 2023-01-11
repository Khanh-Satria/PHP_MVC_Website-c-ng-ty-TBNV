<div id="breadcrumb">
    <section class="page-title divider section-typo-light bg-img-center" data-tm-bg-img="uploads/images/bg/as02.jpg" style="background-image: url(&quot;uploads/images/bg/as02.jpg&quot;);">
        <div class="container pt-20 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white">Cập nhật liên hệ</h2>
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
            <div class="container">
                <h2>Giới thiệu về công ty</h2>
                <p>In this example, we use <code>.was-validated</code> to indicate what's missing before submitting the form:</p>
                <form action="./GioiThieu/Update/" method="post" class="was-validated" role="form">
                    <div class="form-group">
                        <?php $mang = json_decode($data["gioithieu"]);
                        foreach ($mang as $gioithieu) {  ?>
                            <div class="fulltext">
                                <h4><span><?php echo $gioithieu->tieu_de; ?></span></h4>
                                <textarea name="txtNoiDung<?php echo $gioithieu->id;?>" rows="8" class="form-control" id="uname" placeholder="Google Map" required>
                                           <?php echo $gioithieu->noi_dung; ?>
                                            </textarea>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        <?php } ?>


                    </div>
                    <button name="btnUpdate" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>


            <!--content-->
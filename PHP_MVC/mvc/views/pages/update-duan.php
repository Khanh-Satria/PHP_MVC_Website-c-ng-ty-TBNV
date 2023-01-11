<div id="breadcrumb">
    <section class="page-title divider section-typo-light bg-img-center" data-tm-bg-img="uploads/images/bg/as02.jpg" style="background-image: url(&quot;uploads/images/bg/as02.jpg&quot;);">
        <div class="container pt-20 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white">Cập nhật dự án</h2>
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
                <h2>Cập nhật dự án</h2>
                <?php $duan = json_decode($data["du_an"]);
                $image_duan = json_decode($data["image_duan"]);
                ?>
                <form action="./Home/XuLyUpdate/<?php echo $duan->id?>" class="was-validated" method="POST" role="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Tên dự án:</label>
                        <input name="txtTen_du_an" type="text" class="form-control" placeholder="Tên dự án" required value="<?php echo $duan->ten_du_an ?>">
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback"></div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname"><b> Nội dung: </b></label>
                        <textarea name="txtMo_ta" rows="8" class="form-control" id="uname" placeholder="Nội dung..." required><?php echo $duan->mo_ta; ?></textarea>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">Hình dự án:</label>
                        <input type="file" class="form-control" name="image" id="uname" >

                        <div class="col-md-3">
                        <img src="./uploads/<?php echo $duan->image ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="uname">Hình chi tiết:</label>
                        <input type="file" class="form-control" name="images[]" id="uname" placeholder="Enter username" multiple="multiple">
                        <div class="row">
                            <?php foreach ($image_duan as $image) { ?>
                                <div class="col-md-3">
                                    <div class="thumbnail">
                                        <a href="#" target="_blank">
                                            <img class="img-thumbnail" src="./uploads/<?php echo $image->image; ?>">
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnUpdate">Submit</button>
                </form>
            </div>


            <!--content-->
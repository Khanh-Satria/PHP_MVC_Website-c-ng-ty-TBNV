<div id="breadcrumb">
    <section class="page-title divider section-typo-light bg-img-center" data-tm-bg-img="uploads/images/bg/as02.jpg" style="background-image: url(&quot;uploads/images/bg/as02.jpg&quot;);">
        <div class="container pt-20 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white">Sửa chi tiết dịch vụ & giải pháp </h2>
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
                <h2>Sửa tin tức</h2>
                <p>In this example, we use <code>.was-validated</code> to indicate what's missing before submitting the form:</p>
                <?php $ctdvgp = json_decode($data["ctdvgp"])?>
                <form action="./DichVu_GiaiPhap/UpdateCT/<?php echo $ctdvgp->id;?>" method="post" class="was-validated" role="form" enctype="multipart/form-data" name="kk">
                    <div class="form-group">
                        <label>Tên chi tiết dịch vụ giải pháp:</label>
                        <input name="txtTenCTDVGP" type="text" class="form-control" placeholder="Tên chi tiết dịch vụ giải pháp" value="<?php echo $ctdvgp->ten_ct_dvgp;?>" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">Tóm tắt:</label>
                        <textarea name="txtTomTat" rows="8" class="form-control" id="uname" placeholder="Nội dung..." required><?php echo $ctdvgp->tom_tat;?></textarea>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">Nội dung:</label>
                        <textarea name="txtMoTa" rows="8" class="form-control" id="uname" placeholder="Nội dung..." required><?php echo $ctdvgp->mo_ta;?></textarea>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">Hình dịch vụ và giải pháp:</label>
                        <input type="file" class="form-control" name="image" id="uname" placeholder="Enter username">
                        <div class="col-md-3">
                        <img src="./uploads/<?php echo $ctdvgp->hinh_anh ?>">
                        </div>
                    </div>
                    <button name="btnUpdate" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>


            <!--content-->
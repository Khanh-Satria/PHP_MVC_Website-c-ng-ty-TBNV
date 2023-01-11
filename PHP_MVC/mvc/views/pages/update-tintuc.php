<div id="breadcrumb">
    <section class="page-title divider section-typo-light bg-img-center" data-tm-bg-img="uploads/images/bg/as02.jpg" style="background-image: url(&quot;uploads/images/bg/as02.jpg&quot;);">
        <div class="container pt-20 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white">Thêm dự án</h2>
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
                <?php $tintuc = json_decode($data["tin_tuc"]) ?>
                <form action="./TinTuc/Update/<?php echo $tintuc->id;?>" method="post" class="was-validated" role="form" enctype="multipart/form-data" name="kk">
                    <div class="form-group">
                        <label>Tên tin tức:</label>
                        <input name="txtTenTinTuc" type="text" class="form-control" placeholder="Tên dự án" value="<?php echo $tintuc->ten_tin_tuc;?>" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">Tóm tắt:</label>
                        <textarea name="txtTomTat" rows="8" class="form-control" id="uname" placeholder="Nội dung..." required><?php echo $tintuc->tom_tat;?></textarea>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">Nội dung:</label>
                        <textarea name="txtMoTa" rows="8" class="form-control" id="uname" placeholder="Nội dung..." required><?php echo $tintuc->mo_ta;?></textarea>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">Hình tin tức:</label>
                        <input type="file" class="form-control" name="image" id="uname" placeholder="Enter username" >
                        <div class="col-md-3">
                        <img src="./uploads/<?php echo $tintuc->hinh_anh ?>">
                        </div>
                    </div>
                    <button name="btnUpdate" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>


            <!--content-->
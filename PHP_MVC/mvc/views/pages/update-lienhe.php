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
                <h2>Thông tin liên hệ</h2>
                <p>In this example, we use <code>.was-validated</code> to indicate what's missing before submitting the form:</p>
                <?php $lienhe = json_decode($data["lien_he"]);
                ?>
                <form action="./LienHe/Update/" method="post" class="was-validated" role="form" >
                    <div class="form-group">
                        <label>Tên công ty:</label>
                        <input name="txtTenCT" class="form-control" placeholder="Tên công ty" value="<?php echo $lienhe->ten_cty;?>" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">Địa chỉ:</label>
                        <input name="txtDiaChi"  class="form-control"  placeholder="Địa chỉ" value="<?php echo $lienhe->dia_chi;?>" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">Nhúng google map:</label>
                        <textarea name="txtGGM" rows="8" class="form-control" id="uname" placeholder="Google Map" required><?php echo $lienhe->gg_map;?></textarea>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">Website:</label>
                        <input name="txtWeb" class="form-control" placeholder="Địa chỉ website" value="<?php echo $lienhe->website;?>" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">Gmail:</label>
                        <input name="txtGmail" class="form-control" placeholder="Gmail công ty" value="<?php echo $lienhe->gmail;?>" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">Số điện thoại 1:</label>
                        <input name="txtSdt1" class="form-control" placeholder="Số điện thoại 1" value="<?php echo $lienhe->sdt1;?>" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">Số điện thoại 2:</label>
                        <input name="txtSdt2"  class="form-control" placeholder="Số điện thoại 2" value="<?php echo $lienhe->sdt2;?>" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <button name="btnUpdate" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>


            <!--content-->
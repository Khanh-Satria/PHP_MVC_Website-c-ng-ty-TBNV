<div id="breadcrumb">
    <section class="page-title divider section-typo-light bg-img-center" data-tm-bg-img="uploads/images/bg/as02.jpg" style="background-image: url(&quot;uploads/images/bg/as02.jpg&quot;);">
        <div class="container pt-20 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white">Sửa người dùng</h2>
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
                <h2>Sửa người dùng</h2>
                <p>In this example, we use <code>.was-validated</code> to indicate what's missing before submitting the form:</p>
                <?php $user = json_decode($data["user"]);?>
                <form action="./NguoiDung/Update/<?php echo $user->id?>" method="post" class="was-validated" role="form" name="kk">
                    <div class="form-group">
                        <label>Tên thuyền viên:</label>
                        <input name="txtTen" type="text" class="form-control" value="<?php echo $user->ho_ten; ?>" placeholder="Tên thuyền viên" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label>Tài khoản:</label>
                        <input name="txtTaiKhoan" type="text" class="form-control" value="<?php echo $user->tai_khoan; ?>" placeholder="Tài khoản" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group">
                    <label>Mật khẩu:</label>
                        <input name="txtMatKhau" type="text" class="form-control" value="<?php echo $user->mat_khau; ?>" placeholder="Mật Khẩu" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="sel1">Chức vụ:</label>
                        <select class="form-control" name="slQuyen">
                            <?php $mang = json_decode($data["quyen"]);
                            foreach ($mang as $quyen) {
                            ?>
                            <option value="<?php echo $quyen->id; ?>" <?php echo ($quyen->id == $data["id_q"])?"selected":""; ?>> <?php echo $quyen->ten_quyen; ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <button name="btnUpdate" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <!--content-->
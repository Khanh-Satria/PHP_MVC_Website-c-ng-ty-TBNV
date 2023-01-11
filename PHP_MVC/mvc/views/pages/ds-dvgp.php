<div id="breadcrumb">
    <section class="page-title divider section-typo-light bg-img-center" data-tm-bg-img="uploads/images/bg/as02.jpg" style="background-image: url(&quot;uploads/images/bg/as02.jpg&quot;);">
        <div class="container pt-20 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white">Quản lý dự án</h2>
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
                <div class="articlecontent">
                    <h1 class="modheading">Danh sách dịch vụ & giải pháp</h1>
                    <br class="break">

                    <div class="item row">
                        <div class="intro col-sm-7">
                           <a href="./DichVu_GiaiPhap/AddCT/<?php echo $data["ma_dv_gp"]?>/"> <button class="btn btn-primary" type="button">Thêm dự giải pháp</button></a>
                        </div>
                    </div>

                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Tên dự án</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $mang = json_decode($data["ct_dv_gp"]);
                    foreach ($mang as $ct_dv_gp) {
                    ?>
                        <tr>
                            <td><img width="100" height="100" src="uploads/<?php echo $ct_dv_gp->hinh_anh; ?>" </td>
                            <td>
                                <p><a href="./DichVu_GiaiPhap/DanhSach/<?php echo $ct_dv_gp->id; ?>"><?php echo $ct_dv_gp->ten_ct_dvgp; ?></a></p>
                            </td>
                            <td><a href="./DichVu_GiaiPhap/UpdateCT/<?php echo $ct_dv_gp->id?>"><button class="btn btn-success">Sửa</button></a>&emsp;<a href="./DichVu_GiaiPhap/DeleteCT/<?php echo $ct_dv_gp->id?>"><button class="btn btn-danger">Xóa</button></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <!--content-->
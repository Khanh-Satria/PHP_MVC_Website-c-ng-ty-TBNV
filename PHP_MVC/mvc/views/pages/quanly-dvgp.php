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
                    <h1 class="modheading">Danh sách dự án</h1>
                    <br class="break">

                    <div class="item row">
                        <div class="intro col-sm-7">
                           <a href="./DichVu_GiaiPhap/Add/"> <button class="btn btn-primary" type="button">Thêm dự án mới</button></a>
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
                    <?php $mang = json_decode($data["dvgp"]);
                    foreach ($mang as $dvgp) {
                    ?>
                        <tr>
                            <td><img width="100" height="100" src="uploads/<?php echo $dvgp->image; ?>" </td>
                            <td>
                                <p><a href="./DichVu_GiaiPhap/DanhSach/<?php echo $dvgp->id; ?>"><?php echo $dvgp->ten_dv_gp; ?></a></p>
                            </td>
                            <td><a href="./DichVu_GiaiPhap/Update/<?php echo $dvgp->id?>"><button class="btn btn-success">Sửa</button></a>&emsp;<a href="./DichVu_GiaiPhap/Delete/<?php echo $dvgp->id?>"><button class="btn btn-danger">Xóa</button></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <!--content-->
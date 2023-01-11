<div id="breadcrumb">
    <section class="page-title divider section-typo-light bg-img-center" data-tm-bg-img="uploads/images/bg/as02.jpg" style="background-image: url(&quot;uploads/images/bg/as02.jpg&quot;);">
        <div class="container pt-20 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white">Quản lý tin tức</h2>
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
                    <h1 class="modheading">Danh sách tin tức</h1>
                    <br class="break">

                    <div class="item row">
                        <div class="intro col-sm-7">
                           <a href="./TinTuc/Add/"> <button class="btn btn-primary" type="button">Thêm tin tức mới</button></a>
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
                    <?php $mang = json_decode($data["tin_tuc"]);
                    foreach ($mang as $tin_tuc) {
                    ?>
                        <tr>
                            <td><img width="100" height="100" src="uploads/<?php echo $tin_tuc->hinh_anh; ?>" </td>
                            <td>
                                <p><?php echo $tin_tuc->ten_tin_tuc; ?></p>
                            </td>
                            <td><a href="./TinTuc/Update/<?php echo $tin_tuc->id; ?>"><button class="btn btn-success">Sửa</button></a>&emsp;<a href="./TinTuc/Delete/<?php echo $tin_tuc->id; ?>"><button class="btn btn-danger">Xóa</button></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <!--content-->
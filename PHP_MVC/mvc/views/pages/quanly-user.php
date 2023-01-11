<div id="breadcrumb">
    <section class="page-title divider section-typo-light bg-img-center" data-tm-bg-img="uploads/images/bg/as02.jpg" style="background-image: url(&quot;uploads/images/bg/as02.jpg&quot;);">
        <div class="container pt-20 pb-20">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white">Quản lý thuyền viên</h2>
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
                    <h1 class="modheading">Danh sách thuyền viên</h1>
                    <br class="break">

                    <div class="item row">
                        <div class="intro col-sm-7">
                           <a href="./NguoiDung/Add/"> <button class="btn btn-primary" type="button">Thêm thuyền viên</button></a>
                        </div>
                    </div>

                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Tên thuyền viên</th>
                        <th>Vai trò</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $mang = json_decode($data["user"]);
                    foreach ($mang as $user) {
                    ?>
                        <tr>
                            <td><p><?php echo $user->ho_ten; ?></p> </td>
                            <td>
                                <b class="text-primary"><?php echo $user->tq ?></b>
                            </td>
                            <?php if($user->idq == 2){?>
                            <td><a href="./NguoiDung/Update/<?php echo $user->id?>"><button class="btn btn-success">Sửa</button>
                            </a>&emsp;<a href="./NguoiDung/Delete/<?php echo $user->id?>"><button class="btn btn-danger">Xóa</button></a></td>
                            <?php }else{ echo "<td></td>"; }?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <!--content-->
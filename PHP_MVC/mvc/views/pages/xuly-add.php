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
                <h2>Thêm dự án</h2>
                <p>In this example, we use <code>.was-validated</code> to indicate what's missing before submitting the form:</p>

                <form action="./Home/XuLyAdd/" method="post" class="was-validated" role="form" enctype="multipart/form-data" name="kk">
                    <div class="form-group">
                        <label>Tên dự án:</label>
                        <input name="txtTen_du_an" type="text" class="form-control" placeholder="Tên dự án" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">Nội dung:</label>
                        <textarea name="txtMo_ta" rows="8" class="form-control" id="uname" placeholder="Nội dung..." required></textarea>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">Hình dự án:</label>
                        <input type="file" class="form-control" name="image" id="uname" placeholder="Enter username" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="uname">Hình chi tiết:</label>
                        <input type="file" class="form-control" name="images[]" id="uname" placeholder="Enter username" multiple="multiple" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <button name="btnAdd" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>


            <!--content-->
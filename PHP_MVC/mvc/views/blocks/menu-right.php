<div id="st-right" class="col-sm-4" style="font-size: 22px;">
    <div class="block">
        <div class="b-inner">
            <div class="b-title">
                <h4>Dịch vụ &amp; Giải pháp</h4>
            </div>
            <div class="b-content">
                <div class="widget widget_nav_menu">
                    <ul class="b-articles" >
                        <?php
                        $mang = json_decode($data["dvgpmoi"]);
                        foreach ($mang as $dvgpmoi) {
                        ?>
                            <li class="menu-item menu-item-type-post_type menu-item-object-services">
                                <a href="./DichVu_GiaiPhap/XemDVGP/<?php echo $dvgpmoi->id; ?>" title="<?php echo $dvgpmoi->ten_ct_dvgp; ?>"><?php echo $dvgpmoi->ten_ct_dvgp; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="b-inner">
            <div class="b-title">
                <h4>Bài viết mới nhất</h4>
            </div>
            <div class="b-content">
                <div class="widget widget_nav_menu">
                    <ul class="b-articles">
                        <?php
                        $mang2 = json_decode($data["tintucmoi"]);
                        foreach ($mang2 as $tintucmoi) {
                        ?>
                            
                            <li class="menu-item menu-item-type-post_type menu-item-object-services">
                                <a href="./TinTuc/CTTT/<?php echo $tintucmoi->id; ?>" title="<?php echo $tintucmoi->ten_tin_tuc;?>"><?php echo $tintucmoi->ten_tin_tuc;?></a></li>
                            </li>
                        <?php } ?>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br class="break">
</div>
</div>
</div>


<!-- End Divider -->
</div>
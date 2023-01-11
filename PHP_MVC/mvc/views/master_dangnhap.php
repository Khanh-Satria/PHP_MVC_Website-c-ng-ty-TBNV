<?php
require_once "./mvc/views/blocks/header.php";
?>
</header>
<div class="main-content-area">
    <div id="st-body" class="container">
        <div class="row">
            <div id="st-content" class="col-sm-8">
                <div class="articlecontent">
                    <?php

                    require_once "./mvc/views/pages/" . $data["page"] . ".php";
                    ?>
                </div>
            </div>
        </div>
<?php 
      require_once "./mvc/views/blocks/footer.php";
?>
      
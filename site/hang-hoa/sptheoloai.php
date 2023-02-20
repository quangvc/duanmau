<?php

?>
<div class="row" style="margin-top: 20px">
<article class="col-lg-9" style="padding-right: 0;">
    <?php if (isset($_GET['id'])) { ?>
        <h3>SẢN PHẨM <?= $loai1d['ten_loai'] ?></h3>
    <?php } ?>    

    <div class="box-sp" style="margin: 20px 0; display:grid; grid-template-columns: 1fr 1fr 1fr ;grid-gap: 20px;">
        <?php foreach ($hh_theo_loai as $hhtl ) { ?>
            <div class="card" style="padding: 0px;">
                <a href="index.php?act=spct&id=<?= $hhtl['ma_hh'] ?>"><img class="card-img-top" src="../../upload/<?= $hhtl['hinh'] ?>" alt="Card image"></a>
                <div class="card-body">
                    <h4 class="card-title"><?= $hhtl['don_gia'] ?></h4>
                    <a href="index.php?act=spct&id=<?= $hhtl['ma_hh'] ?>" class="card-text text-body"><?= $hhtl['ten_hh'] ?></a>
                </div>
            </div>
        <?php } ?>    
    <!-- 1 -->    
    </div>
</article>
<aside class="col-lg-3" style="padding-right: 30px;">
    <?php
        require_once '../trang-chinh/dangnhap.php';
        require_once '../trang-chinh/danhmuc.php';
        require_once '../trang-chinh/top10yt.php';
    ?>
</aside>

</div>


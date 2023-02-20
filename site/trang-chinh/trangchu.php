<?php 
if (isset($_SESSION['user'])) {
    header ('location: index.php?act=dntc');
    die;
    }
?>
<div class="row" style="margin-top: 20px">
<article class="col-lg-9" style="padding-right: 0;">
    <?php
        require_once 'carousel.php';
        require_once '../hang-hoa/sanpham.php';
    ?>
</article>
<aside class="col-lg-3" style="padding-right: 15px;">
    <?php
        require_once 'dangnhap.php';
        require_once 'danhmuc.php';
        require_once 'top10yt.php';
    ?>
</aside>

</div>

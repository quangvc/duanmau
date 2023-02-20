<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
require_once '../../dao/pdo.php';
require_once '../../dao/binh-luan.php';

if (isset($_GET['id'])) {
    $ma_hh = $_GET['id'];
    $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh='$ma_hh'";
    pdo_execute($sql);
}

$sql = "SELECT * from binh_luan where ma_hh=$ma_hh order by ma_bl DESC";
$binh_luan = pdo_query($sql);

if (isset($_POST['guibl'])) {
    $ma_kh = $_SESSION['user']['ma_kh'];
    $noi_dung = $_POST['noidungbl'];
    $ngay_bl = date("Y-m-d H:i:s", time());
    bl_insert($noi_dung, $ma_hh, $ma_kh, $ngay_bl);
    header("location: $_SERVER[HTTP_REFERER]");
}
?>
<div class="row" style="margin-top: 20px">
<article class="col-lg-9" style="padding-right: 0;">
    <div class="card" style="margin: 20px 0; padding-left: 20px;">
        <img src="../../upload/<?= $hh1d['hinh'] ?>" alt="" width="50%" style="padding: 20px 0; margin: auto;">
    <ul>
        <li>MÃ HÀNG HOÁ: <?= $hh1d['ma_hh'] ?></li>
        <li>TÊN HÀNG HOÁ: <?= $hh1d['ten_hh'] ?></li>
        <li>ĐƠN GIÁ: <?= $hh1d['don_gia'] ?></li>
        <li>GIẢM GIÁ: <?= $hh1d['giam_gia'] ?></li>
    </ul>
    <p><?= $hh1d['mo_ta'] ?></p>
    </div>

    <div class="card" style="margin: 20px 0">
        <div class="card-header" style="border-bottom: 0" id="binhluan">BÌNH LUẬN</div>
        <table style="margin-left: 40px;">
            <?php foreach ($binh_luan as $bl) { ?>            
                <tr>
                    <td style="width: 50%;"><?= $bl['noi_dung'] ?></td>
                    <td style="width: 30%;"><?= $bl['ma_kh'] ?></td>
                    <td style="width: 20%;"><?= $bl['ngay_bl'] ?></td>
                </tr>            
            <?php } ?>
        </table> 
        <form class="card-footer" style="border-top: 0" action="" method="post" >
            <?php
            if (isset($_SESSION['user'])) {
                echo '            
            <input type="text" name="noidungbl" style="width: 90%"> 
            <button type="submit" name="guibl" style="background-color: #888; color: white; border-radius: 5px; border: none; padding: 5px 20px">Gửi</button>
            '; } else { echo '
            <p style="color: red;">Đăng nhập để bình luận!</p>
            ';} ?>
        </form>
    </div>

    <div class="card" style="margin: 20px 0">
    <div class="card-header" style="border-bottom: 0">HÀNG CÙNG LOẠI</div>
    <div class="card-text">
        <ul class="list-group">
            <?php foreach ($hh_cung_loai as $hhcl) { ?>
                <li class="list-group-item list-group-item-action"><a href="index.php?act=spct&id=<?= $hhcl['ma_hh'] ?>" ><?= $hhcl['ten_hh'] ?></a></li>
            <?php } ?>
        </ul>
    </div>
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


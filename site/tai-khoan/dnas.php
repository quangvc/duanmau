<?php
require_once "../../dao/khach-hang.php";

if (isset($_SESSION['user'])) {
    extract($_SESSION['user']);
}
// if (isset($_GET['id'])) {
//     $ma_kh = $_GET['id'];
//     $kh1d = kh_getinfo($ma_kh);
// } 
?>
<div class="card ">
  <div class="card-header">TÀI KHOẢN</div>
    <img src="../img/khach-hang/PH18970.jpg" width="50%" alt="Card image" style="margin: auto; margin-top: 10px;">
    <p class="text-center">Văn Công Quảng</p>
<ul>
    <li><a href="index.php?act=thoat">Đăng xuất</a></li>
    <li><a href="index.php?act=dmk">Đổi mật khẩu</a></li>
    <li><a href="index.php?act=cntk">Cập nhật tài khoản</a></li>
    <?php if ($_SESSION['user']['vai_tro']==1) { ?>
        <li><a href="../../admin/">Quản trị website</a></li>        
    <?php } ?>
</ul>
</div>


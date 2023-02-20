<?php
require_once "../dao/khach-hang.php";
if (isset($_GET['id'])) {
    $ma_kh = $_GET['id'];
    kh_delete($ma_kh);
    $thongbao="Xoá thành công!";
    header('location: index.php?act=listkh'); die;
}
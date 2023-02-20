<?php
require_once "../dao/hang-hoa.php";
if (isset($_GET['id'])) {
    $ma_hh = $_GET['id'];
    hh_delete($ma_hh);
    $thongbao="Xoá thành công!";
    header('location: index.php?act=listhh'); die;
}
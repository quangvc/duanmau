<?php
require_once "../dao/binh-luan.php";
if (isset($_GET['id'])) {
    $ma_bl = $_GET['id'];
    bl_delete($ma_bl);
    $thongbao="Xoá thành công!";
    header("location: index.php?act=bl"); die;
}
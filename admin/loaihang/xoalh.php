<?php
require_once "../dao/loai.php";
if (isset($_GET['id'])) {
    $ma_loai = $_GET['id'];
    loai_delete($ma_loai);
    $thongbao="Xoá thành công!";
    header('location: index.php?act=list'); die;
}
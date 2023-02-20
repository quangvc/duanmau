<?php
require_once "pdo.php";
//xem
function bl_selectall(){
    $sql = "SELECT * FROM binh_luan order by ngay_bl DESC";
    return pdo_query($sql);
}

//them
function bl_insert($noi_dung, $ma_hh, $ma_kh, $ngay_bl){
    $sql = "INSERT INTO binh_luan(noi_dung, ma_hh, ma_kh, ngay_bl) VALUES (?,?,?,?)";
    pdo_execute($sql,$noi_dung, $ma_hh, $ma_kh, $ngay_bl);
}

//xoa
function bl_delete($ma_bl){
    $sql = "DELETE FROM binh_luan WHERE ma_bl=?";
    pdo_execute($sql,$ma_bl);
}

//lay 1 dong
function bl_getinfo($ma_bl){
    $sql = "SELECT * FROM binh_luan WHERE ma_bl=?";
    return pdo_query_one($sql,$ma_bl);
}

//sua
function bl_update($ma_bl,$noi_dung){
    $sql = "UPDATE binh_luan SET noi_dung=? WHERE ma_bl=?";
    pdo_execute($sql,$noi_dung,$ma_bl);
}

?>
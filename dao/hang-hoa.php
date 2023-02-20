<?php
require_once "pdo.php";
//xem
function hh_selectall(){
    $sql = "SELECT * FROM hang_hoa order by ten_hh";
    return pdo_query($sql);
}

//them
function hh_insert($ten_hh,$don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai){
    $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ngay_nhap, mo_ta, dac_biet, so_luot_xem, ma_loai) VALUES (?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql,$ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai);
}

//xoa
function hh_delete($ma_hh){
    $sql = "DELETE FROM hang_hoa WHERE ma_hh=?";
    pdo_execute($sql,$ma_hh);
}

//lay 1 dong
function hh_getinfo($ma_hh){
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
    return pdo_query_one($sql,$ma_hh);
}

//sua
function hh_update($ma_hh,$ten_hh,$don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai){
    $sql = "UPDATE hang_hoa SET ten_hh=?,don_gia=?, giam_gia=?, hinh=?, ngay_nhap=?, mo_ta=?, dac_biet=?, so_luot_xem=?, ma_loai=? WHERE ma_hh=?";
    pdo_execute($sql,$ten_hh,$don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai,$ma_hh);
}

?>
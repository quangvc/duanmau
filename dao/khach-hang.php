<?php
require "pdo.php";
//xem
function kh_selectall(){
    $sql = "SELECT * FROM khach_hang order by ma_kh DESC";
    return pdo_query($sql);
}

//them
function kh_insert($ma_kh,$mat_khau, $ho_ten, $kich_hoat, $hinh, $email, $vai_tro){
    $sql = "INSERT INTO khach_hang(ma_kh, mat_khau, ho_ten, kich_hoat, hinh, email, vai_tro) VALUES (?,?,?,?,?,?,?)";
    pdo_execute($sql,$ma_kh, $mat_khau, $ho_ten, $kich_hoat, $hinh, $email, $vai_tro);
}

//xoa
function kh_delete($ma_kh){
    $sql = "DELETE FROM khach_hang WHERE ma_kh=?";
    pdo_execute($sql,$ma_kh);
}

//lay 1 dong
function kh_getinfo($ma_kh){
    $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
    return pdo_query_one($sql,$ma_kh);
}

//sua
function kh_update($ma_kh,$mat_khau, $ho_ten, $kich_hoat, $hinh, $email, $vai_tro){
    $sql = "UPDATE khach_hang SET mat_khau=?, ho_ten=?, kich_hoat=?, hinh=?, email=?, vai_tro=? WHERE ma_kh=?";
    pdo_execute($sql,$mat_khau, $ho_ten, $kich_hoat, $hinh, $email, $vai_tro,$ma_kh);
}

?>
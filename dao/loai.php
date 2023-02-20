<?php
require_once "pdo.php";
//xem
function loai_selectall(){
    $sql = "SELECT * FROM loai order by ten_loai";
    return pdo_query($sql);
}

//them
function loai_insert($ten_loai){
    $sql = "INSERT INTO loai(ten_loai) VALUES (?)";
    pdo_execute($sql,$ten_loai);
}

//xoa
function loai_delete($ma_loai){
    $sql = "DELETE FROM loai WHERE ma_loai=?";
    pdo_execute($sql,$ma_loai);
}

//lay 1 dong
function loai_getinfo($ma_loai){
    $sql = "SELECT * FROM loai WHERE ma_loai=?";
    return pdo_query_one($sql,$ma_loai);
}

//sua
function loai_update($ma_loai,$ten_loai){
    $sql = "UPDATE loai SET ten_loai=? WHERE ma_loai=?";
    pdo_execute($sql,$ten_loai,$ma_loai);
}

?>
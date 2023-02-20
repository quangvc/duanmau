<?php
session_start();
require_once 'headerk.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'gt':
            require_once 'gioithieu.php';
            break;
        case 'lh':
            require_once 'lienhe.php';
            break;
        case 'gy':
            require_once 'gopy.php';
            break;
        case 'hd':
            require_once 'hoidap.php';
            break;
        case 'dntc':
            require_once '../tai-khoan/dntc.php';
            break;
        case 'cntk':
            require_once '../tai-khoan/cntk.php';
            break;
        case 'dmk':
            require_once '../tai-khoan/dmk.php';
            break;
        case 'spct':
            require_once '../../dao/pdo.php';
            require_once '../../dao/hang-hoa.php';
            if (isset($_GET['id'])) {
                $ma_hh = $_GET['id'];
                $hh1d = hh_getinfo($ma_hh);
                extract($hh1d);
                $sql = "SELECT * from hang_hoa where ma_loai=$ma_loai AND ma_hh <> $ma_hh";
                $hh_cung_loai = pdo_query($sql);                
                require_once '../hang-hoa/spct.php';  
            } else {
                require_once '../trang-chinh/trangchu.php';
            }
            break;
        case 'sptheoloai':
            require_once '../../dao/pdo.php';
            require_once '../../dao/hang-hoa.php';
            $sql = "SELECT * from hang_hoa where 1 ";
            if (isset($_POST['kyw']) && !empty($_POST['kyw'])) {
                $kyw = $_POST['kyw'];
                $sql.="and ten_hh like '%$kyw%'";
            } else {
                $kyw = '';
            }
            if (isset($_GET['id'])) {
                $ma_loai = $_GET['id'];  
                $sql.="and ma_loai=$ma_loai";              
            } else {
                $ma_loai = 0;
            }
            
            $hh_theo_loai = pdo_query($sql);
            $sql = "SELECT * from loai where ma_loai=$ma_loai";
            $loai1d = pdo_query_one($sql);
            require_once '../hang-hoa/sptheoloai.php';  
            break;
        case 'dky':
            require_once '../trang-chinh/dky.php';
            break;
        case 'qmk':
            require_once '../trang-chinh/quenmatkhau.php';
            break;
        case 'thoat':
            session_unset();
            header('location: index.php');
            break;


        default:
            require_once '../trang-chinh/trangchu.php';
            break;
    }
} else {    
    require_once '../trang-chinh/trangchu.php';
}



require_once 'footerk.php';
?>
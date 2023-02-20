<?php    

    require_once 'header.php';
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'lh':
                require_once "../dao/loai.php";
                if ($_SERVER['REQUEST_METHOD']=='POST') {
                    $ten_loai=$_POST['ten_loai'];
                    loai_insert($ten_loai);
                    $thongbao="Thêm thành công!";
                }
                
                require 'loaihang/new.php'; 
                break;
            case 'list':
                require 'loaihang/list.php'; 
                break;
            case 'sualh':                
                require 'loaihang/sualh.php'; 
                break;
            case 'xoalh':                
                require 'loaihang/xoalh.php'; 
                break;
            case 'hh':
                require_once "../dao/hang-hoa.php";
                $ngay_nhap=$so_luot_xem=$mo_ta= $giam_gia=$don_gia=$ten_hh='';
                if ($_SERVER['REQUEST_METHOD']=='POST') {                    
                    $ten_hh=$_POST['ten_hh'];
                    $don_gia=$_POST['don_gia'];
                    $giam_gia=$_POST['giam_gia'];

                    $hinh=$_FILES['hinh']['name'];
                    move_uploaded_file($_FILES['hinh']['tmp_name'],'../upload/'.$hinh);

                    $ma_loai=$_POST['ma_loai'];
                    $dac_biet=$_POST['dac_biet'];
                    $ngay_nhap=$_POST['ngay_nhap'];
                    $so_luot_xem=$_POST['so_luot_xem'];
                    $mo_ta=$_POST['mo_ta'];
                    
                    hh_insert($ten_hh,$don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai);
                    $thongbao="Thêm thành công!";
                }

                require 'hanghoa/new.php'; 
                break;
            case 'listhh':
                require 'hanghoa/listhh.php'; 
                break;
            case 'suahh':
                require 'hanghoa/suahh.php'; 
                break;
            case 'xoahh':                
                require 'hanghoa/xoahh.php'; 
                break;
            case 'kh':
                require_once "../dao/khach-hang.php";
                $ma_kh = $ho_ten = $mat_khau = $email = $hinh = $xac_nhan ='';
                if ($_SERVER['REQUEST_METHOD']=='POST') { 
                    $ma_kh = $_POST['ma_kh'];                  
                    $ho_ten = $_POST['ho_ten'];
                    $mat_khau = $_POST['mat_khau'];
                    $email = $_POST['email'];
                    $xac_nhan = $_POST['xac_nhan'];
                    $kich_hoat = $_POST['kich_hoat'];
                    $vai_tro = $_POST['vai_tro'];
                    
                    if ($mat_khau != $xac_nhan) {
                        $error['xac_nhan'] = 'Mật khẩu và xác nhận mật khẩu phải trùng khớp!';
                    }
                    $hinh=$_FILES['hinh']['name'];
                    move_uploaded_file($_FILES['hinh']['tmp_name'],'../upload/'.$hinh);

                    if (empty($error)) {
                        kh_insert($ma_kh, $mat_khau, $ho_ten, $kich_hoat, $hinh, $email, $vai_tro);  
                        $thongbao="Thêm thành công!";
                    }
                }

                require 'khachhang/new.php'; 
                break;
            case 'listkh':
                require 'khachhang/listkh.php'; 
                break;
            case 'suakh':                
                require 'khachhang/suakh.php'; 
                break;
            case 'xoakh':                
                require 'khachhang/xoakh.php'; 
                break;
            case 'bl':
                require 'binhluan/tonghop.php'; 
                break;
            case 'ctbl':
                require 'binhluan/chitiet.php'; 
                break; 
            case 'xoabl':
                require 'binhluan/xoabl.php'; 
                break;    
            case 'tk':
                require 'thongke/thongke.php'; 
                break;
            case 'bieudo':
                require 'thongke/bieudo.php'; 
                break;

            default:
                require 'home.php';
                break;
        }
    } else {
        require 'home.php'; 
    }
    require 'footer.php';

?>
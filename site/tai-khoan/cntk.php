<?php
    require_once "../../dao/khach-hang.php";
    
    if (isset($_SESSION['user'])) {
        extract($_SESSION['user']);

        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $ho_ten = $_POST['ho_ten'];
            $email = $_POST['email'];

            if ($_FILES['hinh']['size']>0) {
                $hinh=$_FILES['hinh']['name'];
                move_uploaded_file($_FILES['hinh']['tmp_name'],'../img/khach-hang'.$hinh);
            }

            kh_update($ma_kh,$mat_khau, $ho_ten, $kich_hoat, $hinh, $email, $vai_tro);
            $thongbao="Cập nhật thành công!";
            header('location: index.php?act=cntk'); die;
        }
    }
?>
<div class="row" style="margin-top: 20px">
<article class="col-lg-9" style="padding-right: 0;">    
        
    <h3 class="alert alert-danger">CẬP NHẬT TÀI KHOẢN</h3>
    
    <?php if (isset($thongbao)) { ?>
        <p class="alert alert-warning"><?= $thongbao?></p>
    <?php } ?>
    
    <div class="row">
        <div class="col-md-4" style="text-align: center;">
            <img src="../img/khach-hang/<?= $hinh ?>" width="50%" alt="Card image" style="margin-top: 10px;">
        </div>
        <form action="" method="post" enctype="multipart/form-data" class="col-md-8">
        <div class="form-group">
            <label for="taikhoan">Tên đăng nhập</label>
            <input type="text" class="form-control" value="<?= $ma_kh ?>" readonly id="taikhoan">
        </div>
    
        <div class="form-group">
            <label for="hoten">Họ và tên</label>
            <input type="text" name="ho_ten" class="form-control" value="<?= $ho_ten ?>" id="hoten">
        </div>
    
        <div class="form-group">
            <label for="email">Địa chỉ email</label>
            <input type="email" name="email" class="form-control" value="<?= $email ?>" id="email">
        </div>
    
        <div class="form-group">
            <label for="hinh">Hình</label>
            <input type="file" name="hinh" class="form-control" value="<?= $hinh ?>" id="hinh">
        </div>
        
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
    
</article>
<aside class="col-lg-3" style="padding-right: 15px;">
    <?php
        require_once 'dnas.php';
        require_once '../trang-chinh/danhmuc.php';
        require_once '../trang-chinh/top10yt.php';
    ?>
</aside>

</div>
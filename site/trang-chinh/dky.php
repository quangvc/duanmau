<div class="row" style="margin-top: 20px">
<article class="col-lg-9" style="padding-right: 0;">

    <?php
    require_once "../../dao/khach-hang.php";
    $ma_kh = $ho_ten = $mat_khau = $email = $hinh=$xac_nhan = '';
    if ($_SERVER['REQUEST_METHOD']=='POST') {                    
        $ma_kh = $_POST['ma_kh'];
        $ho_ten = $_POST['ho_ten'];
        $mat_khau = $_POST['mat_khau'];
        $email = $_POST['email'];
        $xac_nhan = $_POST['xac_nhan'];
        
        if ($mat_khau != $xac_nhan) {
            $error['xac_nhan'] = 'Mật khẩu và xác nhận mật khẩu phải trùng khớp!';
        }
        $hinh=$_FILES['hinh']['name'];
        move_uploaded_file($_FILES['hinh']['tmp_name'],'../../upload/'.$hinh);
        
        if (empty($error)) {
            kh_insert($ma_kh, $mat_khau, $ho_ten, 1, $hinh, $email, 0);
            $thongbao="Đăng ký thành công!";
        }
    }
    ?>

<h3 class="alert alert-danger">ĐĂNG KÝ THÀNH VIÊN</h3>

<?php if (isset($thongbao)) { ?>
    <p class="alert alert-warning"><?= $thongbao?></p>
<?php } ?>

<form action="" method="post" class="card-body" enctype="multipart/form-data">
    <div class="form-group">
        <label for="taikhoan">Tên đăng nhập</label>
        <input type="text" class="form-control" name="ma_kh" value="<?= $ma_kh ?>" required placeholder="" id="taikhoan">
    </div>
    <div class="form-group">
        <label for="pwd">Mật khẩu</label>
        <input type="password" name="mat_khau" value="<?= $mat_khau ?>" class="form-control" required placeholder="" id="pwd">
    </div>
    <div class="form-group">
        <label for="re-pwd">Xác nhận mật khẩu</label>
        <input type="password" class="form-control" name="xac_nhan" value="<?= $xac_nhan ?>" required placeholder="" id="re-pwd">
        <p style="color: red;"><?= $error['xac_nhan'] ?? '' ?></p>
    </div>

    <div class="form-group">
        <label for="">Họ và tên</label>
        <input type="text" name="ho_ten" value="<?= $ho_ten ?>" class="form-control" id="">
    </div>

    <div class="form-group">
        <label for="">Địa chỉ email</label>
        <input type="email" name="email" value="<?= $email ?>" required class="form-control" id="">
    </div>

    <div class="form-group">
        <label for="exampleFormControlFile1">Hình ảnh</label>
        <input type="file" name="hinh" class="form-control-file" value="<?= $hinh ?>" id="exampleFormControlFile1" style="border: 1px solid #CCCCCC; border-radius: 5px; padding: 3px 10px;">
    </div>

    <button type="submit" class="btn btn-primary">Đăng ký</button>
</form>

</article>
<aside class="col-lg-3" style="padding-right: 15px;">
    <?php
        require_once 'dangnhap.php';
        require_once 'danhmuc.php';
        require_once 'top10yt.php';
    ?>
</aside>

</div>

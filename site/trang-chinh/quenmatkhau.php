<?php
    require_once "../../dao/khach-hang.php";   

    if (isset($_POST['quenmatkhau'])) {
        $ma_kh = $_POST['ma_kh'];
        $email = $_POST['email'];

        $sql = "SELECT * from khach_hang where ma_kh='$ma_kh' and email='$email'";
        $checkemail = pdo_query_one($sql);

        if (is_array($checkemail)) {
            $thongbao = "Mật khẩu của bạn là: $checkemail[mat_khau]";
        } else {
            $thongbao = 'Thông tin bạn nhập không chính xác!';
        }
    }
?>
<div class="row" style="margin-top: 20px">
<article class="col-lg-9" style="padding-right: 0;">
    
    <h3 class="alert alert-danger">QUÊN MẬT KHẨU</h3>
    <?php if (isset($thongbao)) { ?>
        <p class="alert alert-warning"><?= $thongbao?></p>
    <?php } ?>

    <form action="" method="post" class="card-body" enctype="multipart/form-data">
        <div class="form-group">
            <label for="taikhoan">Tên đăng nhập</label>
            <input type="text" class="form-control" name="ma_kh" required id="taikhoan">
        </div>
        
        <div class="form-group">
            <label for="">Địa chỉ email</label>
            <input type="email" name="email" required class="form-control" id="">
        </div>
        <button type="submit" name="quenmatkhau" class="btn btn-secondary">Tìm lại mật khẩu</button>
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

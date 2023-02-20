<?php
require_once "../dao/khach-hang.php";

    if (isset($_GET['id'])) {
        $ma_kh = $_GET['id'];
    } 
    $kh1d = kh_getinfo($ma_kh);

if ($_SERVER['REQUEST_METHOD']=='POST') {                    
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
        kh_update($ma_kh,$mat_khau, $ho_ten, $kich_hoat, $hinh, $email, $vai_tro);
        $thongbao="Cập nhật thành công!";
        header('location: index.php?act=listkh'); die;
    }
}
?>
<h3 class="alert alert-success">CẬP NHẬT KHÁCH HÀNG</h3>

<?php if (isset($thongbao)) { ?>
        <p class="alert alert-warning"><?= $thongbao?></p>
    <?php } ?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-lg-6">
            <label for="">Mã khách hàng</label>
            <input type="text" value="<?= $ma_kh ?>" class="form-control" id="" readonly>
        </div>

        <div class="form-group col-lg-6">
            <label for="">Họ và tên</label>
            <input type="text" name="ho_ten" value="<?= $kh1d['ho_ten'] ?>" required class="form-control" id="">
        </div>

        <div class="form-group col-lg-6">
            <label for="">Mật khẩu</label>
            <input type="password" name="mat_khau" value="<?= $kh1d['mat_khau'] ?>" required class="form-control" id="">
        </div>

        <div class="form-group col-lg-6">
            <label for="">Xác nhận mật khẩu</label>
            <input type="password" name="xac_nhan" value="<?= $kh1d['mat_khau'] ?>" required class="form-control" id="">
            <p style="color: red;"><?= $error['xac_nhan'] ?? '' ?></p>
        </div>

        <div class="form-group col-lg-6">
            <label for="">Địa chỉ email</label>
            <input type="email" name="email" value="<?= $kh1d['email'] ?>" required class="form-control" id="">
        </div>

        <div class="form-group col-lg-6">
            <label for="exampleFormControlFile1">Hình ảnh</label>
            <input type="file" name="hinh" class="form-control-file" value="<?= $kh1d['hinh'] ?>" id="exampleFormControlFile1" style="border: 1px solid #CCCCCC; border-radius: 5px; padding: 3px 10px;">
        </div>

        <div class="form-group col-lg-6">
            <p>Kích hoạt?</p>
            <div class="box-active" style="border: 1px solid #CCCCCC; border-radius: 5px; padding: 3px 10px;">
                <input type="radio" name="kich_hoat" value="0" id="active">
                <label for="active" style="padding-right: 20px;">Chưa kích hoạt</label>
                <input type="radio" name="kich_hoat" value="1" checked id="normal">
                <label for="normal">Kích hoạt</label>
            </div>
        </div>

        <div class="form-group col-lg-6">
            <p>Kích hoạt?</p>
            <div class="box-role" style="border: 1px solid #CCCCCC; border-radius: 5px; padding: 3px 10px;">
                <input type="radio" name="vai_tro" value="0" id="customer">
                <label for="customer" style="padding-right: 20px;">Khách hàng</label>
                <input type="radio" name="vai_tro" value="1" checked id="staff">
                <label for="staff">Nhân viên</label>
            </div>
        </div>
        
    </div>
    

    <div class="form-group">
        <button type="submit" class="btn btn-secondary">Cập nhật</button>
        <button type="reset" class="btn btn-secondary">Nhập lại</button>
        <a href="index.php?act=listkh" class="btn btn-secondary">Danh sách</a>
    </div>
</form>

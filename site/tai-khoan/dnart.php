<?php
require_once "../../dao/khach-hang.php";

if (isset($_GET['id'])) {
    $ma_kh = $_GET['id'];
    $kh1d = kh_getinfo($ma_kh);
} 
?>

<h3 class="alert alert-danger">ĐĂNG NHẬP</h3>

<?php if (isset($thongbao)) { ?>
    <p class="alert alert-warning"><?= $thongbao?></p>
<?php } ?>

<form action="" class="card-body">
  <div class="form-group">
    <label for="taikhoan">Tên đăng nhập</label>
    <input type="text" class="form-control" placeholder="" id="taikhoan">
  </div>
  <div class="form-group">
    <label for="pwd">Mật khẩu</label>
    <input type="password" class="form-control" placeholder="" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Ghi nhớ tài khoản
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Đăng nhập</button>
</form>
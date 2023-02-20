<?php
require_once '../../dao/pdo.php';

if (isset($_POST['dangnhap'])) {
  $user = $_POST['user'];
  $pass = $_POST['pass'];

  $sql = "SELECT * from khach_hang where ma_kh='$user' and mat_khau='$pass'";
  $checkuser = pdo_query_one($sql);
  if (is_array($checkuser)) {
    $_SESSION['user'] = $checkuser;
    echo"<script> window.location.href='index.php?act=dntc'</script>";
    // header ('location: index.php?act=dntc');
  } else {
    $thongbao = 'Sai tài khoản hoặc mật khẩu!';
  }

}

?>

<div class="card ">
  <div class="card-header">TÀI KHOẢN</div>
  <form action="" method="post" class="card-body">
  <div class="form-group">
    <label for="taikhoan">Tên đăng nhập</label>
    <input type="text" name="user" class="form-control" placeholder="" id="taikhoan">
  </div>
  <div class="form-group">
    <label for="pwd">Mật khẩu</label>
    <input type="password" name="pass" class="form-control" placeholder="" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Ghi nhớ tài khoản
    </label>
  </div>
  <button type="submit" name="dangnhap" class="btn btn-primary">Đăng nhập</button>
</form>
<ul>
    <li><a href="index.php?act=qmk">Quên mật khẩu</a></li>
    <li><a href="index.php?act=dky">Đăng ký thành viên</a></li>
</ul>
</div>
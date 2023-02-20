<h3 class="alert alert-danger">ĐỔI MẬT KHẨU</h3>

<?php if (isset($thongbao)) { ?>
    <p class="alert alert-warning"><?= $thongbao?></p>
<?php } ?>

<form action="" >
    <div class="form-group">
        <label for="taikhoan">Tên đăng nhập</label>
        <input type="text" class="form-control" id="taikhoan">
    </div>

    <div class="form-group">
        <label for="pwd">Mật khẩu cũ</label>
        <input type="password" class="form-control" placeholder="" id="pwd">
    </div>

    <div class="form-group">
        <label for="pwd-n">Mật khẩu mới</label>
        <input type="password" class="form-control" placeholder="" id="pwd-n">
    </div>

    <div class="form-group">
        <label for="pwd-xn">Xác nhận mật khẩu mới</label>
        <input type="password" class="form-control" placeholder="" id="pwd-xn">
    </div>

    <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
</form>

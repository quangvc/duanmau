<div class="row" style="margin-top: 20px">
<article class="col-lg-9" style="padding-right: 0;">
    <?php
    require_once "../../dao/khach-hang.php";

    if (isset($_SESSION['user'])) {
        extract($_SESSION['user']);
    }
    ?>

    <h3 class="alert alert-danger">ĐĂNG NHẬP</h3>

    <?php if (isset($thongbao)) { ?>
        <p class="alert alert-warning"><?= $thongbao?></p>
    <?php } ?>

    <form action="" class="card-body">
        <div class="form-group">
            <label for="taikhoan">Tên đăng nhập</label>
            <input type="text" value="<?= $ma_kh ?>" class="form-control" placeholder="" id="taikhoan">
        </div>
        <div class="form-group">
            <label for="pwd">Mật khẩu</label>
            <input type="password" value="<?= $mat_khau ?>" class="form-control" placeholder="" id="pwd">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox"> Ghi nhớ tài khoản
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Đăng nhập</button>
    </form>

</article>
<aside class="col-lg-3" style="padding-right: 15px;">
    <?php
        require_once 'dnas.php';
        require_once '../trang-chinh/danhmuc.php';
        require_once '../trang-chinh/top10yt.php';
    ?>
</aside>

</div>
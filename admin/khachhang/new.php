
<h3 class="alert alert-success">THÊM MỚI KHÁCH HÀNG</h3>

<?php if (isset($thongbao)) { ?>
        <p class="alert alert-warning"><?= $thongbao?></p>
    <?php } ?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-lg-6">
            <label for="">Mã khách hàng</label>
            <input type="text" name="ma_kh" value="<?= $ma_kh ?>" required class="form-control" id="" >
        </div>

        <div class="form-group col-lg-6">
            <label for="">Họ và tên</label>
            <input type="text" name="ho_ten" value="<?= $ho_ten ?>" required class="form-control" id="">
        </div>

        <div class="form-group col-lg-6">
            <label for="">Mật khẩu</label>
            <input type="password" name="mat_khau" value="<?= $mat_khau ?>" required class="form-control" id="">
        </div>

        <div class="form-group col-lg-6">
            <label for="">Xác nhận mật khẩu</label>
            <input type="password" name="xac_nhan" value="<?= $xac_nhan ?>" required class="form-control" id="">
            <p style="color: red;"><?= $error['xac_nhan'] ?? '' ?></p>
        </div>

        <div class="form-group col-lg-6">
            <label for="">Địa chỉ email</label>
            <input type="email" name="email" value="<?= $email ?>" required class="form-control" id="">
        </div>

        <div class="form-group col-lg-6">
            <label for="exampleFormControlFile1">Hình ảnh</label>
            <input type="file" name="hinh" class="form-control-file" value="<?= $hinh ?>" id="exampleFormControlFile1" style="border: 1px solid #CCCCCC; border-radius: 5px; padding: 3px 10px;">
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
        <button type="submit" class="btn btn-secondary">Thêm mới</button>
        <button type="reset" class="btn btn-secondary">Nhập lại</button>
        <a href="index.php?act=listkh" class="btn btn-secondary">Danh sách</a>
    </div>
</form>

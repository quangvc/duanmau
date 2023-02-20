<?php 
    require_once "../dao/hang-hoa.php";
    if (isset($_GET['id'])) {
        $ma_hh = $_GET['id'];
    } 
    $hh1d = hh_getinfo($ma_hh);

    require_once "../dao/loai.php";
    $loaihang = loai_selectall();

    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $ten_hh=$_POST['ten_hh'];
        $don_gia = $_POST['don_gia']; 
        $giam_gia = $_POST['giam_gia'];
        $hinh = $_POST['hinh'];
        $ngay_nhap = $_POST['ngay_nhap'];
        $mo_ta = $_POST['mo_ta'];
        $dac_biet = $_POST['dac_biet'];
        $so_luot_xem = $_POST['so_luot_xem'];
        $ma_loai = $_POST['ma_loai'];
        hh_update($ma_hh,$ten_hh,$don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai);
        $thongbao="Cập nhật thành công!";
        header('location: index.php?act=listhh'); die;
    }
?>

<h3 class="alert alert-success">CẬP NHẬT HÀNG HOÁ</h3>

<?php if (isset($thongbao)) { ?>
        <p class="alert alert-warning"><?= $thongbao?></p>
    <?php } ?>


<form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-lg-4">
            <label for="">Mã hàng hoá</label>
            <input type="text" value="<?= $hh1d['ma_hh'] ?>" class="form-control" id="" readonly>
        </div>

        <div class="form-group col-lg-4">
            <label for="">Tên hàng hoá</label>
            <input type="text" name="ten_hh" value="<?= $hh1d['ten_hh'] ?>" required class="form-control" id="">
        </div>

        <div class="form-group col-lg-4">
            <label for="">Đơn giá</label>
            <input type="number" name="don_gia" value="<?= $hh1d['don_gia'] ?>" required class="form-control" id="">
        </div>

        <div class="form-group col-lg-4">
            <label for="">Giảm giá</label>
            <input type="text" name="giam_gia" value="<?= $hh1d['giam_gia'] ?>" class="form-control" id="" placeholder="0">
        </div>

        <div class="form-group col-lg-4">
            <label for="exampleFormControlFile1">Hình ảnh</label>
            <input type="file" name="hinh" value="<?= $hh1d['hinh'] ?>" class="form-control-file" id="exampleFormControlFile1" style="border: 1px solid #CCCCCC; border-radius: 5px; padding: 3px 10px;">
        </div>

        <div class="col-lg-4">
            <label for="">Loại</label>
            <select class="form-control" name="ma_loai">
                <?php foreach ($loaihang as $lh ) { ?>
                    <option <?= $lh['ma_loai']==$hh1d['ma_loai'] ? 'selected' : '' ?> value="<?= $lh['ma_loai'] ?>"><?= $lh['ten_loai'] ?></option>
                <?php } ?> 
            </select>
        </div>

        <div class="form-group col-lg-4">
            <p>Hàng đặc biệt?</p>
            <div class="box-special" style="border: 1px solid #CCCCCC; border-radius: 5px; padding: 3px 10px;">
                <input type="radio" name="dac_biet" value="1" id="special">
                <label for="special">Đặc biệt</label>
                <input type="radio" name="dac_biet" value="0" checked id="normal">
                <label for="normal">Bình thường</label>
            </div>
        </div>

        <div class="form-group col-lg-4">
            <label for="">Ngày nhập</label>
            <input type="date" value="<?= $hh1d['ngay_nhap'] ?>" name="ngay_nhap" class="form-control" id="">
        </div>

        <div class="form-group col-lg-4">
            <label for="">Số lượt xem</label>
            <input type="number" value="<?= $hh1d['so_luot_xem'] ?>" name="so_luot_xem" value="<?= $loaihang['ten_loai'] ?>" readonly class="form-control" id="">
        </div>
    </div>
    <div class="form-group">
        <label for="comment">Mô tả</label>
        <textarea class="form-control" rows="5" name="mo_ta" id="comment"><?= $hh1d['mo_ta'] ?></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-secondary">Cập nhật</button>
        <button type="reset" class="btn btn-secondary">Nhập lại</button>
        <a href="index.php?act=listhh" class="btn btn-secondary">Danh sách</a>
    </div>
</form>

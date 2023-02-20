<?php 
    require_once "../dao/loai.php";
    $loaihang = loai_selectall();
?>
<h3 class="alert alert-success">THÊM MỚI HÀNG HOÁ</h3>

<?php if (isset($thongbao)) { ?>
        <p class="alert alert-warning"><?= $thongbao?></p>
    <?php } ?>


<form action="index.php?act=hh" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-lg-4">
            <label for="">Mã hàng hoá</label>
            <input type="text" value="auto number" class="form-control" id="" readonly>
        </div>

        <div class="form-group col-lg-4">
            <label for="">Tên hàng hoá</label>
            <input type="text" name="ten_hh" value="<?= $ten_hh ?>" required class="form-control" id="">
        </div>

        <div class="form-group col-lg-4">
            <label for="">Đơn giá</label>
            <input type="number" name="don_gia" value="<?= $don_gia ?>" required class="form-control" id="">
        </div>

        <div class="form-group col-lg-4">
            <label for="">Giảm giá</label>
            <input type="text" name="giam_gia" value="<?= $giam_gia ?>" class="form-control" id="" placeholder="0">
        </div>

        <div class="form-group col-lg-4">
            <label for="exampleFormControlFile1">Hình ảnh</label>
            <input type="file" name="hinh" class="form-control-file" id="exampleFormControlFile1" style="border: 1px solid #CCCCCC; border-radius: 5px; padding: 3px 10px;">
        </div>

        <div class="col-lg-4">
            <label for="">Loại</label>
            <select class="form-control" name="ma_loai">
                <?php foreach ($loaihang as $lh ) { ?>
                    <option value="<?= $lh['ma_loai'] ?>"><?= $lh['ten_loai'] ?></option>
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
            <input type="date" name="ngay_nhap" value="<?= $ngay_nhap ?>" class="form-control" id="">
        </div>

        <div class="form-group col-lg-4">
            <label for="">Số lượt xem</label>
            <input type="number" name="so_luot_xem" value="0" readonly class="form-control" id="">
        </div>
    </div>
    <div class="form-group">
        <label for="comment">Mô tả</label>
        <textarea class="form-control" rows="5" name="mo_ta" id="comment"><?= $mo_ta ?></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-secondary">Thêm mới</button>
        <button type="reset" class="btn btn-secondary">Nhập lại</button>
        <a href="index.php?act=listhh" class="btn btn-secondary">Danh sách</a>
    </div>
</form>

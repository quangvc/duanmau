<?php 
    require_once "../dao/loai.php";
    
    if (isset($_GET['id'])) {
        $ma_loai = $_GET['id'];
    } 
    $loai1d = loai_getinfo($ma_loai);
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $ten_loai=$_POST['ten_loai'];
        loai_update($ma_loai,$ten_loai);
        $thongbao="Cập nhật thành công!";
        header('location: index.php?act=list'); die;
    }

?>
<h3 class="alert alert-success">CẬP NHẬT LOẠI HÀNG</h3>
    
    <?php if (isset($thongbao)) { ?>
        <p class="alert alert-warning"><?= $thongbao?></p>
    <?php } ?>
    
    <form action="" method="post">
        <div class="form-group">
            <label for="">Mã loại</label>
            <input type="text" value="<?= $loai1d['ma_loai'] ?>" class="form-control" id="" readonly>
        </div>
        
        <div class="form-group">
            <label for="">Tên loại</label>
            <input type="text" name="ten_loai" value="<?= $loai1d['ten_loai'] ?>" class="form-control" id="" required>       
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-secondary">Cập nhật</button>
            <button type="reset" class="btn btn-secondary">Nhập lại</button>
            <a href="index.php?act=list" class="btn btn-secondary">Danh sách</a>
        </div>
    </form>
    

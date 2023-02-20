    <h3 class="alert alert-success">THÊM MỚI LOẠI HÀNG</h3>
    
    <?php if (isset($thongbao)) { ?>
        <p class="alert alert-warning"><?= $thongbao?></p>
    <?php } ?>
    
    <form action="index.php?act=lh" method="post">
        <div class="form-group">
            <label for="">Mã loại</label>
            <input type="text" value="auto number" class="form-control" id="" readonly>
        </div>

        <div class="form-group">
            <label for="">Tên loại</label>
            <input type="text" name="ten_loai" class="form-control" id="" required>            
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-secondary">Thêm mới</button>
            <button type="reset" class="btn btn-secondary">Nhập lại</button>
            <a href="index.php?act=list" class="btn btn-secondary">Danh sách</a>
        </div>
    </form>
    

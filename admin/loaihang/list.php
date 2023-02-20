<?php 
    require_once "../dao/pdo.php";
    $sql = "SELECT * FROM loai order by ma_loai DESC";
    $loai_hang = pdo_query($sql);

?>
<h3 class="alert alert-success">QUẢN LÝ LOẠI HÀNG</h3>

<form action="" method="post">
    <table class="table">
        <thead class="alert-success">
            <tr>
                <th></th>
                <th>MÃ LOẠI</th>
                <th>TÊN LOẠI</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($loai_hang as $lh ) { ?>
                <tr>
                    <td><input type="checkbox" name="name" id=""></td>
                    <td><?= $lh['ma_loai'] ?></td>
                    <td><?= $lh['ten_loai'] ?></td>
                    <td>
                        <a class="btn btn-warning" href="index.php?act=sualh&id=<?= $lh['ma_loai'] ?>">Sửa</a>
                        <a class="btn btn-danger" onclick="return confirm('Xác nhận xoá!')" href="index.php?act=xoalh&id=<?= $lh['ma_loai'] ?>">Xoá</a>
                    </td>
            </tr>
            <?php } ?>
            
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    <button class="btn btn-secondary" id="select-all">Chọn tất cả</button>
                    <button type="reset" class="btn btn-secondary">Bỏ chọn tất cả</button>
                    <button class="btn btn-secondary" id="del">Xoá các mục đã chọn</button>
                    <a href="index.php?act=lh" class="btn btn-secondary">Nhập thêm</a>
                </td>
            </tr>
        </tfoot>
    </table>

</form>
<script src="../content/js/script.js"></script>

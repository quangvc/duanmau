<?php 
    require_once "../dao/pdo.php";
    $sql = "SELECT ma_hh, ten_hh, don_gia, giam_gia, so_luot_xem FROM hang_hoa order by ma_hh DESC";
    $hang_hoa = pdo_query($sql);

?>
<h3 class="alert alert-success">QUẢN LÝ HÀNG HOÁ</h3>

<form action="" method="post">
    <table class="table">
        <thead class="alert-success">
            <tr>
                <th></th>
                <th>MÃ HH</th>
                <th>TÊN HH</th>
                <th>ĐƠN GIÁ</th>
                <th>GIẢM GIÁ</th>
                <th>LƯỢT XEM</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hang_hoa as $hh ) { ?>
                <tr>
                    <td><input type="checkbox" name="name" id=""></td>
                    <td><?= $hh['ma_hh'] ?></td>
                    <td><?= $hh['ten_hh'] ?></td>
                    <td><?= $hh['don_gia'] ?></td>
                    <td><?= $hh['giam_gia'] ?></td>
                    <td><?= $hh['so_luot_xem'] ?></td>
                    <td>
                        <a class="btn btn-warning" href="index.php?act=suahh&id=<?= $hh['ma_hh'] ?>">Sửa</a>
                        <a class="btn btn-danger" onclick="return confirm('Xác nhận xoá!')" href="index.php?act=xoahh&id=<?= $hh['ma_hh'] ?>">Xoá</a>
                    </td>
                </tr>
            <?php } ?>
            
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    <button class="btn btn-secondary" id="select-all">Chọn tất cả</button>
                    <button type="reset" class="btn btn-secondary">Bỏ chọn tất cả</button>
                    <button class="btn btn-secondary">Xoá các mục đã chọn</button>
                    <a href="index.php?act=hh" class="btn btn-secondary">Nhập thêm</a>
                </td>
            </tr>
        </tfoot>
    </table>

</form>
<script src="../content/js/script.js"></script>
<?php
require_once '../dao/pdo.php';
if (isset($_GET['id'])) {
    $ma_hh = $_GET['id'];
}
$sql = "SELECT * FROM binh_luan as a join khach_hang as b on a.ma_kh=b.ma_kh where a.ma_hh=$ma_hh order by ngay_bl DESC";
$binh_luan = pdo_query($sql);

$sql = "SELECT ten_hh FROM hang_hoa where ma_hh=$ma_hh";
$hang_hoa = pdo_query_one($sql);
?>
<h3 class="alert alert-success">CHI TIẾT BÌNH LUẬN</h3><br>
<h2>HÀNG HOÁ: <?= $hang_hoa['ten_hh'] ?></h2>

<form action="" method="post">
    <table class="table">
        <thead class="alert-success">
            <tr>
                <th></th>
                <th>NỘI DUNG</th>
                <th>NGÀY BL</th>
                <th>NGƯỜI BL</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($binh_luan as $bl ) { ?>
                <tr>
                    <td><input type="checkbox" name="name" id=""></td>
                    <td><?= $bl['noi_dung'] ?></td>
                    <td><?= $bl['ngay_bl'] ?></td>
                    <td><?= $bl['ho_ten'] ?></td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Xác nhận xoá!')" href="index.php?act=xoabl&id=<?= $bl['ma_bl'] ?>">Xoá</a>
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
                </td>
            </tr>
        </tfoot>
    </table>

</form>
<script src="../content/js/script.js"></script>
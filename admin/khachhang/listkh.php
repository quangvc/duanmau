<?php 
    require_once "../dao/pdo.php";
    $sql = "SELECT ma_kh, ho_ten, email, hinh, vai_tro FROM khach_hang order by ma_kh DESC";
    $khach_hang = pdo_query($sql);

?>
<h3 class="alert alert-success">QUẢN LÝ KHÁCH HÀNG</h3>

<form action="" method="post">
    <table class="table">
        <thead class="alert-success">
            <tr>
                <th></th>
                <th>MÃ KH</th>
                <th>HỌ VÀ TÊN</th>
                <th>ĐỊA CHỈ EMAIL</th>
                <th>HÌNH ẢNH</th>
                <th>VAI TRÒ</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($khach_hang as $kh ) { ?>
                <tr>
                    <td><input type="checkbox" name="name" id=""></td>
                    <td><?= $kh['ma_kh'] ?></td>
                    <td><?= $kh['ho_ten'] ?></td>
                    <td><?= $kh['email'] ?></td>
                    <td>
                        <img src="../upload/<?= $kh['hinh'] ?>" width="100" alt="">                        
                    </td>
                    <td><?= $kh['vai_tro'] ?></td>
                    <td>
                        <a class="btn btn-warning" href="index.php?act=suakh&id=<?= $kh['ma_kh'] ?>">Sửa</a>
                        <a class="btn btn-danger" onclick="return confirm('Xác nhận xoá!')" href="index.php?act=xoakh&id=<?= $kh['ma_kh'] ?>">Xoá</a>
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
                    <a href="index.php?act=kh" class="btn btn-secondary">Nhập thêm</a>
                </td>
            </tr>
        </tfoot>
    </table>

</form>

<script src="../content/js/script.js"></script>
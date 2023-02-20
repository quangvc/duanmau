<?php 
    require_once "../dao/loai.php";
    $sql = "SELECT b.ten_loai, count(*) as sl, max(don_gia) as caonhat,  min(don_gia) as thapnhat, avg(don_gia) as tb 
    FROM hang_hoa a join loai b on a.ma_loai=b.ma_loai group by a.ma_loai  ";
    $thong_ke = pdo_query($sql);

?>
<h3 class="alert alert-success">THỐNG KÊ HÀNG HOÁ TỪNG LOẠI</h3>
<table class="table">
            <thead class="alert-success">
                <tr>
                    <th>LOẠI HÀNG</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($thong_ke as $tk ) { ?>
                    <tr>
                        <td><?= $tk['ten_loai'] ?></td>
                        <td><?= $tk['sl'] ?></td>
                        <td><?= $tk['caonhat'] ?></td>
                        <td><?= $tk['thapnhat'] ?></td>
                        <td><?= $tk['tb'] ?></td>
                </tr>
                <?php } ?>               
            
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4">
                        <a class="btn btn-secondary" href="index.php?act=bieudo">Xem biểu đồ</a>                        
                    </td>
                </tr>
            </tfoot>
            
        </table>

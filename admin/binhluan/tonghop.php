<?php 
    require_once "../dao/pdo.php";
    $sql = "SELECT a.ma_hh,c.ten_hh, count(*) as dem, max(ngay_bl) as moi,  min(ngay_bl) as cu  FROM binh_luan a  
    join hang_hoa c on a.ma_hh=c.ma_hh group by a.ma_hh  ";
    $binh_luan = pdo_query($sql);

?>
<h3 class="alert alert-success">TỔNG HỢP BÌNH LUẬN</h3>
<table class="table">
            <thead class="alert-success">
                <tr>
                    <th>HÀNG HOÁ</th>
                    <th>SỐ BL</th>
                    <th>MỚI NHẤT</th>
                    <th>CŨ NHẤT</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($binh_luan as $bl ) { ?>
                    <tr>
                        <td><?= $bl['ten_hh'] ?></td>
                        <td><?= $bl['dem'] ?></td>
                        <td><?= $bl['moi'] ?></td>
                        <td><?= $bl['cu'] ?></td>
                        <td>
                            <a class="btn btn-secondary" href="index.php?act=ctbl&id=<?= $bl['ma_hh'] ?>">Chi tiết</a>                        
                        </td>
                    </tr>
                <?php } ?>
                
                
            </tbody>
            
        </table>

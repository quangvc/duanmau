<?php
require_once '../../dao/pdo.php';
$sql = "SELECT * from loai";
$loai = pdo_query($sql);

?>
<div class="card" style="margin: 20px 0">
  <div class="card-header" style="border-bottom: 0">DANH MỤC</div>
  <div class="card-text">
    <ul class="list-group">
      <?php foreach ($loai as $lo) { ?>
        <li class="list-group-item list-group-item-action"><a href="index.php?act=sptheoloai&id=<?= $lo['ma_loai'] ?>" ><?= $lo['ten_loai'] ?></a></li>
      <?php } ?>
    </ul>
  </div>
  <form class="card-footer" style="border-top: 0" action="index.php?act=sptheoloai" method="post" >
    <input type="text" name="kyw" placeholder="Từ khoá tìm kiếm">
    <button type="submit">Tìm kiếm</button>
  </form>
</div>
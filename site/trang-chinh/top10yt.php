<?php
require_once '../../dao/pdo.php';
$sql = "SELECT * from hang_hoa order by so_luot_xem desc limit 0,10";
$top10 = pdo_query($sql);

?>
<div class="card" style="margin: 20px 0">
  <div class="card-header" style="border-bottom: 0">TOP 10 YÊU THÍCH</div>
  <div class="card-text">
    <ul class="list-group">
      <?php foreach ($top10 as $top ) { ?>        
        <li class="list-group-item list-group-item-action" style="border: 0">
          <img src="../../upload/<?= $top['hinh'] ?>" alt="" width="30">
          <a href="index.php?act=spct&id=<?= $top['ma_hh'] ?>" ><?= $top['ten_hh'] ?></a>
        </li>
      <?php } ?>
    </ul>
  </div>

</div>
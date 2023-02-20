<?php
require_once '../../dao/pdo.php';
$sql = "SELECT * from hang_hoa order by ma_hh desc limit 0,9";
$spnew = pdo_query($sql);

?>
<div class="box-sp" style="margin: 20px 0; display:grid; grid-template-columns: 1fr 1fr 1fr ;grid-gap: 20px;">
    <?php foreach ($spnew as $new ) { ?>
        <div class="card" style="padding: 0px;">
            <a href="index.php?act=spct&id=<?= $new['ma_hh'] ?>"><img class="card-img-top" src="../../upload/<?= $new['hinh'] ?>" alt="Card image"></a>
            <div class="card-body">
                <h4 class="card-title"><?= $new['don_gia'] ?></h4>
                <a href="index.php?act=spct&id=<?= $new['ma_hh'] ?>" class="card-text text-body"><?= $new['ten_hh'] ?></a>
            </div>
        </div>
    <?php } ?>    
<!-- 1 -->    
</div>
<h3 class="alert alert-success">BIỂU ĐỒ THỐNG KÊ</h3>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div
id="myChart" style="width:100%; max-width:900px; height:500px;">
</div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['Loại', 'Số lượng'],
  <?php 
  require_once "../dao/pdo.php";
  $sql = "SELECT a.ten_loai, count(*) as so_luong from loai as a join hang_hoa as b on a.ma_loai = b.ma_loai group by b.ma_loai";
  $items = pdo_query($sql);

  foreach ($items as $it ) {
    echo "['$it[ten_loai]',$it[so_luong]],";
  }  
  ?>

]);

var options = {
  title:'Tỉ lệ hàng hoá',
  is3D:true
};

var chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>
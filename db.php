<?php
$con=mysqli_connect("localhost","root","","yoga");
$filter=$_POST['filter'];
$squery=$_POST['squery'];
$query="SELECT * from studio where $filter like '%$squery%'";
$result=mysqli_query($con,$query);
?>
<div class="container">
  <div class="row">
    <div class="col-md-2 col-md-offset-10 input-group">
      <div class="input-group-addon" style="background-color:#367013;border:0px;"><i class="fa fa-filter"></i></div>
      <input id="fac" class="form-control" type="text" placeholder="Filter Results">
    </div>
  </div>
  <br>
<div class="row">
  <table id="studio" class="tablesorter table">
  <thead>
  <tr>
      <th>Studio Name</th>
      <th>Yoga Type</th>
      <th>City</th>
      <th>Price(Per Class)</th>
      <th>Free Trial</th>
  </tr>
  </thead>
  <tbody>
    <?php
    foreach ($result as $row) {
      echo "<tr>";
      echo "<td>".$row['name']."</td>";
      echo "<td>".$row['type']."</td>";
      echo "<td>".$row['city']."</td>";
      echo "<td>".$row['price']."</td>";
      echo "<td>".$row['trial']."</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
  </table>
</div>
</div>

<?php

// $pass="[";
// foreach ($result as $v  ) {
//    $pass.="{\"".$v['id']."\":[\"".$v['name']."\",\"".$v['f_price']."\",\"".$v['a_price']."\"]},";
//
// }
// $pass=substr($pass,0,strlen($pass)-1);
// $pass.="]";
// echo json_encode($pass,JSON_FORCE_OBJECT);
?>
 <script type="text/javascript">
  $(document).ready(function(){
    $("#studio").tablesorter();
    theTable=$("table#studio");
    $("#fac").keyup(function() {
    $.uiTableFilter( theTable, this.value );
  });
  });
 </script>

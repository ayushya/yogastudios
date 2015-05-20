<!DOCTYPE html>
<html>
  <head>
    <title>Insert</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="assets/js/tablesorter.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  </head>
  <style>
  *{
    color:black;
  }
  </style>
  <body>
    <form action="" method="post">
      <input type="text" name="name" placeholder="Name">
      <input type="text" name="type" placeholder="Type">
      <input type="text" name="city" placeholder="City">
      <input type="text" name="price" placeholder="Price">
      <input type="text" name="trial" placeholder="Free Trial">
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
<?php
  if(isset($_POST['name']))
  {
    $con=mysqli_connect("localhost","root","","yoga");
    $name=$_POST['name'];
    $type=$_POST['type'];
    $city=$_POST['city'];
    $price=$_POST['price'];
    $trial=$_POST['trial'];
    $insert="INSERT into studio(name,type,city,price,trial) VALUES('$name','$type','$city','$price','$trial')";
    mysqli_query($con,$insert);
  }
 ?>

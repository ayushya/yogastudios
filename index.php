<html>
  <head>
    <title>Search | Yoga Studios</title>
  </head>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"></script>
  <script type="text/javascript" src="assets/js/tablesorter.js"></script>
  <script type="text/javascript" src="assets/js/tablefilter.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <body>

    <div class="container">
	<div class="row">
		<div id="logo">
		<center><h1>Yoga Studios</h1></center>

		</div>
	</div>
	<div class="row">
	<!-- <form action="" method="post" onsubmit="addloader()"> -->
  <div class="col-md-2 col-md-offset-2">
    <div class="search">
      <select class="form-control" id="fil" name="filter" style="height:46px;border-radius:6px;font-size:16px;">
    <option value="name">Studio Name</option>
    <option value="type">Yoga Type</option>
    <option value="city">City</option>
    <option value="price">Price</option>
    <option value="trial">Trial</option>
  </select>
    </div>
  </div>
	<div class="col-md-6" style="padding-left:0px;">
	<div class="search">

		<input type="text" id="sq" class="form-control input-lg" onkeydown="if (event.keyCode == 13) document.getElementById('btnSearch').click()" name="squery" placeholder="Search here .. " required>
	</div>
	</div>
	<div class="col-md-2">
	<div class="search">
	<button id="btnSearch" class="btn btn-lg btn-primary" type="button" onclick="addloader();loadres();" style="font-size:24px;"><span class="glyphicon glyphicon-search"></span></button>
	</div>
	</div>
		<!-- </form> -->
	</div>
</div>
<br>
<br>
    <div class="load1">

    </div>
    <div id="load">

    </div>

  </body>
  <script type="text/javascript">
    function addloader () {
      $(".load1").show();
  	$(".load1").html('<br><br><br><center><i class="fa fa-5x fa-refresh fa-spin"></i></center>');
    }
    function loadres()
    {
      var s1=document.getElementById('sq').value;
      var s2=document.getElementById('fil').value;
      $.post("db.php",{squery:s1,filter:s2},function(data,status,xhr){
        $(".load1").hide();
        $("#load").html(xhr.responseText);
      });
    }
    $("#sq").focus();
  </script>
</html>

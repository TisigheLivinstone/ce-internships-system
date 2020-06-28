<!DOCTYPE html>
<?php
	require_once 'session.php';
?>
<!--------------------HEAD---------------------->
<?php include'head.php'?>
<!--------------------HEAD---------------------->
<!-------------------SIDEBAR------------------>
<?php include 'sidebar.php'?>
<!-------------------SIDEBAR------------------>
<html lang = "eng">
	<head>
	<title>Computer Engineering Internships</title>
	<meta charset = "UTF-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  	<!-- Bootstrap 3.3.7 -->
  	<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../bower_components/select2/dist/css/select2.min.css">
  	<!-- Theme style -->
  	<link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  	<!-- DataTables -->
    <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <link href="../css/sb-admin.css" type = "text/css" rel="stylesheet"/>
    <link rel = "stylesheet" type = "text/css" href = "../css/jquery-ui.css" />
	<!-- <link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" /> -->
    <link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
 
	</head>
<body>

		<div id = "sidecontent" class = "well pull-right">
			<div class = "alert alert-info">Transaction</div>
			<div class = "panel panel-default">
				<div class = "panel-heading">
					<div class = "form-inline">
						<label>Enter Student ID:</label>
						<input type = "number" style = "width:200px;" class = "form-control" min = "0" max = "999999" id = "search"/>
						<button class = "btn btn-primary" id = "btn_search"><span class = "glyphicon glyphicon-search"></span></button>
					</div>
					<hr style = "border-top:1px dotted #000;"/>
					<div id = "result">
						
					</div>
					<br style = "clear:both;"/>
				</div>
			</div>
		</div>
</body>	
<script src = "../js/jquery-3.1.1.js"></script>
<script src = "../js/sidebar.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/sidebar.js"></script>
<script src = "../js/script.js"></script>
</html>
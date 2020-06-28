<!DOCTYPE html>
<?php
	require_once 'session.php';
?>
<!--------------------HEAD---------------------->
<?php include 'head.php'?>
<!--------------------HEAD---------------------->
<!-------------------SIDEBAR------------------>
<?php  include 'sidebar.php'?>
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

<div id="sidecontent" class="well pull-right">
    <div class="alert alert-info">Home</div>

    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                  <center>  <p>VISION</p></center>
                </div>
                <a href="book.php" class="small-box-footer">More details <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <center><p>SUPERVISORS</p></center>
                </div>
                <a href="student.php" class="small-box-footer">More details <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                <center><p>PROJECTS</p></center>    
                </div>
                <a href="return.php" class="small-box-footer">More details <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                <center><p>REPORTS</p></center>    
                </div>
                <a href="return.php" class="small-box-footer">More details <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div> 

    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Interns Enrolment Statistics</h3>
                    <div class="box-tools pull-right">
                        <form class="form-inline">
                            <div class="form-group">
                                <label>Select Year: </label>
                                <select class="form-control input-sm" id="select_year">
                                <?php
                        for($i=2015; $i<=2065; $i++){
                          $selected = ($i==$year)?'selected':'';
                          echo "
                            <option value='".$i."' ".$selected.">".$i."</option>
                          ";
                        }
                      ?>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <br>
                        <div id="legend" class="text-center"></div>
                        <canvas id="barChart" style="height:350px"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>
    <!-- right col -->
</div>
</body>
<script src="../js/jquery-3.1.1.js"></script>
<script src="../js/sidebar.js"></script>

</html>
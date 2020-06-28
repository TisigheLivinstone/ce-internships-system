<?php
        if (isset($_POST['submit']))    { 
         $dbconn = mysqli_connect('localhost','root','','db_issm');    
        //include("config.php");
        session_start();
        $username=$_POST['user_name'];
        $password = $_POST["password"];
        $_SESSION['user_name']=$username; 
        $query = mysqli_query( $dbconn, "SELECT * FROM registered_users WHERE user_name='$username' and password='$password'");
         if (mysqli_num_rows($query) != 0)
        {
         echo "<script language='javascript' type='text/javascript'> location.href='fill_details.php' </script>";   
          }
          else
          {
        echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
        }
  }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Computer Engineering Internships</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="CE Internship Sign In & Sign Up Form" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- Custom Theme files -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/snow.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/signin.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">


    <!-- //web font -->
</head>

<body>
    <div class="snow-container">
        <div class="snow foreground"></div>
        <div class="snow foreground layered"></div>
        <div class="snow middleground"></div>
        <div class="snow middleground layered"></div>
        <div class="snow background"></div>
        <div class="snow background layered"></div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">CE Internships</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Internships</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Submit Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary" href="login.php">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-secondary" href="signup.php">Sign Up</a>
                </li>
            </ul>
        </div>
    </nav><br>

    <h1>Sign In To Apply</h1>
    <div class="main-agileits">
        <!--form-stars-here-->
        <div class="form-w3-agile">
            <h2 class="sub-agileits-w3layouts">Sign In</h2>
            <form action="#" method="post">
                <input type="text" name="user_name" placeholder="User Name" required="" />
                <input type="password" name="password" placeholder="Password" id='password' required="" />
                <a href="#" class="forgot-w3layouts">Forgot Password ?</a>
                <div class="submit-w3l">
					<!-- <input type="submit" value="Sign in"> -->
          			<button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
                </div>

                <p class="p-bottom-w3ls"><a href="user_registration/index.php">Sign Up here</a>if u do not have an account yet.</p>
            </form>
        </div>
    </div>
    <!--//form-ends-here-->
    <!-- copyright -->
    <div class="copyright w3-agile">
        <p> © 2020 Internship Sign In & Sign Up Form . All rights reserved | Design by <a href="index.php"
                target="_blank">Group1</a></p>
    </div>
    <!-- //copyright -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
	</script>
	<script type="text/javascript" src="js/script1.js"></script>

</body>

</html>
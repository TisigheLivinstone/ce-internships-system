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
			<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/jquery-ui.css" />

    <!-- Custom Theme files -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="../css/snow.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/signin.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <!-- <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->

    <!-- //web font -->
</head>

<body>
    <!--------------------HEADER---------------------->
    <?php include'header.php'?>
    <!--------------------HEADER---------------------->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="http://localhost/intern_p/admin/login.php">CE ADMIN</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="../index.php">Home Site</a></li>
            <li><a href="http://localhost/intern_p/admin/login.php">Internships</a></li>
            <li><a href="#">Sign Up</a></li>

        </ul>
    </nav><br><br>
    <div class="snow-container">
        <div class="snow foreground"></div>
        <div class="snow foreground layered"></div>
        <div class="snow middleground"></div>
        <div class="snow middleground layered"></div>
        <div class="snow background"></div>
        <div class="snow background layered"></div>
    </div>
    <h1>Sign In To Apply</h1>
    <div class="main-agileits">
        <!--form-stars-here-->
        <div class="form-w3-agile">
            <h2 class="sub-agileits-w3layouts">Sign In</h2>
            <form action="#" method="post">
                <input type="text" id="username" placeholder="User Name" required="" />
                <input type="password" maxlength="12" id="password" placeholder="Password" required="" />
				<a href="#" class="forgot-w3layouts">Forgot Password ?</a>
                <div class="submit-w3l">
                    <input type="submit" id = "login" value="Sign in">
                </div>

                <p class="p-bottom-w3ls"><a href="signup.php">Sign Up here</a>if u do not have an account yet.</p>
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
    <script src="../js/jquery-3.1.1.js"></script>
    <script src="../js/script.js"></script>
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


</body>

</html>
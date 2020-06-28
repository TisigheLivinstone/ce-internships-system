<?php
if(!empty($_POST["insert_button"])) {
  /* Form Required Field Validation */
  foreach($_POST as $key=>$value) {
    if(empty($_POST[$key])) {
    $error_message = "All Fields are required";
    break;
    }
  }

  /* Email Validation */
  if(!isset($error_message)) {
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $error_message = "Invalid Email Address";
    }
  }

  /* Validation to check if gender is selected */
  if(!isset($error_message)) {
  if(!isset($_POST["gender"])) {
  $error_message = " All Fields are required";
  }
  }

  /* Validation to check if Terms and Conditions are accepted */
  if(!isset($error_message)) {
    if(!isset($_POST["terms"])) {
    $error_message = "Accept Terms and Conditions to Register";
    }
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

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
       <!--::header part start::-->
			<header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php"> <img src="images/banner_image1.PNG" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="http://localhost/intern_p/index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/intern_p/about.php">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://localhost/intern_p/internships.php">Internships</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn_2" href="#">Submit Reports</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn_1" href="#">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn_1" href="http://localhost/intern_p/user_registration/index.php">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->


    <div class="main-agileits">
        <!--form-stars-here-->
        <div class="form-w3-agile">
            <h2 class="sub-agileits-w3layouts">Apply Here</h2>
            <form name="frmRegistration" method="post" action="inserty.php">
                <?php if(!empty($success_message)) { ?>
                <div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
                <?php } ?>
                <?php if(!empty($error_message)) { ?>
                <div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
                <?php } ?>

                <!-- <input type="text" class="demoInputBox" placeholder='Company Name' name="company_name" minlength="3" maxlength="16" value=" <?php #if(isset($_POST['company_name'])) echo $_POST['company_name']; ?>" required> -->
                <input type="text" placeholder='First Name' class="demoInputBox" name="first_name" minlength="3" maxlength="16" value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name']; ?>" required>
                <input type="text" class="demoInputBox" name="last_name" placeholder='Last Name' minlength="3" maxlength="16" value="<?php if(isset($_POST['last_name'])) echo $_POST['last_name']; ?>" required>
                <input type="email" class="demoInputBox" name="email" placeholder='Email' value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" required> <br>
                    <label for="male">   Male</label>
                <input type="radio" name="gender" value="Male"
                    <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?> required> 
                    <label for="female">Female</label>
                <input type="radio" name="gender" value="Female"
                    <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?> <required><br>
                        <label for="cv">Upload CV</label>
                        <input class='table-responsive table-bothered' type="file" name="file" required />

                <input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit"
                    name="insert_button" value="Apply" class="btnRegister" required>

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

</body>

</html>
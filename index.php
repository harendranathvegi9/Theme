<?php
ob_start();
include_once("db.php");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Clearance system </title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
        

<form class="form-login" method="post" action="">
<h2 class="form-login-heading">sign in now</h2>
<div class="login-wrap">
<input type="text" class="form-control" placeholder="User ID"  id="name" name="fname" autofocus>
		            <br>
<input type="password" class="form-control"  id="password" name="password" placeholder="**********">
		            <label class="checkbox">
		            <span class="pull-right">
<a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
		</span>
		            </label>
<button class="btn btn-theme btn-block" type="submit" value="Login"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		            
		            <div class="login-social-link centered">
		           
		            </div>
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="btn btn-theme btn-block" href="register.php">
		                    Create an account
		                </a>
		            </div>
		
		        </div>
		
		          <!-- Modal -->
 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title">Forgot Password ?</h4>
</div>
<div class="modal-body">
<p>Enter your e-mail address below to reset your password.</p>
<input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" href="index.php" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/Capture.png", {speed: 500});
    </script>


  </body>
</html>
<?php	
if (isset($_POST['fname']) & isset($_POST['password'])){
	 $userName=mysql_real_escape_string($_POST['fname']); 
     $password=mysql_real_escape_string($_POST['password']); 
	  //*********retrieving data from Database**********

      $query = "SELECT * FROM users WHERE fname='$userName' and password='$password'";
       // Check username and password match
      $res = mysql_query($query);

      $rows = mysql_num_rows($res);
      if ($rows==1) {
      // Set username session variable

      $_SESSION['userName'] = $_POST['username'];

     // Jump to secured page
      header("Location: dashboard.php");
     }
     else {
     // Jump to login page
    // echo "user name and password not found";
	 echo'<script type="text/javascript">alert("user name and password not found!");</script>';
     }
	 }
     exit;
     ?>
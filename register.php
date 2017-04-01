<!doctype html>
<?php
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
	  	
		      <form  class="form-login"  action="" name="validation" method="post" onSubmit="return checkbae()">
		        <h2 class="form-login-heading">Register now</h2>
		        <div class="login-wrap">

<input type="text" class="form-control" name="u_reg" placeholder="Reg No"  required="required"  autofocus>
		            <br>
<input type="text" class="form-control" name="fname" required="required" placeholder="Full Names" autofocus id="name1"/>
					<br>
<input type="text" class="form-control" name="u_dept" required="required" placeholder="Department" autofocus id="name2" />
					<br>
<input type="text" class="form-control" name="u_natid" required="required"  autofocus onkeyup="enterNumber()" placeholder="ID Number" id="textboxy"/>
					<br>
<input type="number"  class="form-control" name="u_phone" required="required" autofocus  placeholder="Mobile No" onkeyup="enterNumbers()"  id="textboxv" />
					<br>
<input type="text" class="form-control" name="u_email" required="required" autofocus  placeholder="Email Address" id="mail"/>
					<br>
<input type="password" class="form-control" name="password" required="required" placeholder="************" id="pass"/>
					<br>

<button class="btn btn-theme btn-block" name="submit" type="submit" onclick="checkLength()"><i class="fa fa-lock"></i> SUBMIT</button>
</form>
</div>
<script type="text/javascript">

   function enterNumbers(){

  var e = document.getElementById('textboxv');

  if (!/^[0-9]+$/.test(e.value)) 
{ 
alert("Please enter onyl number.");
e.value = e.value.substring(0,e.value.length-1);
}
}   

</script>
<script type="text/javascript">

   function enterNumber(){

  var e = document.getElementById('textboxy');

  if (!/^[0-9]+$/.test(e.value)) 
{ 
alert("Please enter onyl number.");
e.value = e.value.substring(0,e.value.length-1);
}
}   

</script>
<script>
function checkLength(){
    var textbox = document.getElementById("textboxv");
    if(textbox.value.length <= 10 && textbox.value.length >= 10){
        
    }
    else{
        alert("Your phone No. Must be 10 digits!!")
    }
}
</script>
<script>
function checkLength(){
    var textbox = document.getElementById("textboxy");
    if(textbox.value.length <= 8 && textbox.value.length >= 8){
        
    }
    else{
        alert("Your ID No. Must be Eight digits!!")
    }
}
</script>
<script language="JavaScript1.2">

//Advanced Email Check credit-
//By JavaScript Kit (http://www.javascriptkit.com)
//Over 200+ free scripts here!

var testresults
function checkemail(){
var str=document.validation.email.value
var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
if (filter.test(str))
testresults=true
else{
alert("Please input a valid email address!")
testresults=false
}
return (testresults)
}
</script>
<script>
function checkbae(){
if (document.layers||document.getElementById||document.all)
return checkemail()
else
return true
}
</script>                
		            <hr>
		            <div class="login-social-link centered">
		           
		            </div>
		            <div class="registration">
		            </div> </div></form>	  	
	  	
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
    
    
  <?php

//session_start();
//if (isset($_SESSION['user'])){
//$fname=$_SESSION['user'];
//Register a user
// Get values from form

if(!empty($_POST['u_reg']) && !empty($_POST['fname'])  && !empty($_POST['u_email'])  && !empty($_POST['password']) && !empty($_POST['u_phone']) && !empty($_POST['u_dept']) && !empty($_POST['u_natid']))
{
    $reg= mysql_real_escape_string($_POST['u_reg']);
	$name= mysql_real_escape_string($_POST['fname']);
	$email=mysql_real_escape_string($_POST['u_email']);
	$pass=mysql_real_escape_string($_POST['password']);
	$phone=mysql_real_escape_string($_POST['u_phone']);
	$dept=mysql_real_escape_string($_POST['u_dept']);
	$natid=mysql_real_escape_string($_POST['u_natid']);
	

  $query = mysql_query("SELECT user_email FROM users WHERE user_email='$email'");

  if (mysql_num_rows($query) != 0)
  {
	  echo "<script>alert('User already exists,Try another email!!')</script>";
  }

  else
  {
 $registerquery = mysql_query("INSERT INTO users (user_reg,fname,user_email,password, user_phone, user_dept, user_natid) VALUES('".$reg."', '".$name."','".$email."','".$pass."','".$phone."','".$dept."','".$natid."')");
        if($registerquery)
        {	
			 	echo "<script>alert('The Registration is successfull ,Login now!!')</script>";
	 			echo "<script>window.open('index.php','_self')</script>";
		}
        else 
        {
            echo "<h1>Error</h1>";
            echo "<p>Sorry, your registration failed. Please go back and try again.</p>";    
        }       
}}
exit;
?>  
       
</body>
</html>


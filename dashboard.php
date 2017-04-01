<!doctype html>
<?php
include_once("db.php");
?>
<html>
<head>
<title>Online clearance</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/farmers.css" rel="stylesheet" type="text/css">
<style>

  h1 {
    position: relative;
    margin-top: 20px;
  }
  
  h1.one {
    margin-top: 0;
  }
  
  h1.one:before {
    content: "";
    display: block;
    border-top: solid 1px black;
    width: 100%;
    height: 1px;
    position: absolute;
    top: 50%;
    z-index: 1;
  }
  
  h1.one span {
    background: #ffc;
    padding: 0 20px;
    position: relative;
    z-index: 5;
  }
  input[type=submit] {width:10%;background-color:#2F4F4F;color:#fff;padding:5px;font-size:10px;cursor:pointer;border-radius:5px;margin-bottom:5px}
input[type=submit]:hover {-webkit-transition-duration: 0.4s; transition-duration: 0.4s;background-color: #4CAF50;color: white;border: 2px solid #4CAF50; }


  td a:hover{ color:green;font-weight:bold; text-decoration:none;}
  </style>
</head>
<body bgcolor="#F4FFE4">
<div id="hady"><h2 style="background: #2F4F4F; color:#4CAF50; " align="center" > <font size="50%x">Online Mclearance </font></h2>
</div>
<div id="logos">

</div><br /><br />
 <style>
#link ul{margin-left:400px;}
   </style>
<div id="link">
<ul>

<li><a href="code.php">Print Receipt</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
	<h1 style="background:#2F4F4F; color:#FFFFFF;" align="center"> <font size="100%x">Welcome to online clearance</font></h1>
	
<div id = "form" style ="width:800px;" align="center" >
<form name="search" method="post" action="">
<h1 class="one"><span><font face="grey">View All clearance offices</font></span></h1>

<style> 


/* On the flex container */
.flex-container {
   display: -webkit-flex;
   display: flex;
   -webkit-align-items: center;
   align-items: center;
   -webkit-justify-content: center;
   justify-content: center;
   /* You can set flex-wrap and flex-direction individually */
   -webkit-flex-direction: row;
   flex-direction: row;
   -webkit-flex-wrap: wrap;
   flex-wrap: wrap;
   /* Or do it all in one line with flex flow */
   -webkit-flex-flow: row wrap;
   flex-flow: row wrap;
   /* tweak the where items line up on the row */
   /* valid values are: flex-start, flex-end, space-between, space-around, stretch */
   -webkit-align-content: flex-end;
   align-content: flex-end;
}
.flex-item {
    background-color: #4CAF50;
    width: 120px;
    height: 100px;
	margin-top:20px;
    margin: 10px;
}

.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
	float:left;
}

.container {
    padding: 0 16px;
}

.title {
    color: grey;
    font-size: 18px;
}

button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}

a {
    text-decoration: none;
    font-size: 22px;
    color: black;
}

button:hover, a:hover {
    opacity: 0.7;
}
</style>
</head>


<body>

<div class="card">
  <img src="assets/img/friends/fr-04.jpg" alt="John" style="width:100%">
  <div class="container">
    <h1>John Doe</h1>
    <p class="title">CEO & Founder, Example</p>
    <p>Harvard University</p>
    <div id="user_details"> 
 
 <?php
 
 //session_start();
//if (isset($_SESSION['user'])){
//$fname=$_SESSION['user'];
//Register a user
// Get values from form

 $user= $_SESSION['u_email'];
 $get_user= "select * from users where u_email='$user' ";
 $run_user= mysql_query($con,$get_user);
 $row=mysql_fetch_array($run_user);
 
 
 
    $reg= $row['u_reg'];
	$name= $row['fname'];
	$phone=$row['u_phone'];
	$dept=$row['u_dept'];
	$natid=$row['u_natid'];
 
 
echo " 

<p><strong> Name: </strong> $name </p>
<p><strong> Cellphone: </strong> $phone </p>
<p><strong> County: </strong> $user_county </p>
<p><strong> Last Login: </strong> $last_login </p>
<p> <a href='edit.php?u_id=$user_id'> Edit Profile</a></p>
<p> <a href='logout.php'> Logout</a></p>
";
 
 ?>
 </div>
 </div>
    
    
    
    
    
    <a href="#"><i class="fa fa-dribbble"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-facebook"></i></a>
    <p><button>Contact</button></p>
  </div>
</div>

<div class="flex-container">
  <div class="flex-item"><a href="finance.php">DEAN OF STUDENTS</a> </div>
  <div class="flex-item"><a href="#">Departments</a></div>
  <div class="flex-item"><a href="#">FINANCE OFFICE</a></div>
  <div class="flex-item"><a href="#">DEAN OF STUDENTS</a></div> 
  <div class="flex-item"><a href="#">Departments</a></div>
  <div class="flex-item"><a href="#">FINANCE OFFICE</a></div>
  <div class="flex-item"><a href="#">Departments</a></div>
  <div class="flex-item"><a href="#">FINANCE OFFICE</a></div>
  <div class="flex-item"><a href="#">Departments</a></div> 
  
   
  </div>
  

</body>
</html>
</div>
</body>
</html>
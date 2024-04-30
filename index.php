<?php
require('dbconn.php');
?>


<!DOCTYPE html>
<html>


<head>

	<title>Library Management System </title>

	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	

	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

	
		<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	

</head>
<body>

	<ul class="topnav">
	  
	  <li class="right"><a href="index.php">Sign In</a></li>
	  <li class="right"><a href="about.html">About</a></li>
	  <li class="right"><a href="#home">Home</a></li>
	  
	</ul>

	<div class="lib">
		<h1>LIBRARY MANAGEMENT SYSTEM</h1>
	</div>


	<div class="container">

		<div class="login">
			<h2>Sign In</h2>
			<form action="index.php" method="post">
				<input type="text" Name="RollNo" placeholder="RollNo" required="">
				<input type="password" Name="Password" placeholder="Password" required="">
			
			
			<div class="send-button">
				
					<input type="submit" name="signin"; value="Sign In">
				</form>
			</div>
			<div>
				<p>Don't have a login? <a href="signup.php">Sign Up</a></p>
			</div>
		</div>

	</div>

	<div class="footer w3layouts agileits">
		<!-- <p> &copy; 2024 Library Member Login. All Rights Reserved </a></p> -->
		
	</div>

<?php
if(isset($_POST['signin']))
{$u=$_POST['RollNo'];
 $p=$_POST['Password'];


 $sql="select * from librarylms.user where RollNo='$u'";

 $result = $conn->query($sql);
$row = $result->fetch_assoc();
$x=$row['Password'];
$y=$row['Type'];
if(strcasecmp($x,$p)==0 && !empty($u) && !empty($p))
  {
   $_SESSION['RollNo']=$u;
   

  if($y=='Admin')
   header('location:admin/index.php');
  else
  	header('location:student/index.php');
        
  }
else 
 { echo "<script type='text/javascript'>alert('Failed to Login! Incorrect RollNo or Password')</script>";
}
   

}

?>

</body>

</html>

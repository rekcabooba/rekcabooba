<!DOCTYPE HTML>
<html>
<head>
<title>Worker registration</title>
<!-- Custom Theme files -->
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Square login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
</head>
<body>
<style>
		option{
			color:black ;
		}
		</style>
<!--header start here-->
<div class="login-form">
			<div class="top-login">
				<span><img src="web/images/group.png" alt=""/></span>
			</div>
			<h1>Worker Registeration</h1>
			<div class="login-top">
			<form method="POST" action="#">
           
				<div class="login-ic">
					<i ></i>
					<input type="text"  name="uname" placeholder="User name" required >
					<div class="clear"></div> </div>
					
				<div class="login-ic">
					<i ></i>
					<input type="text"  name="aad" placeholder="aadhar" required >
					<div class="clear"> </div>
				</div>

                <div class="login-ic">
					<i ></i>
					<input type="text"  name="mail" placeholder="e-mail" required >
					<div class="clear"> </div>
				</div>
				<div class="login-ic">
					<i ></i>
					<input type="text" name="add"  placeholder="address" required >
					<div class="clear"> </div>
				</div>
				<div class="login-ic">
					<i ></i>
					<select name="ward"  >
						<option selected disabled>Select Ward</option>
						<option>Ward-1, Ward-2, Ward-3</option>
						<option>Ward-4, Ward-5, Ward-6</option>
						<option>Ward-7, Ward-8, Ward-9</option>
						<option>Ward-10, Ward-11, Ward-12</option>
						<option>Ward-13, Ward-14, Ward-15</option>
						<option>Ward-16, Ward-17, Ward-18</option>
						<option>Ward-19, Ward-20, Ward-21</option>
					</select>
					<div class="clear"> </div>
				</div>

                <div class="login-ic">
				<i class="fi fi-rr-phone-call"></i>
					<input type="text" name="ph"  placeholder="phone-number" type="tel" pattern="[0-9]{10}" required >
					<div class="clear"> </div>
				</div>
				<div class="login-ic">
					<i class="icon"></i>
					<input type="password" name="pass" placeholder="Password" required >
					<div class="clear"> </div>
				</div>
			
				<div class="log-bwn">
					<input type="submit"  value="Register">
				
                
				</form>

			</div>
			<p class="copy"> <a href="index.html" target="_blank">home</a></p>
</div>	
<?php
if($_POST)
{
	include "connection.php";
	$na=$_POST['uname'];
	$aad=$_POST['aad'];
	$add=$_POST['add'];
	$em=$_POST['mail'];
	$wa=$_POST['ward'];
	$ph=$_POST['ph'];
    $pass=$_POST['pass']; 

		$sql1="INSERT INTO collection_agent (caname,cacontact,caemail,caaadhar,address,area,pass) VALUES ('$na','$ph','$em','$aad','$add','$wa','$pass')";
		echo $sql1;
		$result=mysqli_query($conn, $sql1);
		if ($result )
		{ 
			$sql2="insert into login(uname,pass,usertype,status) VALUES('$em','$pass','worker',0)";
			$result2=mysqli_query($conn, $sql2);
			if($result2)
			echo '<script>alert("You have successfully registered");</script>';
		}
		
	}

?>

<!--header start here-->
</body>
</html>
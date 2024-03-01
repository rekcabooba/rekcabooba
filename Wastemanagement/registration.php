<!DOCTYPE HTML>
<html>
<head>
<title>Clean Space</title>
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
			<h1>Customer Registeration</h1>
			<div class="login-top">
			<form method="POST" action="#">
           
				<div class="login-ic">
					<i ></i>
					<input type="text"  name="uname" placeholder="User name"  required >
					<div class="clear"></div> </div>
					

                <div class="login-ic">
					<i ></i>
					<input type="text"  name="mail" placeholder="e-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required >
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
						<option>Ward-1</option>
						<option>Ward-2</option>
						<option>Ward-3</option>
						<option>Ward-4</option>
						<option>Ward-5</option>
						<option>Ward-6</option>
						<option>Ward-7</option>
						<option>Ward-8</option>
						<option>Ward-9</option>
						<option>Ward-10</option>
						<option>Ward-11</option>
						<option>Ward-12</option>
						<option>Ward-13</option>
						<option>Ward-14</option>
						<option>Ward-15</option>
						<option>Ward-16</option>
						<option>Ward-17</option>
						<option>Ward-18</option>
						<option>Ward-19</option>
						<option>Ward-20</option>
						<option>Ward-21</option>
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
	$em=$_POST['mail'];
	$add=$_POST['add'];
	$wa=$_POST['ward'];
	$ph=$_POST['ph'];
	$pass=$_POST['pass'];

		$sql1="INSERT INTO customer_registration (name,email,address,ward,phno,password) VALUES ('$na','$em','$add','$wa',$ph,'$pass')";
		$result=mysqli_query($conn, $sql1);
		if ($result )
		{ 
			$sql2="insert into login(uname,pass,usertype,status)values('$em','$pass','customer',0)";
			$result2=mysqli_query($conn, $sql2);
			if($result2)
			echo '<script>alert("You have successfully registered");</script>';
		}
		
	}

?>

<!--header start here-->
</body>
</html>
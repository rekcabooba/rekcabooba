<!DOCTYPE HTML>
<html>
<head>
<title>Registeration</title>
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
<!--header start here-->
<div class="login-form">
			<div class="top-login">
				<span><img src="web/images/group.png" alt=""/></span>
			</div>
			<h1>Registeration</h1>
			<div class="login-top">
			<form method="POST" action="#">
           
				<div class="login-ic">
					<i ></i>
					<input type="text"  name="uname" placeholder="User name" required >
					<div class="clear"></div> </div>
					

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
				<i class="fi fi-rr-phone-call"></i>
					<input type="text" name="ph"  placeholder="phone-number" required >
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
	$ph=$_POST['ph'];
	$pass=$_POST['pass'];

		$sql1="INSERT INTO customer_registration (name,email,address,phno,password) VALUES ('$na','$em','$add',$ph,'$pass')";
		echo $sql1;
		$result=mysqli_query($conn, $sql1);
		if ($result)
		{ 
			$sql2="insert into login(uname,pass,usertype,status)values('$na','$pass','customer',1)";
			$result2=mysqli_query($conn, $sql2);
			if($result2)
			echo "successfully registered ";
		}
		
	}

?>

<!--header start here-->
</body>
</html>
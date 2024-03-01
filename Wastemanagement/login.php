
<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
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
			<h1>Login</h1>
			<div class="login-top">
			<form method="POST">
				<div class="login-ic">
					<i ></i>
					<input type="text" name="username" placeholder="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User name';} "/>
					<div class="clear"> </div>
				</div>
				<div class="login-ic">
					<i class="icon"></i>
					<input type="password" name="password" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"/>
					<div class="clear"> </div>
				</div>
			
				<div class="log-bwn">
					<input type="submit"  name="login" value="LOGIN">
				
                
				
                <div> 
                <p class="copy">
					<a href="registration.php">
            <button name="customer" class="btn btn-primary btn-lg">Customer Registration</button></a>
					<a href="workerlogin.php">
            <button name="agent" class="btn btn-primary btn-lg" background-color: #008CBA;>Worker Registration</button></a></p>
			
				</div>
			</div>
			<p class="copy"> <a href="index.html" target="_blank">home</a></p>
</div>	
</form>
</body>
</html> 
<?php

if(isset($_POST['customer']))
{
	echo "<script>location.href='registration.php'</script>";
}
if(isset($_POST['agent']))
{
	echo "<script>location.href='workerlogin.php'</script>";
}
if(isset($_POST['login']))
{
	include "connection.php";
	$uname=$_POST['username'];
	$pass=$_POST['password'];
	if (empty($uname) || empty($pass))
	{
		echo "Username or password is empty";
	}
	else
	{
		$sql="SELECT * FROM login WHERE uname='$uname' AND pass='$pass'";
		echo $sql;
		$result=mysqli_query($conn, $sql);
		if ($result)
		{ 
			$row=mysqli_fetch_array($result);
			if($row['status']==0)
			echo "Unauthorized Login: Login Failed ";
			else
		{ 
			if($row['usertype']=="admin")
				header('location: adminhome.php');
			else if ($row['usertype']=="worker")
			{
				$sql="SELECT `caid` FROM  `collection_agent`  WHERE `caemail`='$uname' ";
		
					$result=mysqli_query($conn, $sql);
					$row=mysqli_fetch_array($result);
					$_SESSION['id']=$row[0];
				header('location: workerhome.php');
			}
			else
			{
				if($row['usertype']=="customer")
				{
					$sql="SELECT `id` FROM  `customer_registration`  WHERE `email`='$uname' ";
		
					$result=mysqli_query($conn, $sql);
					$row=mysqli_fetch_array($result);
					$_SESSION['id']=$row[0];
					header( 'location: customerhome.php');
				}
			}
		}
		}
		
	}
}
?>
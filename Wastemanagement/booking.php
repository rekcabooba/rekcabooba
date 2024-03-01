<?php
session_start();
include 'connection.php';
$id=$_SESSION['id'];
$sql="SELECT `ward` FROM  `customer_registration`  WHERE `id`='$id' ";
// echo $sql;	
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
$ward=$row[0];
if($ward=='Ward-1' || $ward=='Ward-2' || $ward=='Ward-3')
$day='Monday';
if($ward=='Ward-4' || $ward=='Ward-5' || $ward=='Ward-6')
$day='Tuesday';
if($ward=='Ward-7' || $ward=='Ward-8' || $ward=='Ward-9')
$day='Wednesday';
if($ward=='Ward-10' || $ward=='Ward-11' || $ward=='Ward-12')
$day='Thursday';
if($ward=='Ward-13' || $ward=='Ward-14' || $ward=='Ward-15')
$day='Friday';
if($ward=='Ward-16' || $ward=='Ward-17' || $ward=='Ward-18')
$day='Saturday';
if($ward=='Ward-19' || $ward=='Ward-20' || $ward=='Ward-21')
$day='Sunday';
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Customer Home</title>
    <!-- google fonts -->

    <link href="//fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,400;0,600;0,700;1,600&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!--/Header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <h1><a class="navbar-brand" href="index.html">
                        <i class="fas fa-truck-moving"></i> Clean Space
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="">Booking</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Logout</a>
                        </li>
                    </ul>
                    <!--/search-->
                    <!-- <button id="trigger-overlay" class="searchw3-icon mx-xl-4 mx-lg-3" type="button"><i class="fas fa-search"></i></button> -->
                    <!-- open/close -->
                    <!-- <div class="overlay overlay-slidedown">
                        <button type="button" class="overlay-close"><i class="fas fa-times"></i></button>
                        <nav class="w3l-formhny">
                            <h5 class="mb-3">Search here</h5>
                            <form action="#" method="GET" class="d-sm-flex search-header">
                                <input class="form-control me-2" type="search" placeholder="Search here..." aria-label="Search" required>
                                <button class="btn btn-style btn-primary" type="submit">Search</button>
                            </form>
                        </nav>
                    </div> -->
                    <!--//search-->
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
	<section class="w3l-main-slider banner-slider" id="home">
                <div class="slider-info banner-view banner-top1">
                    <div class="container">
                        <div class="banner-info header-hero-19">
<body>
<div class="login-ic">
                    <form method="POST" action="">
						<table style="background-color:grey;" align="center">
							<tr>
                    <td>Category</td>
					<td><select name="category"  >
						<option selected disabled></option>
						<option>Plastic</option>
						<option>E-waste</option>
					</select></td></tr>
					<tr>
                    <td>date</td>
                    <td><input type="date" name="date" required="" min="<?php echo date('Y-m-d'); ?>"></input>
</td></tr>
<tr>
                    <td>Quantity</td>
                    <td><input type="text" name="sack" required="" pattern="[0-4]+"></input><div class="clear"> </div></td></tr>
					<tr>
						<td></td>
						<td>
                        <button name="customer" type="submit" class="btn btn-primary btn-lg">Book</button></a></td>
</tr>
</table>
<h3 style="color:white;">Note: Maximum allowed sacks for a user is 4</h3>
                    </form>
                </div>
                <?php
                if($_POST)
{
	include "connection.php";
	//$id=$_POST['customerid'];
	$sa=$_POST['sack'];
    $cat=$_POST['category'];
	$dt=$_POST['date'];
	$sql="select DAYNAME('$dt')";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
	if($row[0]==$day)
	{
		$sql1="INSERT INTO `customer_request`(`customerid`,`sack`,`date`,`category`,`status`) VALUES ('$id','$sa','$dt','$cat','Requested')";
		//echo $sql1;
		$result=mysqli_query($conn, $sql1);
        echo '<script>alert("Your bookin is succesful");</script>';
	}
	else{
		echo '<script>alert("You have no collection on this day");</script>';
	}
}
        ?>
</body>
</html>

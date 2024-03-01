<?php
session_start();
include 'connection.php';
$id=$_SESSION['id'];
$sql="SELECT `area` FROM  `collection_agent`  WHERE `caid`='$id' ";
// echo $sql;	
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
$area=$row[0];
if($area=='Ward-1, Ward-2, Ward-3')
{
    $warda="Ward-1";
    $wardb="Ward-2";
    $wardc="Ward-3";
}
elseif($area=='Ward-4, Ward-5, Ward-6')
{
    $warda="Ward-4";
    $wardb="Ward-5";
    $wardc="Ward-6";
}
elseif($area=='Ward-7, Ward-8, Ward-9')
{
    $warda="Ward-7";
    $wardb="Ward-8";
    $wardc="Ward-9";
}
elseif($area=='Ward-10, Ward-11, Ward-12')
{
    $warda="Ward-10";
    $wardb="Ward-11";
    $wardc="Ward-12";
}
elseif($area=='Ward-13, Ward-14, Ward-15')
{
    $warda="Ward-13";
    $wardb="Ward-14";
    $wardc="Ward-15";
}
elseif($area=='Ward-16, Ward-17, Ward-18')
{
    $warda="Ward-16";
    $wardb="Ward-17";
    $wardc="Ward-18";
}
elseif($area=='Ward-19, Ward-20, Ward-21')
{
    $warda="Ward-19";
    $wardb="Ward-20";
    $wardc="Ward-21";
}
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
    <title>Booked Slots</title>
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
                        <a class="nav-link" href="workerbooking.php">Booking</a>
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
    <!--//Header-->
    <!--/Banner-Start-->
    <!-- main-slider -->
    <section class="w3l-main-slider banner-slider" id="home">
                <div class="slider-info banner-view banner-top1">
                    <div class="container">
                        <div class="banner-info header-hero-19">
<table class="table table-bordered table-hover table-striped"  style="background-color:rgba(237, 231, 225, 0.5);margin-top:50px" align="center" >
		<thread>
			<th>ID</th>
			<th>CUSTOMER</th>
			<th>QUANTITY</th>
            <th>DATE</th>
            <th>CATEGORY</th>
            <th>STATUS</th>
        </thread>
		<tbody>
		<?php
		include'connection.php';
		$sql="select*from customer_request,customer_registration where customer_registration.id=customer_request.customerid and customer_registration.ward in ('$warda','$wardb','$wardc')";
        
        // echo $sql;
		$result=$conn->query($sql);
		while($row=$result->fetch_array())
		{
			echo"<tr><td>".$row['id']."</td>";
			echo"<td>".$row['name']."</td>";
			echo"<td>".$row['sack']."</td>";
            echo"<td>".$row['date']."</td>";
            echo"<td>".$row['category']."</td>";
            echo"<td>".$row['status']."</td>";
            if($row['status']=="Requested")
            {
                echo"<td><a href='updatebooking.php?id=".$row[0]."'>Mark as collected</td>";
            }
            echo '</tr>';
		}
	?>

	</tbody>
</table>
<li class="nav-item">
                            
                        
                        <a class="nav-link" href="booking.php">
                        
                        </li>
                        </div>
                    </div>
                </div>
    </section>
    <!-- //main-slider -->
    <!--/grids-->
    

        <!-- Js scripts -->
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fas fa-level-up-alt" aria-hidden="true"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

        </script>
        <!-- //move top -->
    </footer>
    <!--//footer-9 -->

    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!--/search-->
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/demo1.js"></script>
    <!--//search-->
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>

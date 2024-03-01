<?php
session_start();
$id=$_SESSION['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="login-ic">
                    <form method="POST" action="#">
                    <td>Category</td>
					<td><select name="category"  >
						<option selected disabled></option>
						<option>Plastic</option>
						<option>E-waste</option>
					</select></td>
                    <td>date</td>
                    <td><input type="date" name="date" required="" pattern="[YYYY-MM-DD]+"></input>
					
                    <td>Quantity</td>
                    <td><input type="text" name="sack" required="" pattern="[0-4]+"></input><div class="clear"> </div>
                        <button name="customer" class="btn btn-primary btn-lg">Book</button></a>
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

		$sql1="INSERT INTO customer_request(customerid,sack,date,category,status) VALUES ($id,$sa,'$dt','$cat','1')";
		//echo $sql1;
		//$result=mysqli_query($conn, $sql1);
}
        ?>
</body>
</html>


<?php
include 'connection.php';
$email=$_GET['id'];
$sql="update customer_request set status='Collected' where id='$email'" ;
$result=mysqli_query($conn,$sql);
echo '<script>location.href="workerbooking.php"</script>';
?>
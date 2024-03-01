<?php
include 'connection.php';
$email=$_GET['id'];
$status=$_GET['status'];
$sql="update login set status='$status' where uname='$email'" ;
$result=mysqli_query($conn,$sql);
echo '<script>location.href="customerdisp.php"</script>';
?>
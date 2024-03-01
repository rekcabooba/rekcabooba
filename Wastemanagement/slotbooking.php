<?php
include 'header.php';
include '../connection.php';
?>
<center>
<table border="2" width="50%">
    <tr>
      <th>date</th>
      <th>time</th>

      <th colspan="2">email</th>
    
    </tr>
    <?php
  
    $sql = "SELECT * from teacher,login,department where teacher.email=login.username and teacher.dpid=department.dpid";
    $result = $conn->query($sql);
    while ($row=$result->fetch_assoc())
     {
        echo "<tr><td>".$row['id']."</td>";
        echo "<td>".$row['dpid']."</td>";
        echo "<td>".$row['Name']."</td>";

          echo "<td>".$row['Phone']."</td>";
          echo "<td>".$row['Address']."</td>";
          echo "<td>".$row['Qualification']."</td>";
          echo "<td>".$row['Experience']."</td>";
          echo "<td>".$row['email']."</td>";
          if($row['status']==0)
          {
          echo "<td><a href='updateuser.php?id=".$row['email']."&status=1&url=teacherhome.php'>book slot</a></td>";

        }
    }
  ?>
</center>
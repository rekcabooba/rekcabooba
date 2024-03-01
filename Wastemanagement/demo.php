if ($result)
		{ 
			$row=mysqli_fetch_array($result);
			if($row['status']==0)
			echo "Unauthorized Login: Login Failed ";
		}
		else
		{ 
			if($row['usertype']=="admin")
				header('location: adminhome.php');
			else if ($row['usertype']=="worker")
				header('location: workerhome.php');
			else
			{
				if($row['usertype']=="customer")
					header( 'location: customerhome.php');
			}
		}   
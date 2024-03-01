<?php
			if(isset($_POST['submit']))
			{
				$name=$_POST['text name']
				$gender=$_POST['gender']
				$address=$_POST['text address']
				$contact=$_POST['text contact']
				$email=$_POST['text email']
				$password=$_POST['text password']
				$q="select count(*)from tbl login where username='$email'";
				$s=mysqli_query($conn,$q);
				$r=myqli_fetch_array($s);
				if($r[0]>0)
					{
						echo'<script>alert("user already registerd"
					</script>';
					}
				else
				{
					$q="insert in to table registration(name,gender,address,email,contact)values('$name',$gender','$address','$email','$contact')";
					$=mysqli_query($conn,$q);
					if($s)
					{
						$q="insert in to login(username,password,usertype)values('$email','$password','$customer','1')";
						$=mysqli_query($conn,$q);
						if($s)	
							{
								echo'<script>alert("registration successfull.login to continue")</script>';
							}
						else
							{
								echo'<script>alert("registration failed")</script>';
							}
					}
					else
					{
						echo'<script>alert("sorry some error occured")</script>';
					}
				}
			}
			?>

			<script type='text/javascript' src='web/js/jquery-2.2.3.min.js'></script>

			<!--scripts-->

			<!--//scripts-->
			<script src="web/js/jquery.magnific-popup.js" type="text/javascript"></script>
			<script>
				$(document).ready(function () {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});

				});
			</script>
			<!-- //pop-up-box video -->
			<!-- //js -->
			<!-- Calendar -->
				<script src="web/js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
			
<a href='index.html'>Bck to home page</a>
 </body>
</html>


<?php
if(isset($_REQUEST['up'])){
  if($_POST)
    {
        $id = $_POST['id'];
        $username = $_POST['user_name'];
        $email = $_POST['e-mail'];
		$address = $_POST['address'];
        $phonenumber = $_POST['phone-number'];
        $pass = $_POST['Password'];
        if(!empty($fname)  !empty($uname)  !empty($pass)  !empty($phone)  !empty($des) || !empty($dep)){
          
            include 'server.php';
    
            $query = "INSERT INTO sign_up_tb (usname,passw,phone,designation,department) VALUES('$uname','$pass','$phone','$des','$dep')";
        //$query = "INSERT INTO fac_tb (id, user_name,e-mail,address,phone-number,Password) VALUES ($id,'$name','$email','$address',$phno,'$password')";
        //$query = "INSERT INTO login_tb (uname,pass,usertype) VALUES ('$uname','$pass','usertype')";
        $result = mysqli_query($conn, $query);
        if($result)
        {
            echo "Data Inserted";
        }
        else
        {
            echo "Data not Inserted";
        }
    }
  }
}
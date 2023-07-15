	<?php
	session_start();
	include_once("conn.php");
	
	$Name = $_POST["Name"];
	
	$Uname = $_POST["Uname"];
	
	$Pass = $_POST["Pass"];
	
	$Email = $_POST["Email"];

	$sql="INSERT INTO info (Name,Uname,Pass,Email
) VALUES('$Name','$Uname','$Pass','$Email')";

if(isset($_POST["submit"]))
	{
        if($conn)
			{
            	if(mysqli_query($conn,$sql))
					{
                		$_SESSION['login-msg'] ="Successfully Registered <br> You can now login ";
                		header("location:index.php");
            		}
        	}
	}
?>
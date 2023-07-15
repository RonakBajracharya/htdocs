<?php
	require_once("conn.php");
	session_start();
	if(isset($_POST['submit'])) 
		{
    		$Uname = $_POST['Uname'];
    		$Pass = $_POST['Pass'];
   		}
    $sql = "Select * from `info` where `Uname`='$Uname' and `Pass`='$Pass'";
    $result = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($result);
	if($row <> 0)
		{
			$output = mysqli_fetch_assoc($result);
			$_SESSION["username"] = $output['Uname'];
			$_SESSION["userpass"] = $output['Pass'];
			header("location:home.php");
		}
	else
		{
			$_SESSION["login-msg"] = "Incorrect Username or Password";
			header("location:home.php");
		}
?>
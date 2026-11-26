<?php
	session_start();
	include("connectDB.php");
	
	$uname	= mysqli_real_escape_string($condb, $_POST['uname']);
	$pword	= mysqli_real_escape_string($condb, $_POST['pword']);
	
	if(($uname == "12345") && ($pword == "admin"))
	{
		$_SESSION['el_login']	= "YES";
		
		$url = "Location: index.php";
		header($url);
		exit;
	}
	else
	{
		$problem = "failed";
		
		$url = "Location: login.php?err=$problem";
		header($url);
		exit;
	}
?>
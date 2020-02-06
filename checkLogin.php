<?php
	session_start();
	include("connectDB.php");
	
	$uname	= mysql_real_escape_string($_POST['uname']);
	$pword	= mysql_real_escape_string($_POST['pword']);
	
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
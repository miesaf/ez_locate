<?php
	session_start();
	
	unset($_SESSION['el_login']);
	// session_destroy();
?>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ez_locate</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	
	<script>
		window.alert("Anda telah mendaftar keluar!");
	</script>
</head>
<body>
		<!--<h1> Goodbye</h1>-->
		<meta http-equiv="refresh" content="0; url=login.php" />
</body>
</html>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ez_locate</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-6.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="../ezloc/" class="simple-text">
                    ez_locate
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="index.php">
                        <i class="pe-7s-home"></i>
                        <p>Laman Utama</p>
                    </a>
                </li>
                <li>
                    <a href="lawatan.php">
                        <i class="pe-7s-global"></i>
                        <p>Lawatan</p>
                    </a>
                </li>
                <li>
                    <a href="penceramah.php">
                        <i class="pe-7s-study"></i>
                        <p>Penceramah</p>
                    </a>
                </li>
<?php
			session_start();
			if(isset($_SESSION['el_login']))
			{
?>
				<li>
                    <a href="pendaftaran.php">
                        <i class="pe-7s-plus"></i>
                        <p>Tambah Data</p>
                    </a>
                </li>
				<li>
                    <a href="cadangan.php">
                        <i class="pe-7s-hourglass"></i>
                        <p>Senarai Cadangan</p>
                    </a>
                </li>
				<li>
                    <a href="senarai_hit.php">
                        <i class="pe-7s-attention"></i>
                        <p>Senarai Hitam</p>
                    </a>
                </li>
				<li>
                    <a href="logout.php">
                        <i class="pe-7s-power"></i>
                        <p>Daftar Keluar</p>
                    </a>
                </li>
<?php
			}
			else
			{
?>
				<li>
                    <a href="cadang.php">
                        <i class="pe-7s-plus"></i>
                        <p>Cadangan</p>
                    </a>
                </li>
				<li>
                    <a href="login.php">
                        <i class="pe-7s-id"></i>
                        <p>Admin</p>
                    </a>
                </li>
<?php
			}
?>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../ezloc/">Laman Utama</a>
                </div>
                <div class="collapse navbar-collapse">
					
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
<?php
if(isset($_SESSION["el_login"]))
{
?>
                <div class="row">
					<div class="col-md-6">
                        <div class="card">
							<div class="alert alert-success">
								<span><b> Notifikasi - </b> Anda telah berjaya mendaftar masuk.</span>
							</div>
                        </div>
                    </div>
				</div>
<?php
}
?>
				<div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="content">
								<h4 class="title">Selamat Datang</h4>
                                <p class="category">Selamat datang ke ez_locate oleh Kumpulan Inovatif dan Kreatif (KIK) D'Forte</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){
        	demo.initChartist();
    	});
	</script>

</html>

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
	
<?php
	session_start();
	if(isset($_SESSION['el_login']))
	{
		header("Location: index.php");
		exit;
	}
	
	include('connectDB.php');
	
	if(isset($_POST["CAD"]) && ($_POST["CAD"] == "LAW"))
	{
		// Variables from pendaftaran.php
		$NAMA		= mysql_real_escape_string($_POST['NAMA']);
		$ALAMAT		= mysql_real_escape_string($_POST['ALAMAT']);
		$NEGERI		= mysql_real_escape_string($_POST['NEGERI']);
		$SEKTOR		= mysql_real_escape_string($_POST['SEKTOR']);
		$INDUS		= mysql_real_escape_string($_POST['INDUS']);
		$PEGAWAI	= mysql_real_escape_string($_POST['PEGAWAI']);
		
		//SQL query command
		$sql="INSERT INTO CAD_LAWATAN (NAMA, ALAMAT, NEGERI, SEKTOR, INDUS, PEGAWAI) VALUES (\"$NAMA\", \"$ALAMAT\", \"$NEGERI\", \"$SEKTOR\", \"$INDUS\", \"$PEGAWAI\") ";
		
		// execute query
		$exe_sql = mysql_query($sql);
		
		// confirming the record is added
		if ($exe_sql)
		{
			echo '<html>
					<head>
						<script>
							window.alert("Pendaftaran data bagi cadangan lawatan berjaya!");
						</script>
						<meta http-equiv="refresh" content="0; url=cadang.php?CAD=law" />
					</head>
				</html>';
		}
		else
		{
			echo "SQL insert statement failed.<br>" . mysql_error();
			echo '<html>
					<head>
						<script>
							window.alert("Pendaftaran data bagi cadangan lawatan gagal!");
							window.history.go(-1);
						</script>
					</head>
				</html>';
		}
	}
	
	if(isset($_POST["CAD"]) && ($_POST["CAD"] == "BEN"))
	{
		// Variables from pendaftaran.php
		$NAMA		= mysql_real_escape_string($_POST['NAMA']);
		$ALAMAT		= mysql_real_escape_string($_POST['ALAMAT']);
		$NEGERI		= mysql_real_escape_string($_POST['NEGERI']);
		$SEKTOR		= mysql_real_escape_string($_POST['SEKTOR']);
		$INDUS		= mysql_real_escape_string($_POST['INDUS']);
		$PENCERAMAH	= mysql_real_escape_string($_POST['PENCERAMAH']);
		$JAWATAN	= mysql_real_escape_string($_POST['JAWATAN']);
		$KELAYAKAN	= mysql_real_escape_string($_POST['KELAYAKAN']);
		$KEMAHIRAN	= mysql_real_escape_string($_POST['KEMAHIRAN']);
		
		//SQL query command
		$sql="INSERT INTO CAD_BENGKEL (NAMA, ALAMAT, NEGERI, SEKTOR, INDUS, PENCERAMAH, JAWATAN, KELAYAKAN, KEMAHIRAN) VALUES (\"$NAMA\", \"$ALAMAT\", \"$NEGERI\", \"$SEKTOR\", \"$INDUS\", \"$PENCERAMAH\", \"$JAWATAN\", \"$KELAYAKAN\", \"$KEMAHIRAN\")";
		
		// execute query
		$exe_sql = mysql_query($sql);
		
		// confirming the record is added
		if ($exe_sql)
		{
			echo '<html>
					<head>
						<script>
							window.alert("Pendaftaran data bagi cadangan penceramah berjaya!");
						</script>
						<meta http-equiv="refresh" content="0; url=cadang.php?CAD=ben" />
					</head>
				</html>';
		}
		else
		{
			echo "SQL insert statement failed.<br>" . mysql_error();
			echo '<html>
					<head>
						<script>
							window.alert("Pendaftaran data bagi cadangan penceramah gagal!");
							window.history.go(-1);
						</script>
					</head>
				</html>';
		}
	}
?>

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
                <li>
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
				<li class="active">
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
                    <a class="navbar-brand" href="cadang.php">Cadang Data</a>
                </div>
                <div class="collapse navbar-collapse">
					
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
<?php
	if(!isset($_GET["CAD"]))
	{
?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Cadang Data Baru</h4>
                                <p class="category">Sila pilih kategori berkaitan.</p>
                            </div>
                            <div class="content">
								<center>
									<a href="cadang.php?CAD=law"><button class="btn btn-fill btn-info">Lawatan</button></a>
									<a href="cadang.php?CAD=ben"><button class="btn btn-fill btn-warning">Penceramah</button></a>
								</center>
                            </div>
                        </div>
                    </div>
<?php
	}
	
	if(isset($_GET["CAD"]) && ($_GET["CAD"] == "law"))
	{
?>
					<div class="col-md-10">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Cadang Data Baru</h4>
                                <p class="category">Lawatan</p>
                            </div>
                            <div class="content">
								<form id="LAW" action="cadang.php" method="POST">
									<input type="hidden" name="CAD" value="LAW">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Nama Organisasi</label>
                                                <input type="text" class="form-control" name="NAMA">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Alamat Organisasi</label>
                                                <textarea rows="5" class="form-control" name="ALAMAT"></textarea>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Negeri</label>
                                                <select class="form-control" name="NEGERI">
													<option disabled selected> Sila pilih </option>
													<option disabled> </option>
<?php
		$sql_choose = "SELECT * FROM NEGERI";
		$result_choose = mysql_query($sql_choose);
		while ($row = mysql_fetch_array($result_choose))
		{
			$NEG1 = $row["ID_NEGERI"];
			$NEG2 = $row["NEGERI"];
?>
													<option value="<?php echo $NEG1; ?>"> <?php echo $NEG2;?> </option>
<?php
		}
?>
												</select>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Sektor</label>
                                                <select class="form-control" name="SEKTOR">
													<option disabled selected> Sila pilih </option>
													<option disabled> </option>
													<option value="Swasta"> Swasta </option>
													<option value="Kerajaan"> Kerajaan </option>
												</select>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Industri</label>
                                                <select class="form-control" name="INDUS">
													<option disabled selected> Sila pilih </option>
													<option disabled> </option>
<?php
		$sql_choose = "SELECT * FROM INDUS";
		$result_choose = mysql_query($sql_choose);
		while ($row = mysql_fetch_array($result_choose))
		{
			$IND1 = $row["ID_INDUS"];
			$IND2 = $row["INDUSTRI"];
?>
													<option value="<?php echo $IND1; ?>"> <?php echo $IND2;?> </option>
<?php
		}
?>
												</select>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Nama Pegawai & Nombor Telefon</label>
												<textarea rows="5" class="form-control" name="PEGAWAI"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button form="LAW" type="submit" class="btn btn-success btn-fill pull-left">Cadang</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
<?php
	}
	
	if(isset($_GET["CAD"]) && ($_GET["CAD"] == "ben"))
	{
?>
					<div class="col-md-10">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Cadang Data Baru</h4>
                                <p class="category">Penceramah</p>
                            </div>
                            <div class="content">
								<form id="BEN" action="cadang.php" method="POST">
									<input type="hidden" name="CAD" value="BEN">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Nama Organisasi</label>
                                                <input type="text" class="form-control" name="NAMA">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Alamat Organisasi</label>
                                                <textarea rows="5" class="form-control" name="ALAMAT"></textarea>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Negeri</label>
                                                <select class="form-control" name="NEGERI">
													<option disabled selected> Sila pilih </option>
													<option disabled> </option>
<?php
		$sql_choose = "SELECT * FROM NEGERI";
		$result_choose = mysql_query($sql_choose);
		while ($row = mysql_fetch_array($result_choose))
		{
			$NEG1 = $row["ID_NEGERI"];
			$NEG2 = $row["NEGERI"];
?>
													<option value="<?php echo $NEG1; ?>"> <?php echo $NEG2;?> </option>
<?php
		}
?>
												</select>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Sektor</label>
                                                <select class="form-control" name="JENIS">
													<option disabled selected> Sila pilih </option>
													<option disabled> </option>
													<option value="Swasta"> Swasta </option>
													<option value="Kerajaan"> Kerajaan </option>
												</select>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Industri</label>
                                                <select class="form-control" name="INDUS">
													<option disabled selected> Sila pilih </option>
													<option disabled> </option>
<?php
		$sql_choose = "SELECT * FROM INDUS";
		$result_choose = mysql_query($sql_choose);
		while ($row = mysql_fetch_array($result_choose))
		{
			$IND1 = $row["ID_INDUS"];
			$IND2 = $row["INDUSTRI"];
?>
													<option value="<?php echo $IND1; ?>"> <?php echo $IND2;?> </option>
<?php
		}
?>
												</select>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Nama & Nombor Telefon Penceramah</label>
												<textarea rows="5" class="form-control" name="PENCERAMAH"></textarea>
                                            </div>
                                        </div>
                                    </div>

									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Jawatan</label>
                                                <input type="text" class="form-control" name="JAWATAN">
                                            </div>
                                        </div>
                                    </div>
									
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Kelayakan</label>
                                                <select class="form-control" name="KELAYAKAN">
													<option disabled selected> Sila pilih </option>
													<option disabled> </option>
<?php
		$sql_choose = "SELECT * FROM KELAYAKAN";
		$result_choose = mysql_query($sql_choose);
		while ($row = mysql_fetch_array($result_choose))
		{
			$KEL1 = $row["ID_KEL"];
			$KEL2 = $row["KEL"];
?>
													<option value="<?php echo $KEL1; ?>"> <?php echo $KEL2;?> </option>
<?php
		}
?>
												</select>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Bidang</label>
                                                <select class="form-control" name="KEMAHIRAN">
													<option disabled selected> Sila pilih </option>
													<option disabled> </option>
													<option value="Perakaunan"> Perakaunan </option>
													<option value="Bukan Perakaunan"> Bukan Perakaunan </option>
												</select>
                                            </div>
                                        </div>
                                    </div>
									
                                    <button form="BEN" type="submit" class="btn btn-success btn-fill pull-left">Cadang</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
<?php
	}
?>
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

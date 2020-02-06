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
	if(!$_SESSION['el_login'])
	{
		header("Location: index.php?ERR=expired");
		exit;
	}
	
	include('connectDB.php');
	
	// Pinda Kompeni
		if(isset($_POST['PIN']))
		{
			$ID_PIN		= mysql_real_escape_string($_POST['PIN']);
			$NAMA		= mysql_real_escape_string($_POST['NAMA']);
			$ALAMAT		= mysql_real_escape_string($_POST['ALAMAT']);
			$NEGERI		= mysql_real_escape_string($_POST['NEGERI']);
			$SEKTOR		= mysql_real_escape_string($_POST['SEKTOR']);
			$INDUS		= mysql_real_escape_string($_POST['INDUS']);
			$PENCERAMAH	= mysql_real_escape_string($_POST['PENCERAMAH']);
			$JAWATAN	= mysql_real_escape_string($_POST['JAWATAN']);
			$KELAYAKAN	= mysql_real_escape_string($_POST['KELAYAKAN']);
			$KEMAHIRAN	= mysql_real_escape_string($_POST['KEMAHIRAN']);
			
			$sql="UPDATE BENGKEL SET NAMA = '$NAMA', ALAMAT = '$ALAMAT', NEGERI = '$NEGERI', SEKTOR = '$SEKTOR', INDUS = '$INDUS', PENCERAMAH = '$PENCERAMAH', JAWATAN = '$JAWATAN', KELAYAKAN = '$KELAYAKAN', KEMAHIRAN = '$KEMAHIRAN' WHERE ID_BEN = $ID_PIN";
			
			// execute query
			$exe_sql = mysql_query($sql);
			
			// confirming the record is added
			if ($exe_sql)
			{
				echo '<html>
						<head>
							<script>
								window.alert("Pindaan data penceramah berjaya!");
							</script>
							<meta http-equiv="refresh" content="0; url=penceramah.php" />
						</head>
					</html>';
			}
			else
			{
				echo "SQL insert statement failed.<br>" . mysql_error();
				echo '<html>
						<head>
							<script>
								window.alert("Pindaan data penceramah gagal!");
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
                    <a class="navbar-brand" href="pinda_ben.php">Pinda Data</a>
                </div>
                <div class="collapse navbar-collapse">
					
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
<?php
	if(isset($_GET["ID"]))
	{
		$ID		= $_GET["ID"];
		
		$sql	= "SELECT * FROM BENGKEL WHERE ID_BEN = $ID";
		$result	= mysql_query($sql);
		if($row = mysql_fetch_array($result))
		{
			$ID_BEN 	= $row["ID_BEN"];
			$NAMA 		= $row["NAMA"];
			$ALAMAT 	= $row["ALAMAT"];
			$NEGERI 	= $row["NEGERI"];
			$SEKTOR 	= $row["SEKTOR"];
			$INDUS 		= $row["INDUS"];
			$PENCERAMAH	= $row["PENCERAMAH"];
			$JAWATAN	= $row["JAWATAN"];
			$KELAYAKAN	= $row["KELAYAKAN"];
			$KEMAHIRAN 	= $row["KEMAHIRAN"];
?>
					<div class="col-md-10">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Pinda Data Penceramah</h4>
                            </div>
                            <div class="content">
								<form id="BEN" action="pinda_ben.php" method="POST">
									<input type="hidden" name="PIN" value="<?php echo $ID_BEN; ?>">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Nama Organisasi</label>
                                                <input type="text" class="form-control" name="NAMA" value="<?php echo $NAMA; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Alamat Organisasi</label>
                                                <textarea rows="5" class="form-control" name="ALAMAT"><?php echo $ALAMAT; ?></textarea>
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
				$SEL	= null;
				
				$NEG1 = $row["ID_NEGERI"];
				$NEG2 = $row["NEGERI"];
				
				if($NEGERI == $NEG1)
				{	$SEL = "selected"; }
?>
													<option value="<?php echo $NEG1; ?>" <?php echo $SEL; ?>> <?php echo $NEG2;?> </option>
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
													<option value="Swasta" <?php if($SEKTOR == "Swasta"){ echo "selected"; } ?>> Swasta </option>
													<option value="Kerajaan" <?php if($SEKTOR == "Kerajaan"){ echo "selected"; } ?>> Kerajaan </option>
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
				$SEL	= null;
				
				$IND1 = $row["ID_INDUS"];
				$IND2 = $row["INDUSTRI"];
				
				if($INDUS == $IND1)
				{	$SEL = "selected"; }
?>
													<option value="<?php echo $IND1; ?>" <?php echo $SEL; ?>> <?php echo $IND2;?> </option>
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
												<textarea rows="5" class="form-control" name="PENCERAMAH"><?php echo $PENCERAMAH; ?></textarea>
                                            </div>
                                        </div>
                                    </div>

									<div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Jawatan</label>
                                                <input type="text" class="form-control" name="JAWATAN" value="<?php echo $JAWATAN; ?>">
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
				$SEL	= null;
				
				$KEL1 = $row["ID_KEL"];
				$KEL2 = $row["KEL"];
				
				if($KELAYAKAN == $KEL1)
				{	$SEL = "selected"; }
?>
													<option value="<?php echo $KEL1; ?>" <?php echo $SEL; ?>> <?php echo $KEL2;?> </option>
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
													<option value="Perakaunan" <?php if($KEMAHIRAN == "Perakaunan"){ echo "selected"; } ?>> Perakaunan </option>
													<option value="Bukan Perakaunan" <?php if($KEMAHIRAN == "Bukan Perakaunan"){ echo "selected"; } ?>> Bukan Perakaunan </option>
												</select>
                                            </div>
                                        </div>
                                    </div>
									
                                    <button form="BEN" type="submit" class="btn btn-success btn-fill pull-left">Daftar</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
<?php
		}
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

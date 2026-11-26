<?php ob_start(); ?>
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
	include('connectDB.php');
	
	// Admin only
	require_login();
	
	if(isset($_GET["L_LAW"]))
	{
		// Variables from pendaftaran.php
		$ID	= request_id($_GET, "L_LAW");
		
		// copy the row to LAWATAN and delete it from HIT_LAWATAN
		$sql	= "INSERT INTO LAWATAN (NAMA, ALAMAT, NEGERI, SEKTOR, INDUS, PEGAWAI) SELECT NAMA, ALAMAT, NEGERI, SEKTOR, INDUS, PEGAWAI FROM HIT_LAWATAN WHERE ID_LAW = ?";
		$sql2	= "DELETE FROM HIT_LAWATAN WHERE ID_LAW = ?";
		
		if ($ID !== null && db_move($sql, $sql2, $ID))
		{
			echo '<html>
					<head>
						<script>
							window.alert("Status bagi data lawatan berjaya diubah!");
						</script>
						<meta http-equiv="refresh" content="0; url=lawatan.php?NEG=&SEK=&IND=" />
					</head>
				</html>';
		}
		else
		{
			echo "SQL insert statement failed.<br>";
			
			echo '<html>
					<head>
						<script>
							window.alert("Status bagi data lawatan gagal diubah!");
							window.history.go(-1);
						</script>
					</head>
				</html>';
				
		}
	}
	
	if(isset($_GET["L_BEN"]))
	{
		// Variables from pendaftaran.php
		$ID	= request_id($_GET, "L_BEN");
		
		// copy the row to BENGKEL and delete it from HIT_BENGKEL
		$sql	= "INSERT INTO BENGKEL (NAMA, ALAMAT, NEGERI, SEKTOR, INDUS, PENCERAMAH, JAWATAN, KELAYAKAN, KEMAHIRAN) SELECT NAMA, ALAMAT, NEGERI, SEKTOR, INDUS, PENCERAMAH, JAWATAN, KELAYAKAN, KEMAHIRAN FROM HIT_BENGKEL WHERE ID_BEN = ?";
		$sql2	= "DELETE FROM HIT_BENGKEL WHERE ID_BEN = ?";
		
		if ($ID !== null && db_move($sql, $sql2, $ID))
		{
			echo '<html>
					<head>
						<script>
							window.alert("Status bagi data penceramah berjaya diubah!");
						</script>
						<meta http-equiv="refresh" content="0; url=penceramah.php?NEG=&SEK=&IND=" />
					</head>
				</html>';
		}
		else
		{
			echo "SQL insert statement failed.<br>";
			
			echo '<html>
					<head>
						<script>
							window.alert("Status bagi data penceramah gagal diubah!");
							window.history.go(-1);
						</script>
					</head>
				</html>';
		}
	}
	
	// Padam Lawatan
	if(isset($_GET['P_LAW']))
	{
		// get ID value
		$ID = request_id($_GET, 'P_LAW');
		
		// delete the entry
		$result = $ID !== null && db_query("DELETE FROM HIT_LAWATAN WHERE ID_LAW = ?", [$ID]) && mysqli_affected_rows($condb) === 1;
		
		// check for deletion
		if ($result)
		{
		   echo '<html>
					<head>
						<script>
							window.alert("Data lawatan berjaya di padam!");
							window.history.go(-1);
						</script>
						<!--<meta http-equiv="refresh" content="0; url=senarai_hit.php?HIT=law" />-->
					</head>
				</html>';
		}
		else
		{
			//echo "SQL insert statement failed.<br>";
			echo '<html>
					<head>
						<script>
							window.alert("Data lawatan gagal di padam!");
							window.history.go(-1);
						</script>
					</head>
				</html>';
		}
	}
	
	// Padam Penceramah
	if(isset($_GET['P_BEN']))
	{
		// get ID value
		$ID = request_id($_GET, 'P_BEN');
		
		// delete the entry
		$result = $ID !== null && db_query("DELETE FROM HIT_BENGKEL WHERE ID_BEN = ?", [$ID]) && mysqli_affected_rows($condb) === 1;
		
		// check for deletion
		if ($result)
		{
		   echo '<html>
					<head>
						<script>
							window.alert("Data penceramah berjaya di padam!");
							window.history.go(-1);
						</script>
						<!--<meta http-equiv="refresh" content="0; url=senarai_hit.php?HIT=ben" />-->
					</head>
				</html>';
		}
		else
		{
			//echo "SQL insert statement failed.<br>";
			echo '<html>
					<head>
						<script>
							window.alert("Data penceramah gagal di padam!");
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
	if(!empty($_SESSION['el_login']))
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
				<li class="active">
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
                    <a class="navbar-brand" href="senarai_hit.php">Senarai Hitam</a>
                </div>
                <div class="collapse navbar-collapse">
					
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
<?php
	if(!isset($_GET["HIT"]))
	{
?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Senarai Data Disenarai Hitam</h4>
                                <p class="category">Sila pilih kategori berkaitan.</p>
                            </div>
                            <div class="content">
								<center>
									<a href="senarai_hit.php?HIT=law"><button class="btn btn-fill btn-info">Lawatan</button></a>
									<a href="senarai_hit.php?HIT=ben"><button class="btn btn-fill btn-warning">Penceramah</button></a>
								</center>
                            </div>
                        </div>
                    </div>
<?php
	}
	
	if(isset($_GET["HIT"]) && ($_GET["HIT"] == "law"))
	{
		// create the listing query
		$sql = "SELECT * FROM HIT_LAWATAN ORDER BY NEGERI, NAMA";
		
		// execute listing query
		$result = db_query($sql) or die("SQL select statement failed");
?>
					<div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Senarai Hitam</h4>
                                <p class="category">Lawatan</p>
                            </div>
                            <div class="content">
								<table class="table table-hover table-striped">
                                    <thead>
										<th>Bil.</th>
                                        <th>Nama Organisasi</th>
                                    	<th>Alamat</th>
                                    	<th>Sektor</th>
                                    	<th>Industri</th>
                                    	<th>Pegawai</th>
										<th>Tindakan</th>
                                    </thead>
                                    <tbody>
<?php                            
	// Papar table           
		// Initialise index number
		$BIL = 0;
		
		$DNEG = [];
		$DIND = [];
		
		// Display negeri name array
		$sql_dneg		= "SELECT * FROM NEGERI";
		$result_dneg	= db_query($sql_dneg);
		while($row_dneg	= mysqli_fetch_array($result_dneg))
		{
			$DID_NEG		= $row_dneg["ID_NEGERI"];
			$DNEG2			= $row_dneg["NEGERI"];
			$DNEG[$DID_NEG]	= $DNEG2;
		}
		
		// Display industri name array
		$sql_dind		= "SELECT * FROM INDUS";
		$result_dind	= db_query($sql_dind);
		while($row_dind = mysqli_fetch_array($result_dind))
		{
			$DID_IND		= $row_dind["ID_INDUS"];
			$DIND2			= $row_dind["INDUSTRI"];
			$DIND[$DID_IND]	= $DIND2;
		}
		
		// iterate through all rows in result set
		while ($row = mysqli_fetch_array($result))
		{
			$BIL++;
			
			// extract specific fields
			$ID_LAW		= (int) $row['ID_LAW'];
			$NAMA		= $row['NAMA'];
			$ALAMAT		= $row['ALAMAT'];
			$NEGERI		= $row['NEGERI'];
			$SEKTOR		= $row['SEKTOR'];
			$INDUS		= $row['INDUS'];
			$PEGAWAI	= $row['PEGAWAI'];
			
			// Display subtitutes
			$DNEGERI	= $DNEG[$NEGERI] ?? $NEGERI;
			$DINDUS		= $DIND[$INDUS] ?? $INDUS;
			
			$DALAMAT	= nl2br(e($ALAMAT)) . ",<br><b>" . e($DNEGERI) . "</b>.";
?>
										<tr>
                                        	<td><?php echo $BIL; ?></td>
                                        	<td><?php echo e($NAMA); ?></td>
                                        	<td><?php echo $DALAMAT; ?></td>
                                        	<td><?php echo e($SEKTOR); ?></td>
											<td><?php echo e($DINDUS); ?></td>
                                        	<td><?php echo nl2br(e($PEGAWAI)); ?></td>
											<td align="center"><button class="btn btn-xs btn-success btn-fill" type="button" value="Senarai Putih" onClick='confirmHITL(<?php echo e($ID_LAW); ?>)'>Senarai Putih</button><br><br><button class="btn btn-xs btn-danger btn-fill" type="button" value="Padam" onClick='confirmDell(<?php echo e($ID_LAW); ?>)'>Padam</button></td>
                                        </tr>
<?php
		}
		
		if($BIL == 0)
		{
?>
										<tr>
                                        	<td align="center" colspan="7"><i>Tiada data untuk dipaparkan</i></td>
                                        </tr>
<?php
		}
?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<?php
	}
	
	if(isset($_GET["HIT"]) && ($_GET["HIT"] == "ben"))
	{
		// create the listing query
		$sql = "SELECT * FROM HIT_BENGKEL ORDER BY NEGERI, NAMA";
		
		// execute listing query
		$result = db_query($sql) or die("SQL select statement failed");
?>
					<div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Senarai Hitam</h4>
                                <p class="category">Penceramah</p>
                            </div>
                            <div class="content table-responsive table-full-width">
								<table class="table table-hover table-striped">
                                    <thead>
										<th>Bil.</th>
                                        <th>Nama Organisasi</th>
                                    	<th>Alamat</th>
                                    	<th>Sektor</th>
                                    	<th>Industri</th>
                                    	<th>Penceramah</th>
										<th>Kelayakan</th>
										<th>Bidang</th>
										<th>Tindakan</th>
                                    </thead>
                                    <tbody>
<?php                            
	// Papar table
            
		// Initialise index number
		$BIL = 0;
		
		$DNEG = [];
		$DIND = [];
		$DKEL = [];
		
		// Display negeri name array
		$sql_dneg		= "SELECT * FROM NEGERI";
		$result_dneg	= db_query($sql_dneg);
		while($row_dneg	= mysqli_fetch_array($result_dneg))
		{
			$DID_NEG		= $row_dneg["ID_NEGERI"];
			$DNEG2			= $row_dneg["NEGERI"];
			$DNEG[$DID_NEG]	= $DNEG2;
		}
		
		// Display industri name array
		$sql_dind		= "SELECT * FROM INDUS";
		$result_dind	= db_query($sql_dind);
		while($row_dind = mysqli_fetch_array($result_dind))
		{
			$DID_IND		= $row_dind["ID_INDUS"];
			$DIND2			= $row_dind["INDUSTRI"];
			$DIND[$DID_IND]	= $DIND2;
		}
		
		// Display industri name array
		$sql_dkel		= "SELECT * FROM KELAYAKAN";
		$result_dkel	= db_query($sql_dkel);
		while($row_dkel = mysqli_fetch_array($result_dkel))
		{
			$DID_KEL		= $row_dkel["ID_KEL"];
			$DKEL2			= $row_dkel["KEL"];
			$DKEL[$DID_KEL]	= $DKEL2;
		}
		
		// iterate through all rows in result set
		while ($row = mysqli_fetch_array($result))
		{
			$BIL++;
			
			// extract specific fields
			$ID_BEN		= (int) $row['ID_BEN'];
			$NAMA		= $row['NAMA'];
			$ALAMAT		= $row['ALAMAT'];
			$NEGERI		= $row['NEGERI'];
			$SEKTOR		= $row['SEKTOR'];
			$INDUS		= $row['INDUS'];
			$PENCERAMAH	= $row['PENCERAMAH'];
			$JAWATAN	= $row['JAWATAN'];
			$KELAYAKAN	= $row['KELAYAKAN'];
			$KEMAHIRAN	= $row['KEMAHIRAN'];
			
			// Display subtitutes
			$DNEGERI	= $DNEG[$NEGERI] ?? $NEGERI;
			$DINDUS		= $DIND[$INDUS] ?? $INDUS;
			$DKELAYAKAN	= $DKEL[$KELAYAKAN] ?? $KELAYAKAN;
			
			$DALAMAT	= nl2br(e($ALAMAT)) . ",<br><b>" . e($DNEGERI) . "</b>.";
?>
										<tr>
                                        	<td><?php echo $BIL; ?></td>
                                        	<td><?php echo e($NAMA); ?></td>
                                        	<td><?php echo $DALAMAT; ?></td>
                                        	<td><?php echo e($SEKTOR); ?></td>
											<td><?php echo e($DINDUS); ?></td>
                                        	<td><?php echo nl2br(e($PENCERAMAH)) . "<br><b>(" . e($JAWATAN) . ")</b>"; ?></td>
											<td><?php echo e($DKELAYAKAN); ?></td>
											<td><?php echo e($KEMAHIRAN); ?></td>
											<td align="center"><button class="btn btn-xs btn-success btn-fill" type="button" value="Senarai Putih" onClick='confirmHITP(<?php echo e($ID_BEN); ?>)'>Senarai Putih</button><br><br><button class="btn btn-xs btn-danger btn-fill" type="button" value="Padam" onClick='confirmDelb(<?php echo e($ID_BEN); ?>)'>Padam</button></td>
                                        </tr>
<?php
		}
		
		if($BIL == 0)
		{
?>
										<tr>
                                        	<td align="center" colspan="9"><i>Tiada data untuk dipaparkan</i></td>
                                        </tr>
<?php
		}
?>
                                    </tbody>
                                </table>
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
		
		function confirmDell(nums)
		{
			var del = confirm("Adakah anda pasti untuk memadam data lawatan ini?");
			if (del == true)
			{
				window.location.assign("senarai_hit.php?P_LAW=" + nums);
			} else 
			{
				alert("Data lawatan tidak di padam.");
			}
		}
		
		function confirmDelb(nums)
		{
			var del = confirm("Adakah anda pasti untuk memadam data bengkel ini?");
			if (del == true)
			{
				window.location.assign("senarai_hit.php?P_BEN=" + nums);
			} else 
			{
				alert("Data penceramah tidak di padam.");
			}
		}
		
		function confirmHITL(num_h)
		{
			var hit = confirm("Adakah anda pasti untuk menyenarai putih semula data lawatan ini?");
			if (hit == true)
			{
				window.location.assign("senarai_hit.php?L_LAW=" + num_h);
			} else 
			{
				alert("Data lawatan tidak disenarai putih.");
			}
		}
		
		function confirmHITP(num_h)
		{
			var hit = confirm("Adakah anda pasti untuk menyenarai putih semula data penceramah ini?");
			if (hit == true)
			{
				window.location.assign("senarai_hit.php?L_BEN=" + num_h);
			} else 
			{
				alert("Data penceramah tidak disenarai putih.");
			}
		}
	</script>

</html>

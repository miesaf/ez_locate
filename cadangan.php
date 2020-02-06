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
		header("Location: index.php");
		exit;
	}
	
	include('connectDB.php');
	
	if(isset($_GET["L_LAW"]))
	{
		// Variables from pendaftaran.php
		$ID	= $_GET["L_LAW"];
		
		//SQL query command
		$sql="INSERT INTO LAWATAN (NAMA, ALAMAT, NEGERI, SEKTOR, INDUS, PEGAWAI) SELECT NAMA, ALAMAT, NEGERI, SEKTOR, INDUS, PEGAWAI FROM CAD_LAWATAN WHERE ID_LAW = $ID;";
		
		// execute query
		$exe_sql = mysql_query($sql);
		
		// confirming the record is added
		if ($exe_sql)
		{
			$sql2="DELETE FROM CAD_LAWATAN WHERE ID_LAW = $ID;";
			
			// execute query
			$exe_sql2 = mysql_query($sql2);
			
			echo '<html>
					<head>
						<script>
							window.alert("Pendaftaran data bagi cadangan lawatan berjaya!");
						</script>
						<meta http-equiv="refresh" content="0; url=cadangan.php?CAD=law" />
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
	
	if(isset($_GET["L_BEN"]))
	{
		// Variables from pendaftaran.php
		$ID	= $_GET["L_BEN"];
		
		//SQL query command
		$sql="INSERT INTO BENGKEL (NAMA, ALAMAT, NEGERI, SEKTOR, INDUS, PENCERAMAH, JAWATAN, KELAYAKAN, KEMAHIRAN) SELECT NAMA, ALAMAT, NEGERI, SEKTOR, INDUS, PENCERAMAH, JAWATAN, KELAYAKAN, KEMAHIRAN FROM CAD_BENGKEL WHERE ID_BEN = $ID;";
		
		// execute query
		$exe_sql = mysql_query($sql);
		
		// confirming the record is added
		if ($exe_sql)
		{
			$sql2="DELETE FROM CAD_BENGKEL WHERE ID_BEN = $ID;";
			
			// execute query
			$exe_sql2 = mysql_query($sql2);
			
			echo '<html>
					<head>
						<script>
							window.alert("Pendaftaran data bagi cadangan penceramah berjaya!");
						</script>
						<meta http-equiv="refresh" content="0; url=cadangan.php?CAD=ben" />
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
	
	// Padam Cadangan Lawatan
	if(isset($_GET['P_LAW']) && is_numeric($_GET['P_LAW']))
	{
		// get ID value
		$ID = mysql_real_escape_string($_GET['P_LAW']);
		
		// delete the entry
		$result = mysql_query("DELETE FROM CAD_LAWATAN WHERE ID_LAW = $ID"); 
		
		// check for deletion
		if ($result)
		{
		   echo '<html>
					<head>
						<script>
							window.alert("Cadangan lawatan berjaya di padam!");
							window.history.go(-1);
						</script>
						<!--<meta http-equiv="refresh" content="0; url=cadangan.php?CAD=law" />-->
					</head>
				</html>';
		}
		else
		{
			//echo "SQL insert statement failed.<br>" . mysql_error();
			echo '<html>
					<head>
						<script>
							window.alert("Cadangan lawatan gagal di padam!");
							window.history.go(-1);
						</script>
					</head>
				</html>';
		}
	}
	
	// Padam Cadangan Penceramah
	if(isset($_GET['P_BEN']) && is_numeric($_GET['P_BEN']))
	{
		// get ID value
		$ID = mysql_real_escape_string($_GET['P_BEN']);
		
		// delete the entry
		$result = mysql_query("DELETE FROM CAD_BENGKEL WHERE ID_BEN = $ID"); 
		
		// check for deletion
		if ($result)
		{
		   echo '<html>
					<head>
						<script>
							window.alert("Cadangan penceramah berjaya di padam!");
							window.history.go(-1);
						</script>
						<!--<meta http-equiv="refresh" content="0; url=cadangan.php?CAD=ben" />-->
					</head>
				</html>';
		}
		else
		{
			//echo "SQL insert statement failed.<br>" . mysql_error();
			echo '<html>
					<head>
						<script>
							window.alert("Cadangan penceramah gagal di padam!");
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
				<li class="active">
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
                    <a class="navbar-brand" href="cadangan.php">Senarai Cadangan Data</a>
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
                                <h4 class="title">Senarai Cadangan Data Baru</h4>
                                <p class="category">Sila pilih kategori berkaitan.</p>
                            </div>
                            <div class="content">
								<center>
									<a href="cadangan.php?CAD=law"><button class="btn btn-fill btn-info">Lawatan</button></a>
									<a href="cadangan.php?CAD=ben"><button class="btn btn-fill btn-warning">Penceramah</button></a>
								</center>
                            </div>
                        </div>
                    </div>
<?php
	}
	
	if(isset($_GET["CAD"]) && ($_GET["CAD"] == "law"))
	{
		// create the listing query
		$sql = "SELECT * FROM CAD_LAWATAN ORDER BY NEGERI, NAMA";
		
		// execute listing query
		$result = mysql_query($sql) or die("SQL select statement failed");
?>
					<div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Cadang Data Baru</h4>
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
		
		// Display negeri name array
		$sql_dneg		= "SELECT * FROM NEGERI";
		$result_dneg	= mysql_query($sql_dneg);
		while($row_dneg	= mysql_fetch_array($result_dneg))
		{
			$DID_NEG		= $row_dneg["ID_NEGERI"];
			$DNEG2			= $row_dneg["NEGERI"];
			$DNEG[$DID_NEG]	= $DNEG2;
		}
		
		// Display industri name array
		$sql_dind		= "SELECT * FROM INDUS";
		$result_dind	= mysql_query($sql_dind);
		while($row_dind = mysql_fetch_array($result_dind))
		{
			$DID_IND		= $row_dind["ID_INDUS"];
			$DIND2			= $row_dind["INDUSTRI"];
			$DIND[$DID_IND]	= $DIND2;
		}
		
		// iterate through all rows in result set
		while ($row = mysql_fetch_array($result))
		{
			$BIL++;
			
			// extract specific fields
			$ID_LAW		= $row['ID_LAW'];
			$NAMA		= $row['NAMA'];
			$ALAMAT		= $row['ALAMAT'];
			$NEGERI		= $row['NEGERI'];
			$SEKTOR		= $row['SEKTOR'];
			$INDUS		= $row['INDUS'];
			$PEGAWAI	= $row['PEGAWAI'];
			
			// Display subtitutes
			$DNEGERI	= $DNEG[$NEGERI];
			$DINDUS		= $DIND[$INDUS];
			
			$DALAMAT	= "$ALAMAT,<br><b>$DNEGERI</b>.";
?>
										<tr>
                                        	<td><?php echo $BIL; ?></td>
                                        	<td><?php echo $NAMA; ?></td>
                                        	<td><?php echo nl2br($DALAMAT); ?></td>
                                        	<td><?php echo $SEKTOR; ?></td>
											<td><?php echo $DINDUS; ?></td>
                                        	<td><?php echo nl2br($PEGAWAI); ?></td>
											<td align="center"><a href="cadangan.php?L_LAW=<?php echo $ID_LAW; ?>"><button class="btn btn-xs btn-success btn-fill">Luluskan</button></a><br><br><button class="btn btn-xs btn-danger btn-fill" type="button" value="Padam" onClick='confirmDell(<?php echo $ID_LAW; ?>)'>Padam</button></td>
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
	
	if(isset($_GET["CAD"]) && ($_GET["CAD"] == "ben"))
	{
		// create the listing query
		$sql = "SELECT * FROM CAD_BENGKEL ORDER BY NEGERI, NAMA";
		
		// execute listing query
		$result = mysql_query($sql) or die("SQL select statement failed");
?>
					<div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Cadang Data Baru</h4>
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
		
		// Display negeri name array
		$sql_dneg		= "SELECT * FROM NEGERI";
		$result_dneg	= mysql_query($sql_dneg);
		while($row_dneg	= mysql_fetch_array($result_dneg))
		{
			$DID_NEG		= $row_dneg["ID_NEGERI"];
			$DNEG2			= $row_dneg["NEGERI"];
			$DNEG[$DID_NEG]	= $DNEG2;
		}
		
		// Display industri name array
		$sql_dind		= "SELECT * FROM INDUS";
		$result_dind	= mysql_query($sql_dind);
		while($row_dind = mysql_fetch_array($result_dind))
		{
			$DID_IND		= $row_dind["ID_INDUS"];
			$DIND2			= $row_dind["INDUSTRI"];
			$DIND[$DID_IND]	= $DIND2;
		}
		
		// Display industri name array
		$sql_dkel		= "SELECT * FROM KELAYAKAN";
		$result_dkel	= mysql_query($sql_dkel);
		while($row_dkel = mysql_fetch_array($result_dkel))
		{
			$DID_KEL		= $row_dkel["ID_KEL"];
			$DKEL2			= $row_dkel["KEL"];
			$DKEL[$DID_KEL]	= $DKEL2;
		}
		
		// iterate through all rows in result set
		while ($row = mysql_fetch_array($result))
		{
			$BIL++;
			
			// extract specific fields
			$ID_BEN		= $row['ID_BEN'];
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
			$DNEGERI	= $DNEG[$NEGERI];
			$DINDUS		= $DIND[$INDUS];
			$DKELAYAKAN	= $DKEL[$KELAYAKAN];
			
			$DALAMAT	= "$ALAMAT,<br><b>$DNEGERI</b>.";
?>
										<tr>
                                        	<td><?php echo $BIL; ?></td>
                                        	<td><?php echo $NAMA; ?></td>
                                        	<td><?php echo nl2br($DALAMAT); ?></td>
                                        	<td><?php echo $SEKTOR; ?></td>
											<td><?php echo $DINDUS; ?></td>
                                        	<td><?php echo nl2br($PENCERAMAH) . "<br><b>($JAWATAN)</b>"; ?></td>
											<td><?php echo $DKELAYAKAN; ?></td>
											<td><?php echo $KEMAHIRAN; ?></td>
											<td align="center"><a href="cadangan.php?L_BEN=<?php echo $ID_BEN; ?>"><button class="btn btn-xs btn-success btn-fill">Luluskan</button></a><br><br><button class="btn btn-xs btn-danger btn-fill" type="button" value="Padam" onClick='confirmDelb(<?php echo $ID_BEN; ?>)'>Padam</button></td>
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
			var del = confirm("Adakah anda pasti untuk memadam cadangan data lawatan ini?");
			if (del == true)
			{
				window.location.assign("cadangan.php?P_LAW=" + nums);
			} else 
			{
				alert("Cadangan data lawatan tidak di padam.");
			}
		}
		
		function confirmDelb(nums)
		{
			var del = confirm("Adakah anda pasti untuk memadam cadangan data bengkel ini?");
			if (del == true)
			{
				window.location.assign("cadangan.php?P_BEN=" + nums);
			} else 
			{
				alert("Cadangan data penceramah tidak di padam.");
			}
		}
	</script>

</html>

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
	
	<style>
		@media print
		{    
			.no-print, .no-print *
			{
				display: none !important;
			}
		}
	</style>
	
<?php
	session_start();
	include("connectDB.php");
	
	if(!empty($_SESSION['el_login']))
	{
		// Menyenarai hitam data
		if(isset($_GET["H_BEN"]))
		{
			// Variables from penceramah.php
			$ID	= request_id($_GET, "H_BEN");
			
			// copy the row to HIT_BENGKEL and delete it from BENGKEL
			$sql	= "INSERT INTO HIT_BENGKEL (NAMA, ALAMAT, NEGERI, SEKTOR, INDUS, PENCERAMAH, JAWATAN, KELAYAKAN, KEMAHIRAN) SELECT NAMA, ALAMAT, NEGERI, SEKTOR, INDUS, PENCERAMAH, JAWATAN, KELAYAKAN, KEMAHIRAN FROM BENGKEL WHERE ID_BEN = ?";
			$sql2	= "DELETE FROM BENGKEL WHERE ID_BEN = ?";
			
			if ($ID !== null && db_move($sql, $sql2, $ID))
			{
				echo '<html>
						<head>
							<script>
								window.alert("Data bagi penceramah berjaya disenarai hitam!");
							</script>
							<meta http-equiv="refresh" content="0; url=senarai_hit.php?HIT=ben" />
						</head>
					</html>';
			}
			else
			{
				echo "SQL insert statement failed.<br>";
				
				echo '<html>
						<head>
							<script>
								window.alert("Data bagi penceramah gagal disenarai hitam!");
								window.history.go(-1);
							</script>
						</head>
					</html>';
			}
		}
		
		// Padam penceramah
		if(isset($_GET['PADAM']))
		{
			// get ID value
			$ID = request_id($_GET, 'PADAM');
			
			// delete the entry
			$result = $ID !== null && db_query("DELETE FROM BENGKEL WHERE ID_BEN = ?", [$ID]) && mysqli_affected_rows($condb) === 1;
			
			// check for deletion
			if ($result)
			{
			   echo '<html>
						<head>
							<script>
								window.alert("Data penceramah berjaya di padam!");
								window.history.go(-1);
							</script>
							<!--<meta http-equiv="refresh" content="0; url=penceramah.php" />-->
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
                <li class="active">
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
                    <a class="navbar-brand" href="../ezloc/penceramah.php">Penceramah</a>
                </div>
                <div class="collapse navbar-collapse">
					
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Senarai Direktori Penceramah</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
<?php
	// Filter and search values from the query string (null when missing)
	$NEG	= request_text($_GET, 'NEG');
	$SEK	= request_text($_GET, 'SEK');
	$IND	= request_text($_GET, 'IND');
	$CARI	= request_text($_GET, 'CARI');
	$TAPIS	= ($NEG !== null) && ($SEK !== null) && ($IND !== null);
	
	// List by batch development
	// create the selection query
	$sql1 = "SELECT * FROM NEGERI ORDER BY NEGERI";
	$sql2 = "SELECT * FROM INDUS";
	
	// execute selection query
	$result1 = db_query($sql1) or die("SQL negeri select statement failed");
	$result2 = db_query($sql2) or die("SQL industri select statement failed");
?>
								<center>
									<table align="center" class="no-print">
										<tr>
											<form id="papar" action="" method="get">
											<td align="left">
												<table>
													<tr>
														<td align="left">
															<font size="3">
																<b><i><label>Pilih negeri</label></i></b>
														</td>
														<td>
															<font size="1">&nbsp;</font>
														</td>
														<td>
															<b><i><label>:</label></i></b>
															</font>
														</td>
														<td rowspan="5">
															&nbsp;
														</td>
														<td align="left">
															<select name="NEG">
																<?php
	$N_SEMUA    = null;
	if($NEG === "")
	{
		$N_SEMUA	= "selected";
	}
?>
																<option value="" <?php echo $N_SEMUA; ?>> Semua </option>
																<option disabled></option>
<?php
	$sel1 = null;
	while ($row1 = mysqli_fetch_array($result1))
	{
		$NEG1	= $row1["ID_NEGERI"];
		$NEG2	= $row1["NEGERI"];
		
		if($NEG1 === $NEG){ $sel1 = " selected"; }
?>
																<option value="<?php echo e($NEG1); ?>" <?php echo $sel1; ?>> <?php echo e($NEG2); ?> </option>
<?php
		$sel1 = null;
	}
?>
															</select>
														</td>
														<td rowspan="5">
															&nbsp;
														</td>
													</tr>
													<tr colspan="2">
														<td>
															<font size="1">&nbsp;</font>
														</td>
													</tr>
													<tr>
														<font size="3">
														<td align="left">
															<b><i><label>Pilih sektor</label></i></b>
														</td>
														<td>
															<font size="1">&nbsp;</font>
														</td>
														<td>
															<b><i><label>:</label></i></b>
														</td>
														</font>
														<td align="left">
															<select name="SEK">
<?php
	$S_SEMUA    = null;
	if($SEK === "")
	{
		$S_SEMUA	= "selected";
	}
?>
																<option value="" <?php echo $S_SEMUA; ?>> Semua </option>
																<option disabled></option>
																<option value="Swasta" <?php if($SEK === "Swasta")echo "selected"; ?>> Swasta </option>
																<option value="Kerajaan" <?php if($SEK === "Kerajaan")echo "selected"; ?>> Kerajaan </option>
															</select>
														</td>
													</tr>
													<tr colspan="2">
														<td>
															<font size="1">&nbsp;</font>
														</td>
													</tr>
													<tr>
														<td align="left">
															<font size="3"><b><i><label>Pilih industri</label></i></b></font>
														</td>
														<td>
															<font size="1">&nbsp;</font>
														</td>
														<td>
															<b><i><label>:</label></i></b>
														</td>
														<td align="left">
															<select name="IND">
<?php
				$I_SEMUA    = null;
				if($IND === "")
				{
					$I_SEMUA	= "selected";
				}
?>
																<option value="" <?php echo $I_SEMUA; ?>> Semua </option>
																<option disabled></option>
<?php
				$sel3 = null;
				while ($row2 = mysqli_fetch_array($result2))
				{
					$IND1	= $row2["ID_INDUS"];
					$IND2	= $row2["INDUSTRI"];
					
					if($IND1 === $IND){ $sel3 = " selected"; }
?>
																<option value="<?php echo e($IND1); ?>" <?php echo $sel3; ?>> <?php echo e($IND2); ?> </option>
<?php
					$sel3 = null;
				}
?>
															</select>
														</td>
													</tr>
												</table>
											</td>
											<td rowspan="5" align="left">
												<button class="btn btn-success btn-sm btn-fill" type="submit" form="papar" value="Submit">Papar</button></form>
											</td>
											<td rowspan="5">
												&nbsp;
											</td>
											<td rowspan="5">
												&nbsp;
											</td>
											<td rowspan="5">
												<table>
													<tr>
														<td align="left" colspan="3">
															<b><i><label>Cari :</label></i></b>
														</td>
													</tr>
													<tr>
														<form id="cari" action="" method="get">
														<center>
														<font size="3">
														<td align="right">
															<input class="form-control" type="text" name="CARI" size="10" autofocus>
														</td>
														<td>&nbsp;</td>
														<td align="left">
															<button class="btn btn-warning btn-sm btn-fill" type="submit" form="cari" value="Submit">Cari</button>
														</td>
														</font>
														</center>
														</form>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</center><br>
<?php
	// Papar hasil carian
	if ($CARI !== null)
	{
		$LIKE	= "%" . $CARI . "%";
		
		// create the listing query
		$sql = "SELECT * FROM BENGKEL WHERE NAMA LIKE ? UNION SELECT * FROM BENGKEL WHERE ALAMAT LIKE ? UNION SELECT * FROM BENGKEL WHERE PENCERAMAH LIKE ? ORDER BY NAMA";
		
		// execute listing query
		$result	= db_query($sql, [$LIKE, $LIKE, $LIKE]) or die("SQL select statement failed");
	}
	
	// Papar senarai
	if($TAPIS)
	{
		// one placeholder per chosen filter
		$WHERE	= [];
		$PARAMS	= [];
		
		if($NEG != "")
		{
			$WHERE[]	= "NEGERI = ?";
			$PARAMS[]	= $NEG;
		}
		
		if($SEK != "")
		{
			$WHERE[]	= "SEKTOR = ?";
			$PARAMS[]	= $SEK;
		}
		
		if($IND != "")
		{
			$WHERE[]	= "INDUS = ?";
			$PARAMS[]	= $IND;
		}
		
		$TW = $WHERE ? "WHERE " . implode(" AND ", $WHERE) : "";
		
		// create the listing query
		$sql = "SELECT * FROM BENGKEL $TW ORDER BY NEGERI, NAMA";
		
		// execute listing query
		$result = db_query($sql, $PARAMS) or die("SQL select statement failed");
	}
?>
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
										<?php if(!empty($_SESSION['el_login'])){ echo "<th>Tindakan</th>"; } ?>
                                    </thead>
                                    <tbody>
<?php                            
	// Papar table
	if (($CARI !== null) || $TAPIS)
	{            
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
											<?php if(!empty($_SESSION['el_login'])){ echo "<td align=\"center\"><a href=\"pinda_ben.php?ID=$ID_BEN\"><button class=\"btn btn-xs btn-warning btn-fill\">Pinda</button></a><br><br><button class=\"btn btn-xs btn-default btn-fill\" type=\"button\" value=\"Senarai Hitam\" onClick='confirmHIT($ID_BEN)'>Senarai Hitam</button><br><br><button class=\"btn btn-xs btn-danger btn-fill\" type=\"button\" value=\"Padam\" onClick='confirmDel($ID_BEN)'>Padam</button></td>"; } ?>
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
	}
	else
	{
?>
										<tr>
                                        	<td align="center" colspan="9"><i>Sila klik butang "Papar" diatas atau lakukan carian</i></td>
                                        </tr>
<?php
	}
?>
                                    </tbody>
                                </table>
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
		
		function confirmDel(nums)
		{
			var del = confirm("Adakah anda pasti untuk memadam data penceramah ini?");
			if (del == true)
			{
				window.location.assign("penceramah.php?PADAM=" + nums);
			} else 
			{
				alert("Data penceramah tidak di padam.");
			}
		}
		
		function confirmHIT(num_h)
		{
			var hit = confirm("Adakah anda pasti untuk menyenarai hitam data penceramah ini?");
			if (hit == true)
			{
				window.location.assign("penceramah.php?H_BEN=" + num_h);
			} else 
			{
				alert("Data penceramah tidak disenarai hitam.");
			}
		}
	</script>

</html>

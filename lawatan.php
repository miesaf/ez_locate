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
	
	if(isset($_SESSION["el_login"]) && $_SESSION["el_login"])
	{
		// Menyenarai hitam data
		if(isset($_GET["H_LAW"]))
		{
			// Variables from lawatan.php
			$ID	= $_GET["H_LAW"];
			
			//SQL query command
			$sql="INSERT INTO HIT_LAWATAN (NAMA, ALAMAT, NEGERI, SEKTOR, INDUS, PEGAWAI) SELECT NAMA, ALAMAT, NEGERI, SEKTOR, INDUS, PEGAWAI FROM LAWATAN WHERE ID_LAW = $ID;";
			
			// execute query
			$exe_sql = mysql_query($sql);
			
			// confirming the record is added
			if ($exe_sql)
			{
				$sql2="DELETE FROM LAWATAN WHERE ID_LAW = $ID;";
				
				// execute query
				$exe_sql2 = mysql_query($sql2);
				
				echo '<html>
						<head>
							<script>
								window.alert("Data bagi lawatan berjaya disenarai hitam!");
							</script>
							<meta http-equiv="refresh" content="0; url=senarai_hit.php?HIT=law" />
						</head>
					</html>';
			}
			else
			{
				echo "SQL insert statement failed.<br>" . mysql_error();
				
				echo '<html>
						<head>
							<script>
								window.alert("Data bagi lawatan gagal disenarai hitam!");
								window.history.go(-1);
							</script>
						</head>
					</html>';
			}
		}
		
		// Padam lawatan
		if(isset($_GET['PADAM']) && is_numeric($_GET['PADAM']))
		{
			// get ID value
			$ID = mysql_real_escape_string($_GET['PADAM']);
			
			// delete the entry
			$result = mysql_query("DELETE FROM LAWATAN WHERE ID_LAW = $ID"); 
			
			// check for deletion
			if ($result)
			{
			   echo '<html>
						<head>
							<script>
								window.alert("Data lawatan berjaya di padam!");
								window.history.go(-1);
							</script>
							<!--<meta http-equiv="refresh" content="0; url=lawatan.php" />-->
						</head>
					</html>';
			}
			else
			{
				//echo "SQL insert statement failed.<br>" . mysql_error();
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
                <li class="active">
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
                    <a class="navbar-brand" href="../ezloc/lawatan.php">Lawatan</a>
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
                                <h4 class="title">Senarai Direktori Lawatan</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
<?php
	// List by batch development
	// create the selection query
	$sql1 = "SELECT * FROM NEGERI ORDER BY NEGERI";
	$sql2 = "SELECT * FROM INDUS";
	
	// execute selection query
	$result1 = mysql_query($sql1) or die("SQL negeri select statement failed");
	$result2 = mysql_query($sql2) or die("SQL industri select statement failed");
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
	if((isset($_GET['NEG'])) && ($_GET['NEG'] == ""))
	{
		$N_SEMUA	= "selected";
	}
?>
																<option value="" <?php echo $N_SEMUA; ?>> Semua </option>
																<option disabled></option>
<?php
	$sel1 = null;
	while ($row1 = mysql_fetch_array($result1))
	{
		$NEG1	= $row1["ID_NEGERI"];
		$NEG2	= $row1["NEGERI"];
		
		if((isset($_GET['NEG'])) && ($NEG1 == $_GET['NEG'])){ $sel1 = " selected"; }
?>
																<option value="<?php echo $NEG1; ?>" <?php echo $sel1; ?>> <?php echo $NEG2; ?> </option>
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
	if((isset($_GET['SEK'])) && ($_GET['SEK'] == ""))
	{
		$S_SEMUA	= "selected";
	}
?>
																<option value="" <?php echo $S_SEMUA; ?>> Semua </option>
																<option disabled></option>
																<option value="Swasta" <?php if((isset($_GET['SEK'])) && ($_GET['SEK'] == "Swasta"))echo "selected"; ?>> Swasta </option>
																<option value="Kerajaan" <?php if((isset($_GET['SEK'])) && ($_GET['SEK'] == "Kerajaan"))echo "selected"; ?>> Kerajaan </option>
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
				if((isset($_GET['IND'])) && ($_GET['IND'] == ""))
				{
					$I_SEMUA	= "selected";
				}
?>
																<option value="" <?php echo $I_SEMUA; ?>> Semua </option>
																<option disabled></option>
<?php
				$sel3 = null;
				while ($row2 = mysql_fetch_array($result2))
				{
					$IND1	= $row2["ID_INDUS"];
					$IND2	= $row2["INDUSTRI"];
					
					if((isset($_GET['IND'])) && ($IND1 == $_GET['IND'])){ $sel3 = " selected"; }
?>
																<option value="<?php echo $IND1; ?>" <?php echo $sel3; ?>> <?php echo $IND2; ?> </option>
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
	if (isset($_GET['CARI']))
	{
		$CARI	= $_GET['CARI'];
		
		// create the listing query
		$sql = "SELECT * FROM LAWATAN WHERE NAMA LIKE '%$CARI%' UNION SELECT * FROM LAWATAN WHERE ALAMAT LIKE '%$CARI%' UNION SELECT * FROM LAWATAN WHERE PEGAWAI LIKE '%$CARI%' ORDER BY NAMA";
		
		// execute listing query
		$result	= mysql_query($sql) or die("SQL select statement failed");
	}
	
	// Papar senarai
	if((isset($_GET['NEG'])) && (isset($_GET['SEK'])) && (isset($_GET['IND'])))
	{
		if(($_GET['NEG'] == "") && ($_GET['SEK'] == "") && ($_GET['IND'] == ""))
		{
			$TW	= "";
		}
		else
		{
			$TW = "WHERE";
			
			if($_GET['NEG'] != "")
			{
				$TW	= $TW . " NEGERI = '" . $_GET['NEG'] . "'";
			}
			
			if($_GET['SEK'] != "")
			{
				if($_GET['NEG'] != "") { $TW = $TW . " AND"; }
				
				$TW	= $TW . " SEKTOR = '" . $_GET['SEK'] . "'";
			}
			
			if($_GET['IND'] != "")
			{
				if(($_GET['NEG'] != "") || ($_GET['SEK'] != "")) { $TW = $TW . " AND"; }
				
				$TW	= $TW . " INDUS = '" . $_GET['IND'] . "'";
			}
		}
		
		// create the listing query
		$sql = "SELECT * FROM LAWATAN $TW ORDER BY NEGERI, NAMA";
		
		// execute listing query
		$result = mysql_query($sql) or die("SQL select statement failed");
	}
?>
                                <table class="table table-hover table-striped">
                                    <thead>
										<th>Bil.</th>
                                        <th>Nama Organisasi</th>
                                    	<th>Alamat</th>
                                    	<th>Sektor</th>
                                    	<th>Industri</th>
                                    	<th>Pegawai</th>
										<?php if(isset($_SESSION["el_login"])){ echo "<th>Tindakan</th>"; } ?>
                                    </thead>
                                    <tbody>
<?php                            
	// Papar table
	if (isset($_GET['CARI']) || ((isset($_GET['NEG'])) && (isset($_GET['SEK'])) && (isset($_GET['IND']))))
	{            
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
											<?php if(isset($_SESSION["el_login"])){ echo "<td align=\"center\"><a href=\"pinda_law.php?ID=$ID_LAW\"><button class=\"btn btn-xs btn-warning btn-fill\">Pinda</button></a><br><br><button class=\"btn btn-xs btn-default btn-fill\" type=\"button\" value=\"Senarai Hitam\" onClick='confirmHIT($ID_LAW)'>Senarai Hitam</button><br><br><button class=\"btn btn-xs btn-danger btn-fill\" type=\"button\" value=\"Padam\" onClick='confirmDel($ID_LAW)'>Padam</button></td>"; } ?>
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
	}
	else
	{
?>
										<tr>
                                        	<td align="center" colspan="7"><i>Sila klik butang "Papar" diatas atau lakukan carian</i></td>
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
			var del = confirm("Adakah anda pasti untuk memadam data lawatan ini?");
			if (del == true)
			{
				window.location.assign("lawatan.php?PADAM=" + nums);
			} else 
			{
				alert("Data lawatan tidak di padam.");
			}
		}
		
		function confirmHIT(num_h)
		{
			var hit = confirm("Adakah anda pasti untuk menyenarai hitam data lawatan ini?");
			if (hit == true)
			{
				window.location.assign("lawatan.php?H_LAW=" + num_h);
			} else 
			{
				alert("Data lawatan tidak disenarai hitam.");
			}
		}
	</script>

</html>

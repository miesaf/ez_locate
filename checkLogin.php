<?php
	session_start();

	$enteredID	= is_string($_POST['uname'] ?? null) ? trim($_POST['uname']) : '';
	$enteredPW	= is_string($_POST['pword'] ?? null) ? $_POST['pword'] : '';

	// The admin's ID and password hash are in config.php (admin_id, admin_hash).
	$ezloc_config	= require __DIR__ . '/config.php';
	$adminID		= (string) ($ezloc_config['admin_id'] ?? '');
	$adminHash		= (string) ($ezloc_config['admin_hash'] ?? '');
	unset($ezloc_config);

	$valid = $adminID !== '' && $adminHash !== '' && $enteredID !== '' && $enteredPW !== ''
		&& hash_equals($adminID, $enteredID)
		&& password_verify($enteredPW, $adminHash);

	if (!$valid)
	{
		header("Location: login.php?err=failed");
		exit;
	}

	session_regenerate_id(true);
	$_SESSION['el_login'] = "YES";

	header("Location: index.php");
	exit;
?>

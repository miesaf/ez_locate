<?php
	// Database connection. The credentials live in config.php (not in git); copy config.example.php to start.
	mysqli_report(MYSQLI_REPORT_OFF);
	date_default_timezone_set('Asia/Kuala_Lumpur');

	$ezloc_config = require __DIR__ . '/config.php';
	$condb = mysqli_connect($ezloc_config['db_host'], $ezloc_config['db_user'], $ezloc_config['db_pass'], $ezloc_config['db_name']);
	unset($ezloc_config);

	if (!$condb)
	{
		http_response_code(500);
		die("Database connection failed.");
	}

	// The 2017 code relies on MySQL's non-strict mode.
	mysqli_query($condb, "SET SESSION sql_mode = 'NO_ENGINE_SUBSTITUTION'");

	// Runs a prepared statement: a mysqli_result for SELECT, true or false otherwise.
	function db_query(string $sql, array $params = [])
	{
		global $condb;
		return mysqli_execute_query($condb, $sql, $params);
	}

	// Copies one row to another table (INSERT ... SELECT ... WHERE id = ?) and deletes it from the first
	// (DELETE ... WHERE id = ?): both or neither. False when the row does not exist.
	function db_move(string $insert_sql, string $delete_sql, int $id): bool
	{
		global $condb;
		mysqli_begin_transaction($condb);
		if (db_query($insert_sql, [$id]) && mysqli_affected_rows($condb) === 1
			&& db_query($delete_sql, [$id]) && mysqli_affected_rows($condb) === 1)
		{
			return mysqli_commit($condb);
		}
		mysqli_rollback($condb);
		return false;
	}

	// Escapes a value for HTML output.
	function e($value): string
	{
		return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
	}

	// A text value from $_GET or $_POST, or null when it is missing (or not a single value).
	function request_text(array $source, string $key): ?string
	{
		$value = $source[$key] ?? null;
		return is_string($value) ? $value : null;
	}

	// A positive whole-number ID from $_GET or $_POST, or null.
	function request_id(array $source, string $key): ?int
	{
		$id = filter_var($source[$key] ?? null, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
		return $id === false ? null : $id;
	}

	// Sends a visitor who is not logged in to the login page.
	function require_login(): void
	{
		if (empty($_SESSION['el_login']))
		{
			header("Location: login.php?err=expired");
			exit;
		}
	}
?>

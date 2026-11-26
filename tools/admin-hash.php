<?php
// Makes the admin password hash for config.php. Run from the ez_locate folder:
//   php tools/admin-hash.php
// type the password twice, then paste the printed line into config.php as admin_hash.
if (PHP_SAPI !== 'cli') {
	http_response_code(404);
	exit;
}

function ask(string $prompt): string
{
	fwrite(STDOUT, $prompt);
	system('stty -echo 2>/dev/null');
	$value = rtrim((string) fgets(STDIN), "\r\n");
	system('stty echo 2>/dev/null');
	fwrite(STDOUT, "\n");
	return $value;
}

$password = ask("Password: ");
if ($password === '') {
	fwrite(STDERR, "No password given.\n");
	exit(1);
}
if (ask("Again: ") !== $password) {
	fwrite(STDERR, "The passwords do not match.\n");
	exit(1);
}

echo "\t'admin_hash' => '" . password_hash($password, PASSWORD_DEFAULT) . "',\n";

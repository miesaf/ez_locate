<?php
// Copy to config.php (git-ignored) and fill in the database credentials and the admin login.
return [
	'db_host' => 'localhost',
	'db_user' => '',
	'db_pass' => '',
	'db_name' => '',

	// Admin login: the ID typed on the login page, and a password_hash() of the password.
	// Make the hash with `php tools/admin-hash.php` and paste the line it prints here.
	'admin_id' => '',
	'admin_hash' => '',
];

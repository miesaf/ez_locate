# ez_locate

ez_locate (2017) by Kumpulan Inovatif dan Kreatif (KIK) D'Forte: a directory of study-visit places (Lawatan) and
workshop speakers (Penceramah). Visitors browse and search the directory and suggest new entries; the admin approves
suggestions, adds, edits and deletes entries, and moves entries to and from a blacklist (Senarai Hitam).

Archived project, live at https://app.dimensikini.xyz/ezloc/ on PHP 8.5. Built on the Light Bootstrap Dashboard theme
by Creative Tim (MIT, see `LICENSE.md`).

## Setup

1. Create a MySQL/MariaDB database and import `sql/ezloc_db_structure.sql` (tables and the lookup lists `NEGERI`,
   `INDUS`, `KELAYAKAN`; no directory data).
2. Copy `config.example.php` to `config.php` and fill in the database credentials.
3. Admin login: put the admin ID in `admin_id`, then run `php tools/admin-hash.php`, type the password twice and paste
   the `admin_hash` line it prints into `config.php`.

The admin logs in at `login.php` with that ID and password.

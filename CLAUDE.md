# CLAUDE.md

Project memory for Claude Code. Keep it short and current. Never commit credentials, server addresses, account names or
database names; the hosting details live in the owner's private notes.

## What this is

**ez_locate** (2017, KIK D'Forte): native PHP pages on the Light Bootstrap Dashboard theme (Bootstrap 3), MySQL, UI in
Malay. A public directory of study-visit places and workshop speakers with suggestion forms; one admin approves
suggestions, adds, edits, deletes and blacklists entries. **Archived project** in the owner's project archive
(https://app.dimensikini.xyz/ezloc/, folder `ezloc`).

- History: first at `dimensikini.xyz/dkr/ezloc`, then the mysqli version on app.dimensikini.xyz (Feb 2021, PHP 7.4).
  Ported to PHP 8.5 on 2026-11-26 (ClickUp `86d4e29pz`, under `86d4e29pu`). The folder alone runs on PHP 8.5 through
  its own `.htaccess` (`SetHandler application/x-lsphp85`).

## Data

Tables (`sql/ezloc_db_structure.sql`): `LAWATAN` (visit places, `ID_LAW`), `BENGKEL` (speakers, `ID_BEN`), their
suggestions `CAD_LAWATAN` / `CAD_BENGKEL` and blacklists `HIT_LAWATAN` / `HIT_BENGKEL` (same columns); lookups
`NEGERI`, `INDUS`, `KELAYAKAN` (4-letter codes, foreign keys). Approve / blacklist / restore copy the row into the other
table (new ID) and delete the old one, in one transaction (`db_move()`). The host MySQL is case-sensitive: table names
are upper case. Entries name real people with contact details: never copy real data into the repo or an issue.

Pages: public `index.php`, `lawatan.php` / `penceramah.php` (filter by state, sector, industry; search), `cadang.php`
(suggest), `login.php` → `checkLogin.php`; admin `pendaftaran.php` (add), `cadangan.php` (suggestions),
`senarai_hit.php` (blacklist), `pinda_law.php` / `pinda_ben.php` (edit), and the `?H_LAW` / `?H_BEN` / `?PADAM`
actions on the listing pages (ignored unless logged in). Actions are GET links with an integer ID.

## Code conventions (2026 port — keep them)

- `connectDB.php` reads `config.php` (git-ignored; copy `config.example.php`), sets `mysqli_report(MYSQLI_REPORT_OFF)`,
  a non-strict `sql_mode` and the `Asia/Kuala_Lumpur` time zone, and defines `db_query($sql, [$params])` (prepared
  statements), `db_move()`, `e()` (HTML escape), `request_text()` / `request_id()` (request values) and
  `require_login()`. Never interpolate request data into SQL.
- Admin login: `admin_id` and `admin_hash` (`password_hash()`) in `config.php`, made with `php tools/admin-hash.php`.
  Session key `el_login`.
- Pages start with `<?php ob_start(); ?>` so `session_start()` and `header()` work after HTML.
- `.htaccess` denies `config*.php`, `connectDB.php`, `sql/`, `tools/`, `*.md`, `LICENSE*`, logs.
- No AI attribution in commits or PRs.

## Local test

PHP 8.5 with mysqli and a local MariaDB (the owner uses EnvKit). Import a dump, write `config.php`, then
`php -d display_errors=1 -d error_reporting=-1 -S 127.0.0.1:8130 -t .`. The built-in server ignores `.htaccess`, so
check the deny rules on the real host.

## Deploy

No git on the host. Upload `master` with `git archive master | ssh … 'tar -x -C …/public_html/ezloc'`; `config.php`
(mode 600) stays on the server and is never overwritten; it needs `admin_id` and `admin_hash` before the first login.
Every change on the server needs the owner's OK: show the exact commands first. Smoke test: pages answer 200 on PHP
8.5, and `config.php`, `connectDB.php`, `sql/`, `tools/`, `error_log` answer 403.

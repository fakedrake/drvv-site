<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //

$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

/** The name of the database for WordPress */
define('DB_NAME', $database);

/** MySQL database username */
define('DB_USER', $username);

/** MySQL database password */
define('DB_PASSWORD', $password);

/** MySQL hostname */
define('DB_HOST', $hostname);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']~N71J-l6]0 kPx[{NeX#xEu#M%E=jPt*YPZC@H7_&M)!&C{vbs]3}&K*Y+xi@&a');
define('SECURE_AUTH_KEY',  '}&j2PwLWMcc#xAhys(PKZVPR[,=rkxlBa6|iJR;Cv;%8Pf1VwjL$*bYt3m7Kh2n,');
define('LOGGED_IN_KEY',    '+GOih?-[fB`A[+AoIXScYt:7zow`m:O2Go+,;!LFHqwt}:ADkMudYjlw&fR+FjVX');
define('NONCE_KEY',        'G[HdbJ-X4e_A~J&_~sv4{VZ<[/0s> Xi$w9m?{0k}|iv+9k=b>vKqN&Z3|!^?+q/');
define('AUTH_SALT',        ' -HtZj05xjUJ]gG+SA(=|.N~M=)~ftV|k&s9m&y{fdY[ZEhlv,_8[1{GT%/f~yrl');
define('SECURE_AUTH_SALT', 'r@g[9wL?cM~aofcFK?E,W5AZ_m~ntH9HP;bwTnZa10diZ-XlC%y,=i<wO#m{V=fs');
define('LOGGED_IN_SALT',   'H/@MWN~5>$|t-v`aLCIKCkQ1mOs!9j1bQ1-mwl_/u|8^ WFi3R^1LDv3eE<Z1i|W');
define('NONCE_SALT',       '+]k&{~ys,U{Qth?H<asl C$f70oUEE4n1Zp-`K5CT0d&gg9w]Bz.K%k~F@!n(EW!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

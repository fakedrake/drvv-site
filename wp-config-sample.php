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
/** The name of the database for WordPress */
define('DB_NAME', 'db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'fireba11');

/** MySQL hostname */
define('DB_HOST', 'marxistutopia');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '+T~ K] eKLq^OX`8bEI#jFo{kC4muibO>I4-xM)ZYF``|^?5N:rstG?&AZ2,|p@K');
define('SECURE_AUTH_KEY',  '+)@iP]~/KU^,A-4SNyx+o[5ASRJa?7|/r&}s5).k6$m/`BfPiG@YnNVvS* jkw&G');
define('LOGGED_IN_KEY',    '[;t%{JP?BEUf`gT%P_P9nvs,Mdlfb[: <M,3D|AY y5Bt4Bp{CTA:C04:vCXLr 8');
define('NONCE_KEY',        'VU&|2L{&<-TK{S`^gc>`Hbf;Z(TSvOl_9O?-8jq5SMih|VsxZ#W0x5!+Q/k/1YG~');
define('AUTH_SALT',        'pU4Ie-G0&s5&q,5NAY?|5-cXzjWf)-3edPH][Mfk+95qkY|IJh+~ne8Har+L_aa`');
define('SECURE_AUTH_SALT', 'EiFC]OiT|YudN@O|z-HKfA},4T6Ly5]Dy?x&CIg*F.K:qwx&;4#5M<XrEl9~qQWX');
define('LOGGED_IN_SALT',   'w$0+hw*<aMWKCm}l|]/P&~q(7SYaYCWt-vOAt?4j#7+^d-L{4:yNbUNR| o0liau');
define('NONCE_SALT',       'ee+pqam|G~lghtc^HF9mV(t*`GYs+%:icOs Da$yFTaF@JBf{}+Vsx!sQ8E*K?nC');

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

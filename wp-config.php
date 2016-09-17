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
define('DB_NAME', 'wp_sackelamtshusli');

/** MySQL database username */
define('DB_USER', 'webapps_user');

/** MySQL database password */
define('DB_PASSWORD', 'F%j*sem');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '9./^xCV&B9z<m8ylQ={:j&2g]}ww,;=/0LNX>yuK5@:vbg%Bflo!sHdy~oWToG:}');
define('SECURE_AUTH_KEY',  'b`Bcu+!!7+Biu1#f1%][O^$/X(rHcmK~DfKU/iP@*[ XZ&?4^sFN=LN~o$HjLbKW');
define('LOGGED_IN_KEY',    '0kRMiU(K.D}(~!}Z-_NmF7r7]gh`?7<vZiB6xW(@cnF#=(^Cn5Dc``&jL(71O!;o');
define('NONCE_KEY',        'g`BGo}7)Fhc9t%=4XWj5]+d8!IJ3<8Scsv~/2ureP>&[*8IL7a$qAWz8+Y<5A1XP');
define('AUTH_SALT',        ']i9nb[Y!ml%!.v))W+^I>sfK?jYRA]tCqV+KM8!UytC+OPhq#M89u)6ZU4wTBqD$');
define('SECURE_AUTH_SALT', 'vx>cPqVLP,[$.Wg&2z}2.;F8B[Qd;V+541-x7v2Q__e/^=5pw#~Os<x$`0|U`~s@');
define('LOGGED_IN_SALT',   'V*~$aw,E!*_TlcnT79dI{-#*#J-G]8-Uz F];:>v2k{vgwP8*nn;E`9c1UkNK[0a');
define('NONCE_SALT',       '<TzTaG=N[[K ob#[&sJ2I)z>)Aw37l>nEr36?y0v&{9FDQ]Ap<cQhugQp-2`F2>|');

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

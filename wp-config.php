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
define('DB_NAME', 'dhd');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'Manioc224');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'G4@hY_F$b)|BtxCKT{yns`1}d>YgYve(Ila+2v|mZA{+`P$:0R0zPK$0S!56?*#S');
define('SECURE_AUTH_KEY',  '$+!~sx`/c>Sh-{d7Z$FW)<a6QQDn+eS69`@t&w-E7yj?{-T(wATt?8[[&<8@hjQd');
define('LOGGED_IN_KEY',    '7gdkyCUidkv&iD%5>5Z/RQj@IqQz;}.+th+q#8:w?29%k&P+6k-M3HHq,vO^o:Q>');
define('NONCE_KEY',        '?Tsn+iuX9*f1*D5~4>`|rbmxp xfiaJ@ye+gCx[y?NuE(W,=$Lf-}~H `D|>[F/A');
define('AUTH_SALT',        'qy) fg.(g7knUd&o}m4#:ZWfu=%blh3&5w@>4v9{))[R`NIv_o`1le2(GTEQi-O,');
define('SECURE_AUTH_SALT', 'b|bfeu7;YB.mH}Qlm6D&;#Jd ],M  61P9k+l+/}HrO]wO)$l69ubnF0D^4:bIa=');
define('LOGGED_IN_SALT',   'c##bUE><uK:b+A4O=@PwN@7LBGnGeTDHgI_|E-~`7cL:N&-0@&:_^.=@-{h3l&7+');
define('NONCE_SALT',       'N1Z6SR6FX5.q ;Yh/Ej+|0Px$M%$GBZnI-<:H/%- ]3Izp}zr46jO3w)fgOcT)4-');
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

define('FS_METHOD', 'direct');

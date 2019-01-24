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
define('DB_NAME', 'ec_cube_vn_doc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456789');

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
define('AUTH_KEY',         '/_cDNHoY}lfUQ^J*&t7:^+^1VQ%[1YMy@0oM9z,QzxIZFvO^XWK3ylhQe*((A6$1');
define('SECURE_AUTH_KEY',  'vt-j{`Rv?IfQ=&(~ap2&gi0u!a8GTTTdUSb5rPyTr3=iK>s. =0swYbWgKhC434&');
define('LOGGED_IN_KEY',    'k@-HZs5;IoDgdMq[/o Vtepm8c9i?l,Q-9F/@lPJPHK[VpX|?/L#;}G@xRD>Hxh$');
define('NONCE_KEY',        'J L^z#$pqS8pR6=Z$-CVDP+l+zNyh8k1M7>~_sPQf?os>G%;sel*dbZaXEO8N /J');
define('AUTH_SALT',        'qY? t[*oY:QuAbc;M`7vh:jP~jq?MfszNCA0TlrCf<[jm9S-O?i=Bu8hS`Ml*Q!/');
define('SECURE_AUTH_SALT', 'y_Z/FzbGH;6H^E^[GrQHxVIXDFT*> >,`ct[?lBSTBG?i4>_<I?$b(N6dd`2 e0!');
define('LOGGED_IN_SALT',   '7FTd:XWeTogr6@(EyZ?,xcEy1^@]:]UCIR(6j&)YO{~zeDuKB=*kBp.6H9*b{5zH');
define('NONCE_SALT',       'i#NQ+Ztx: q/oxNLgUA6`oNFP,W./+S 0Uvpj_caw41oj+n(PXTC`LBT_Nt(oSFC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ec4_';

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

define('FS_METHOD','direct');

<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mommacodDBccoci');

/** MySQL database username */
define('DB_USER', 'mommacodDBccoci');

/** MySQL database password */
define('DB_PASSWORD', 'zIFOfcu1xG');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'ltG1hta]x_S9Hxel5_]aLx_tD]amW#p+L2ita]xLXDuam6.TeL+iuE{bmT.q$M2ju');
define('SECURE_AUTH_KEY',  'l|1~OVCp-h:9_SZGO~ht9#:hKW_p-HO5htW#;-_S9Hxal2~#WeLx_m6H]aiPW#t+L');
define('LOGGED_IN_KEY',    'gN4ksZ[1~OVCo-d:5_[ZCO-hp9G:ZlO~#t-K:9lSd]x~OWDp-e;9_]aHO~it9#;em');
define('NONCE_KEY',        'e_WaPxmpD2aPHLAiXa2xLAH+b26{TIL.u6{fPX*<$EMAmqT{3yQTIqfjB{UIQy^uB');
define('AUTH_SALT',        '6eiW.#pHL;mtTa2+*Lb2A.<eILymu6E<fmMT{uyE3Ajqf{yQX7E$fj7{XbQ$^jB');
define('SECURE_AUTH_SALT', 'WthlD#]WKO-px9H5hlO#;tLS59lai]2#SW9x*emD#]WLT+.xDH]iqPX;u+T6Emui');
define('LOGGED_IN_SALT',   'GoO|[~S1oZd1-SZ9G#ltK]1pSW;x-H5Dlth]2#SWLx+e6D_]iLP+pxAH6ema<]*LP');
define('NONCE_SALT',       '0gRzoCG4dRV:sG48wV:~!VKsh59:WK~_sK5dS#]-ODlW;~_WL~e2#aeP#x9;imW;*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

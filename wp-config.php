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
define('DB_NAME', 'canabak');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'J(8T(GBTFa}B$zNB_xe.&,mIAzuV6}&SyZ?wWI&uL,D|Wud=U7J=HIK2=7.!5Lw%');
define('SECURE_AUTH_KEY',  'io>%k6/ c.*.2sqW/,1o]ICRHV_&<i<F|MMlIU !y|& 1!.#}fPtVU]Fl(^6TN|h');
define('LOGGED_IN_KEY',    'gl*xT]x+F70H(WmFLx=l*mT8<hNQ0OOpl4s9B5B$J+af9Giy%GGu2C4AfU~,H7en');
define('NONCE_KEY',        'a^lfnv+N-9-y-FO.~r|88Vy$:?y2JS3Rt~xFJL7u_icmmIJVE)f?bjK{R*8cq7*]');
define('AUTH_SALT',        'WiNOK{)xz-k( ze,Z.QjiE[],)Q)0mg)nybqp4Juwj`eNz>@dVp8wyonEOOGm/ET');
define('SECURE_AUTH_SALT', 'm~JAbBV{u/vcl3Wn[C-PCHd3ZrO$fJU%KIjbu!eq|[-Jm@n*(?8Z7?oBgRwm4qIG');
define('LOGGED_IN_SALT',   'm)z=T.crPlY%}y)n^v2LU>R.*pwUb2#rBRJR<DzL T[ErY`og@/CrAn}y8KwTD0F');
define('NONCE_SALT',       'p&R_FVzL;DKa-#?R)cOG_H[}t]($EBYLQYn]-/w&CaUva&,@PH=O7|V?b+4GUNn0');

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

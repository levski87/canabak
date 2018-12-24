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
define('AUTH_KEY',         ']^lMx&nOKLsy@GbZhnd(N.f{d.?BqDxayvIMhMOwLHSJIM1T&.4x(.niP$44lC;#');
define('SECURE_AUTH_KEY',  '2CP^Ak:H8ONP^aH98{?j/?*nq!>et4?;]{QpwU*.nI`k11^^lmdh:a{@9+0iA[8C');
define('LOGGED_IN_KEY',    'ugPj{#)2u06|N^eu6G5DrqO*Fc+=(3k/h<>,f`gxk]Q~i|I,VA+*_f0#/1 xa/m$');
define('NONCE_KEY',        '8x|=U+`ypR(5E1)u ~0Lfds=H WA[Y}tq)88aA^Cv%UGE?zU?<t/z??ZbHIi<u0k');
define('AUTH_SALT',        'H=t/AVDK0!nov0rPMf&u_QJuq&R0Wx[*&=z{yW]|),EN /=RGtN}_*[Y!SM}Lb+~');
define('SECURE_AUTH_SALT', '?I~Z5+IS%aUq^kz~L<,3aqw}+2M`N6)njB>9l}sk6a;_ ]=SObb@f,W`eG/~ij5J');
define('LOGGED_IN_SALT',   '#=;BCNjf3LG^5aIR0BWEQ[l#cm+=6aK$xcTAKZ/2}r;FJjhram#rQ]u:?U@2~G&`');
define('NONCE_SALT',       'i-]1 W*%Y#`DrIr6Mp}3|}h@@^K^XK=7PcD_t?Qo>!CcS=x%2wCs>7**%9yD>:DQ');

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

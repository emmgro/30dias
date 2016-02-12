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
define('DB_NAME', 'wptreinta');

/** MySQL database username */
define('DB_USER', 'dbaTreinta');

/** MySQL database password */
define('DB_PASSWORD', 'wpTreinta30');

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
define('AUTH_KEY',         '7Ox.9Ufxfh:^_lsmJq>#t,M~oHvai(Rl>eaWku_ij [e7CP|zLxm<b:;h07byIS*');
define('SECURE_AUTH_KEY',  'FBW+$&*(}{jcvxA[`^+N?HjIKG}Znf1j]-1/ZVB N4K9]NptH+N=x1WDst/abuM{');
define('LOGGED_IN_KEY',    'b|A%8J[;_Xyr(=p{_%ob[MyfUHkAn~:aSNUL06yD-vpoY,f f[_qqp~A:sj%`8_V');
define('NONCE_KEY',        'dYiy88-K<X|:$+F<zf`P{3vP2BgX|D ++n)`e[F|fAM+-)|F:&]3EIe-nd541[|8');
define('AUTH_SALT',        'e1rB#fxzt?:^tSp[+spg2_~nQl1eGejPoiU|+^PskgcuSjJ KWnSW+mH~T,M|x<p');
define('SECURE_AUTH_SALT', 'du~ECIsR&9lE9b_4O^uk(FXb#6+/Acdg3n!G_s#I!A;VHL_L/_8>$+66z1rf.1RM');
define('LOGGED_IN_SALT',   'hg-7Ezn-Yi(T|dS|~yoz6Z!eQ;pMt#k:~6uT?u/|:z|O[!eg&-e;x )u!X/n(X1r');
define('NONCE_SALT',       'Q3jzt5d1xct.A+;]D-z2+onutqw*t^8EkRd::*em@A[QM1]+@OMf1r{_xUvR~@0z');

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

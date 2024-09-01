<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Planty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'OR(hV)e54vS]3iN5`FPJK$BmYk<ajaygAv,wTB(5cK!#)2D8;zXDS}0z~B*>(/#U' );
define( 'SECURE_AUTH_KEY',  'xsjzC2#Ppj`YiKg0Q~N>H(h;o=+DK]q?M+5~{A??|_0 F3MoK1|e]B%iPGM6~*dV' );
define( 'LOGGED_IN_KEY',    '~N^Wrte~W,pW![rrRmC]XX$JdtF|9_N$1e>56YU8KspMt:~(]:RTpJ85I|}vMST[' );
define( 'NONCE_KEY',        '!#/ &!E:w|j)Q2I.{^5NFWp`[xA+Hi</HxOH7obebl9gtb-L9VW.G}q=g(H@<[ L' );
define( 'AUTH_SALT',        ')+1=RvL|Jn#EqNyodhjQ#&1Ju7O:5_BU616|]F!MN<Y7OwT|SXV  F-?&hMU3MXD' );
define( 'SECURE_AUTH_SALT', '_&WZLY=sG8s)&,QSuW2)8kt41q6dlx3D>GOGE2<r9g~K4GZH;>t@R9D[z:m8}bmF' );
define( 'LOGGED_IN_SALT',   'mf[b-}jg,FL_;&9rvHjNA0NV#yt29:9-h1Ps1rAOUVs8b<Hs*w=-8Wfi^neH~eN=' );
define( 'NONCE_SALT',       'T|7Up&^VM3@emd:[4:Dq#;7KTvqKe9d>IoJk%<J|U`A;@KCm*,Qj&mqVyfkHbb|l' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

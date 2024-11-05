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
define( 'DB_NAME', 'essai' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '&nO9(V[*|hXIZ29z][d;ls,5F``AT#D&CkJ]hyZkk9Y;XwS.AbWs!aKhP>DZa@2R' );
define( 'SECURE_AUTH_KEY',  '&u=#b.m(ER[]E[bxIX9=oY%rg8{y>5cE~kfbYO4),_Vy+bl?;oLhfVqqB:r|=)rU' );
define( 'LOGGED_IN_KEY',    'sMA>o3Qin/{cJz[KfuY1%A!qliZA()hOwnV}qd?`F7V{]2t%8xT=ceK6u4e!I;}?' );
define( 'NONCE_KEY',        'Vsr$UrL.r;xGM;754JD0(RgzKk1I3hSd5jRS9>CYg}R+bb]:<h&W57m0[AY!1Ccq' );
define( 'AUTH_SALT',        '9C2l(*)e]7&!v66W*GCHtAbq?c9;6gkUq&7|$g|/F&%n*UH^Hc#QKd>QKp^i7O*{' );
define( 'SECURE_AUTH_SALT', '5>e)xin2e[^21gc}j-G [btk<|6e;{DV9+Kf;W<:,Z6qGQ7sYESeGb8K?d~_Jq@Q' );
define( 'LOGGED_IN_SALT',   '-yl%k4WFQ38Y$H`K9?2,$x02g=U079*e8O6xqa>7U%8T9&Q`kDZslY=B]Z~j1=)U' );
define( 'NONCE_SALT',       '6PM&lb,`!}<@s9LL+dTmy.x=gzYJ4Xb-K)j`jyhN~b>i,ucs6FT2H!W<OTz}*#,0' );

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

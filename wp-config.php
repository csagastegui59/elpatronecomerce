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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'elpatron' );

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
define( 'AUTH_KEY',         '>cad;loJ*n>=pG[!oQ?YG.ORrnGPMqTL_?@ljk68^urU#fJ@N2K^oZNyMr7EbkAC' );
define( 'SECURE_AUTH_KEY',  'Y+opJp>zTd9!oIN:,=idz)JmRK`?v^6kUlA_/6C^[S*eLI__c:nG`J.kl$V;F1Vc' );
define( 'LOGGED_IN_KEY',    'nNyyD!@V_D=WxqFbC^DaQ%*jn Ct3O doGOAz!#?0=fJ9n!sZ8xR2AL@0nm^CZ7-' );
define( 'NONCE_KEY',        '9QP0hwbH(y,iXvtCy^ko<+eMkYn3CCpD%+O&+QV!qftj[2cChS#&^m3q0s86JtUm' );
define( 'AUTH_SALT',        'usWyDWOkybUaVRiW-R^6|N(0bLX!r!w/Ur4}%dI$!!;_2EoYJ70I9|dIq+,lwk];' );
define( 'SECURE_AUTH_SALT', 'RuO5PX:x2$+j?UnHsdi; CC5ZzI%cl_2<F1on@dvCKMt(Z[Y5H^%d+-4|FnqbBP#' );
define( 'LOGGED_IN_SALT',   '?xt22jM4k  --SlcjYJ.yIKG:mg}xy$xmoa5= %|5z_[-S^i&YS$0?1Zp^hro)iz' );
define( 'NONCE_SALT',       '3DXYp{th7$+-r}vb-rs6P8^2y5%17]Ap:ya<a&GH@$_kOzDQzG]JzrxP#cqj*Yu0' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

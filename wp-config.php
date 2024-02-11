<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'demo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         'Z8XzivCKdWNc|ALg}l4_r5~VOBO2ZBCD_$ShD*9m%quY|]jC)Q**rQy-N=+q[u-~' );
define( 'SECURE_AUTH_KEY',  'jjZM6G`n~)ix5a3v^/u M&Ke a0<[M#o2I:]kd f.EkES&Im*y9#SE$=4Vi-8>p1' );
define( 'LOGGED_IN_KEY',    ']zZ:(Fj7MWJKQ7Nc>uc=/3Wlb?DjJA ~&g((+**d1b,C0#1 K0O~z:JRb,Nu^UQd' );
define( 'NONCE_KEY',        'q:YVW0HG;3Yk[)9r;4VzfrCI75yS$T5`d5;!:;Mxpi9c&A7u;S1%*q/LDMpyjm?k' );
define( 'AUTH_SALT',        'MN,UzPLP6og@BU,W?*fwsSGbxB=3AN7}c:k}%`vvI=)hxZ;)Q1URucj*$#ZMI!o-' );
define( 'SECURE_AUTH_SALT', '6E^}&dwy:H1M=AM.r;zV2f+;rL)s_h4WnaojV|hcoDZNlYNGdBVs9s 2f+50_xVL' );
define( 'LOGGED_IN_SALT',   'I>+BV7mUT]wUDjJ{~.VW:=A~pp,c7:}Q:TBjn){$%7~y6Lw-s/FDQh9Z>8I5%avv' );
define( 'NONCE_SALT',       '#[_ 9~_NIo9*0_&2lDu s2EGpbnVeD@sz=KTw5MRG2bQ8+%y$rn)1Z9L`1DG)83Z' );

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

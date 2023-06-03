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
define( 'DB_NAME', 'online-shop' );

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
define( 'AUTH_KEY',         '#Oj4uT&5.MN?W4sp5xu4+Z4I65*&C#U9jrFg(?#aM!7>BRN{W%G`yDPt%!z6nWL?' );
define( 'SECURE_AUTH_KEY',  '*-!KicTC2g#P?(WJ*Xg$6%5q$m>]4L[W4|m>thH=$FnOr#Gm9!BiTqB`1UTO^)Js' );
define( 'LOGGED_IN_KEY',    'QfXNq,]0e[ybE.oE5,Yq >&=ADilme_3dI>`=CBns_z7W@*:uJ8;{Ri 2P@QnDzr' );
define( 'NONCE_KEY',        'Kp3/L-Q}FCT9`W6U(C`[Z#pWDS.b&v{..whU6kmOOb+vdUV>9sG?K_*q/*|mqzdU' );
define( 'AUTH_SALT',        '9[Gb7W7IQrJ(QbhZ&95$mQ<D:c7MTll61^tgQ;hnHM+Y9^Tb7Ob!_8-X&<`H8GvW' );
define( 'SECURE_AUTH_SALT', '[bmItVJu#)sqop7,C-GX!2.7nF6AKma5l)5kbAA7TG:C(n_J~|ggS}KLs iS.#%h' );
define( 'LOGGED_IN_SALT',   'D~J=RlP8p*j.xwf]3DDL$uZr*yDiR:8oFvp%PD?@?JZFwC:CE+gk[`2>USv^17v4' );
define( 'NONCE_SALT',       'j67x3WiA0jZCx-w::Mpio&mUR*3GDRl@23j.T;f9Eic5D.|5^j5lE%hX*$*5(F{#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'oNl1n3_';

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

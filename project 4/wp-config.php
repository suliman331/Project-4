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
define( 'DB_NAME', 'Suliman' );

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
define( 'AUTH_KEY',         '6kvS(.z0-0i~B-&UAD?sug6c|$B%vp,lk^l!srP~ui#/}lBE_D&2,SSb#-,vPxhj' );
define( 'SECURE_AUTH_KEY',  'P$Zz*92n`OW/gNA)gzn[eu1G5h-_W3!RMFzxL6_yem0F)zLz:y+5EmZnax0hJOI2' );
define( 'LOGGED_IN_KEY',    'Fw>&yT7qV)VCN^T{G8PRNeW!r&b;2%d*[;_-/udil]c<}WU]u(A4xr|F/3PZV!pG' );
define( 'NONCE_KEY',        '&?JX}DX.:RLuvWb#_+jF/d]rQPT5bWm%LIK&>_-gKS9Dtrj_.,bFeS.Sjn:~m:KW' );
define( 'AUTH_SALT',        '$#^CdV0z@ &Q6EAg<x,ETeT3_c!dP5+sW^435cBH}5uKQgr2I.$IM!Sfl9KxEZ-p' );
define( 'SECURE_AUTH_SALT', 'B2bV~iGtx*,MyfJT[jV^6L VU vP$6?X=*Xk U?]al*|=kdtRi42BA[Q=nd}9W|{' );
define( 'LOGGED_IN_SALT',   'W,|IiPJX{`T_m_c/^@!?%,WJVgHO.c9Sd_,cIdq<}26#F=L&Y2t|wH3.fk4Gmja6' );
define( 'NONCE_SALT',       'ElRE&_B.>}xVI9S] rL-C??E-K1Zc@uqOTstaTAxD^yJR$ZTsC1o/m=!EV{~hMMq' );

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

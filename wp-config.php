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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_my-university' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'V/2V,6/efJAlCkh||ke1?yqEt*pvil^8Q*|45&omJcrUcM$|g@<--Eek/AAjE^{|' );
define( 'SECURE_AUTH_KEY',  ': 02D;i4<zW?YGe`DW4wZNp 6^6mU `5e<Wd)##)}^ x&)hF1Uq3$C2h)pW.~4!+' );
define( 'LOGGED_IN_KEY',    'YC9,ir)q zW}*&FUa5w#t;H*Ws~`2Fe5j{WBv0F.CSkB0*@Sb%,J/z NP4_S>^:)' );
define( 'NONCE_KEY',        '+W=Y%}5bw~vN3BP$@{~@-O*[WVLgAU7pS.SI/2]4Str}I=P.p#1aJx1XjVd]&tC8' );
define( 'AUTH_SALT',        'NfTKFOnwctrdoe KJ0D>#5UI7ejlU=v^:|<p}J$)mFwR[9I#hl#h1/yB26C6k Ru' );
define( 'SECURE_AUTH_SALT', '0nc{tr?]}B1PA&_#->*.3V#?:u6Ma8K2x@bw%lx$nto_E_|jmZ(}OI>_-t26#O :' );
define( 'LOGGED_IN_SALT',   'kc[cC8Wx]M>j~R@8+pi suN yG*R*./BP<(STyU|WTAzTa<rH$mh+sto]q9?1akS' );
define( 'NONCE_SALT',       '%ATSrv4{>G *d>-r12.aVt=?K&#3gk=9D|uq;ohA@;x8Y`8l7 cON2HCY41.}GPQ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_mu_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

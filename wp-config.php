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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '6Ws}${>uegXHU4TfSyUrokJ5`o!>qRML/V L/w2F[^]TKvUI^QQ:-{}~OjfE%l}r' );
define( 'SECURE_AUTH_KEY',   'A/b}hn9#fjMjSQMLe}loTo&eazFx5eBInEiC%8&XipCS;LK6kRD&=TVL&lcrtYdq' );
define( 'LOGGED_IN_KEY',     ',D_9L)o2XsdQKf>hs@#8Dly!7P?4:!R-{!MK{{Jj1||KhuZ7c?Ilkj8cJ7j1.Dy}' );
define( 'NONCE_KEY',         'xNJIhs_=kdQ}r=(tI1$tNW.-wMMGwHb.9L?d2<5OQ>sh!g}swq|_%P1Y2<f~r, >' );
define( 'AUTH_SALT',         'C[au,Hf#JFQ.XD&+A%6j{,f)eAGr/.CaG83jgQ(w9L4RNSWSEqYs|byUI!=V>_(0' );
define( 'SECURE_AUTH_SALT',  '&DP(!SYHWUAH|p<P~=b4c2UUEO$Y.RJFF-tN*86aX>$a uO7?MU]VH3^0d=PRxAE' );
define( 'LOGGED_IN_SALT',    '/rAl`+LrY^6?asiWqu?`bi~wfv;=Fw`,-~9)44gmatS~Yu|<`=!koBHb;HIp>+fM' );
define( 'NONCE_SALT',        'z[qe|ircC@`.X&/M>NFtV&K/);DUZIj<jXFLumP=_zc4ES|BiP=wx&6IYQLIOeHR' );
define( 'WP_CACHE_KEY_SALT', 'Lc*nQJ;e#M3^0};YVB*0R94vpEz4sh:2#eNDbbzj8ULo:4m`CgA[jB#KeWm=]Ma`' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

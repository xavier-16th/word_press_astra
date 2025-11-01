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
define( 'AUTH_KEY',          'jQKdGE.=OL<Iq,%dsrX8S>6se:r?!T]RvEPQ$o.F+2XUfp{Q+feTVwWwGlb;!<b7' );
define( 'SECURE_AUTH_KEY',   'EFw1,C}9s<pHvq>IBfktC](HBm)Zg8>_vQ 4va8m=/tGcd7fT:.Zt L.soq3&/z>' );
define( 'LOGGED_IN_KEY',     '+50<Tk,JN4=S_n(>yFc*HJx&n;zGjJO=rFK,SX-1^M&.E`-%,cB(=U8?pVTV: ?.' );
define( 'NONCE_KEY',         '_mJ4bjvZk*mzJ=h]fK~p$3wKxa?$mnx*|jw$5~pD}:;Qt=NN$1X%{XA*86: w3O&' );
define( 'AUTH_SALT',         'u E98IgXec3[sVlo>^ypZ*OKTLt1EuW[W@aYh&tn&UVX:<bJQGyCKauW|mT:}VVa' );
define( 'SECURE_AUTH_SALT',  '7YM3>5^=#=up&c1fEW,P_?EohjD.qqKAI^$_K}Lj+7t(U5dK4T|Y>FqC1{KkZd#A' );
define( 'LOGGED_IN_SALT',    ',pub@SEM+e1qX$$()FiUkvXKa:N#A]t=(jR0|EXjH#rIxR5L~!;sc`Pqd=H/Wqi-' );
define( 'NONCE_SALT',        'AsEjg7{ywg:;1%)|Y0*3vCMg.xD7<GXI3iiU|0v^ud1^tw _g|X1Qs,f9?p:x;M{' );
define( 'WP_CACHE_KEY_SALT', '&p?;idrdc|0%s0Ae{5x09r*#z XBNq0YH^8D~u,ob_:D;eE9H!AxOM|^)Cc45{3t' );


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

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
define( 'DB_NAME', 'roktosondhani' );

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
define( 'AUTH_KEY',         '99i_[N0U8xm2~1=cg!bN_{o9)Dc6uWwW?eHY$iLU_;uL>0r04rXN#=#SmHq&4/>C' );
define( 'SECURE_AUTH_KEY',  'lqEsuOd&j;tW(dku-O1#oxbZIPcn(sO[m@ pcjIHS CsVz@Wuw<fQKV#},;iw`Gn' );
define( 'LOGGED_IN_KEY',    '>C=`?lG<lmtXbgl$/#nJuHk2GNhM:BrdUoY4wA&)#$l<gep-v?;yFs`DCBVk3bN~' );
define( 'NONCE_KEY',        'hFyS``k0tT]Pg@(}sn%I/Lat|z`M/ZDj7Mp_d%=Xwz?Gw?L[$xeIv_g>u:bA{s7B' );
define( 'AUTH_SALT',        'l)g/?MWtrO$[Qtjx;</)qG>!NuC/n<;M38acYbK5cI}JQYmlROx<pPS$@7A#gQo3' );
define( 'SECURE_AUTH_SALT', 'yWdrc;75DP+6Wm @W6RwaIJJIeCqfE(zGb|UP-vMm|t3VRrQTvASqGivWRb>Qmv/' );
define( 'LOGGED_IN_SALT',   'v@vF;/j)_avkM|.Dq~%-xqe5vYzc0a-YL06_]Mz_)!<S>Uo>Js z!}/FBCl1PA0[' );
define( 'NONCE_SALT',       'Cc[DMziS%0tKzQ17[=!Oz#(:q:nyMCe<7qwlkT-yB;PzC4 MQO${B)_TP$$roSdh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sn_';

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

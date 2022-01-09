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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lucid_theme_development' );

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
define( 'AUTH_KEY',         'W4Xf4pNg!K@wN:QQPd5y$7F]SmZ9OaL*!]+dnNyyZ<{UH?q30:0$uVJPonZ/22{q' );
define( 'SECURE_AUTH_KEY',  'Tr3x`v(nP)dimOI*SzBFwdb.Acj^zOm}h2jYu+m0LN!F~Z-VH.fr)/obt0k1fMve' );
define( 'LOGGED_IN_KEY',    'pHNv;;Den(y{$_ZGvx5O$B/r-_{gq~`Hg:6npRlDq/qW*x+}igBw4P*R3o,;Zgb-' );
define( 'NONCE_KEY',        'bL}5Fog}NZASHtIK8[vtf+`U]%5re-r@of9Rb^aw5Yq&vknj`^)1km Nxs!_fbD:' );
define( 'AUTH_SALT',        '}s6v2-.&Js3OEQx/g,XG;^N6Gn|<CTT:i=&MJOj-u.m]w~CtOR]s%zN h!HK040#' );
define( 'SECURE_AUTH_SALT', '-k9-h[;x=ud_ngOk[}p7bj2ZOQPkFi!EL=x<>vRDuh3F:/sQF{r6@J_1Zt<Ess94' );
define( 'LOGGED_IN_SALT',   ';KT<C$v_ip{V,yT9%Rx%:KL!picz v?Y>?VpXa,u(L~O PA7@2Kd;V28|M&Ob z-' );
define( 'NONCE_SALT',       ';}II`U::mfbA0F/7V3S#$Ov3xiCHk`j!G*9P#8`l8tBf8,?_VLr.o,42e)X*RM !' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

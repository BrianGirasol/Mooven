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
define( 'DB_NAME', 'mooven' );

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
define( 'AUTH_KEY',         '7vGq]3,<a@L@FJ/]lfi1*0ZYr~>YCK1BD/V/qDY*7Ztv5KbtS8L/{fjjxumj`t$P' );
define( 'SECURE_AUTH_KEY',  'nM&n9PcC]2^bAfXB>dmTym8QV49-eG@n|mql:UeMHwxVk%Y+{aL~/Awhst?wLP+-' );
define( 'LOGGED_IN_KEY',    'y}N^y1s#ys1KDp!2[cA}8{^QJLAe?};E^ztJ24{x6<hR0xb0gLaJZS RAD!-B>N?' );
define( 'NONCE_KEY',        'LwG>b!vQkQHDW9By)+(L<HBRaX%4k[KM]cSP&U@pmThC`IVvGE1H!uN94e3zK.M@' );
define( 'AUTH_SALT',        '`Glp_W9_VQy>qkd<yyh,Q@+%@oxy3gD<cKq)>QG@,a9x8tr?lRe-:A0 50D^S|0P' );
define( 'SECURE_AUTH_SALT', 'x6q:yRGJ~a!C~fLw)GcF(~49|)}_,XGA8#vItBS82Q*i~g918.)dStWmo.C2f*1m' );
define( 'LOGGED_IN_SALT',   '`(lBhXDv2qEpmUWecoj9qS45EPi&*ZDyC??BtyQc!=rWPZcqwD>)SMKxI(zft<Eu' );
define( 'NONCE_SALT',       ':g_2+c~vd*b0p0+x.IYu_#9KGcvqn%,a8v5w:M`@L?bu>j0.y;6w;OMJFJk8hu^o' );

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

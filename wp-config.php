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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'amazingcollege' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         '|Rg~U<[[BmO=-t`;z8KI9-z2WY-w//.!!Wn%-7-PX79jbkH*1E2UI$34k*;{h(w)');
	define('SECURE_AUTH_KEY',  'J;)(Xz+@|?!f9i5]^[[8q{JmZ(wW[G[)QGdEy-{l2#zVWpF{^2_.Z[0dMX4kCtX(');
	define('LOGGED_IN_KEY',    'B=N,7W.^(#+r+?ur.8gC`Dy|o%c/}(.0r:Lg+>hW%t*F).&-8;|87zN;w-bf:$eA');
	define('NONCE_KEY',        '6X8i`4d>3L2SI->lzKmNQTr,/R2fjFt6y(]J{f+)1F||!w<:+$-9D//jxpF$n.`|');
	define('AUTH_SALT',        'V|z0=?p2K8g(fk.POmsb@+v(i+*.?GR][%/D*BrR;8PUCHN;s%Cq|5+kfbejsx3J');
	define('SECURE_AUTH_SALT', 'gU{UVhZlGwTAT 1S5~0=-vWDs$bF/@ddmf3LSd).wpQOZLh)|7Y=-2@EGxD;ftU`');
	define('LOGGED_IN_SALT',   'iV~<rqNPI$o6-=`NsTGEC3`xvm4Zx46%qK|Dj+2_DtM Dv*Mn(~=%RGE|jDwR@_e');
	define('NONCE_SALT',       'B6 gikU0wTr-AIUp F;*GQ@?;dxeq8Q=5i~aVf~_TN=rOhb|H6a1sn]4MZx[nx@r');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

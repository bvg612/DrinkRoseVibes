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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '653533' );

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
define( 'AUTH_KEY',         'D7FPpK Kvv*5mp9%,tQ?V=7g$d/}Q3yRF!F7@W,onZ q]B,qmOu/;=OW4G4(54}[' );
define( 'SECURE_AUTH_KEY',  'r/c|_iAOphYN`?bC-w$oC$}tFjX/k!Z?dvvQ T;`{x;R[U2.Ue2Z5P(p n^Ovc/x' );
define( 'LOGGED_IN_KEY',    ':7t?MZ3iNT^;Lb.7XObVMglVwR(qUDUME7S<;*:ChA:n%?RN|-:u#O!aT>KqI5yw' );
define( 'NONCE_KEY',        'QUaBc*DUk|iZXJ|Et,C>bi%#iVKD!N$pQH=_lUyplS)?C#pBS2N:0nb=2 m[~_9+' );
define( 'AUTH_SALT',        'V_.&yP5j.C!ZWy~}T_>}CjBDy}3A`I=P>W2U_%teI}7^&RK8VfsY;c)5Qw[8xYeO' );
define( 'SECURE_AUTH_SALT', 'nGCq~`p+9>FG*{&7CGB2Vz5*vU3H6L1`GbS6ph+mL uKA=Yr|DVD$N>}@T&;dMB1' );
define( 'LOGGED_IN_SALT',   'wB;Ch!O L[(Y8#y_1J?,]0LQd)=uRGD1rgd{hOB@MdDzWFi*FwxF^wOMcG8Ji>h#' );
define( 'NONCE_SALT',       '4thFxRNa^$:/zB>j;-l<enu8]7~^]~U2Sc:S}M`LL{)^8j0fL4kUEesMW0+!X]O;' );

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

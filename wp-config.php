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
define( 'DB_NAME', 'das' );

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
define( 'AUTH_KEY',         'NjZ.`3avwWWW&t&_;Ne$:?Y}2BZEy`P@p.H,g+@}[}PG@yB%|=6/0nJu%jo}GWUd' );
define( 'SECURE_AUTH_KEY',  '_U 3u:SE0g7{^xeQ*wB,@gpeKE1v%PA1dU(Zp:AxmXq555n<!uX@A?<,!w<<wYm/' );
define( 'LOGGED_IN_KEY',    '?I$MBqLKr0hq3Io{&ftJ1vHavc?xMt[*ksZ:rXEc$L-v-s7q([uE7RyG)egAW$wa' );
define( 'NONCE_KEY',        'a%9#*H%e1G.F+bswFi0;v0`J7Xcv@MGzP:nHjOf]*S)k q]C<<a6AClMTYq8<m/3' );
define( 'AUTH_SALT',        '@g<x4(/D%|`,3]Nov7p|sJQ(H2JCI*l8Zm5uAltD`&U-5Ie_XD7IAUMil@[_61hM' );
define( 'SECURE_AUTH_SALT', '[{MS]LHoB0S{ilR=ZI-cw30Thc$$bioB:--r-D8mI?FOt!]6p1ERQY%@G/LHDNuR' );
define( 'LOGGED_IN_SALT',   'ueG*W9?^y~(e]jz|Lq:PzS ]M90i2`vS6+B<B?d!eGix1,Iaf`;WTV7:tYVC@<Ew' );
define( 'NONCE_SALT',       'yV/ICqL5rse;>.9&=AKU5>^aq$>P<> pSB$:iMczA?Y;!_7^1{;l-e]^+r<2wO)Q' );

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

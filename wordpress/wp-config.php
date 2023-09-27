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
define( 'DB_NAME', 'Web' );

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
define( 'AUTH_KEY',         'VwG(uw>ugl`}u>VkSdSG]rwJOr;3+ct,2-&TcBaX.SA=5[I,i`CLli@5Y3iFX l)' );
define( 'SECURE_AUTH_KEY',  'W|u;<];|Q,{UB^5 Xf^zpTG2aJNRXdGbN,E_UPUdQTW1}eK!bFc28mt`v?CMP7Ce' );
define( 'LOGGED_IN_KEY',    'lF1(S>8v#&c@,J<S1CB;-Hw$}NrSc.Go3f+<!4[1^Z]~[KZm+pp5uq()i/-PEO_I' );
define( 'NONCE_KEY',        'aa_v90t70DA96+7)z(@87XY~UU9dMbZWh7J@{%0=%K5fWHSScfzyQ*h>R,f*V5/b' );
define( 'AUTH_SALT',        ' ;|D^L.u%u~dX}0,]l9h!J|(z}+o9hu*Z4YBLl*vW9|?@_?[~d-r])y@5mWQ8KHx' );
define( 'SECURE_AUTH_SALT', 'g:&HF)@jh1H?GM%UfCVyYfYxue-Wd>;6!>0K]qECV`X023mcck6tX&h8^i6$XMV9' );
define( 'LOGGED_IN_SALT',   'v6um#4_eB ^) ;Da_/Mk9v[d-tsfMMstiN^H3.m!!wLk5Jjl& VN@9gUHLv b_pT' );
define( 'NONCE_SALT',       '&y@fNC(TDtE];DL+sP(VO}gAGwTJ,WdWg|$6*CE0;q!)aKvB=R_<l?y{nW^U~uQ(' );

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

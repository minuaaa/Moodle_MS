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
define( 'DB_NAME', 'ms_ekursai' );

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
define( 'AUTH_KEY',         'mk6s ?_5U>y.O$A)20_.2I7 RvULOt.q LL@`bYu_o3ZN5bbM?5)VO9L145t`[Pv' );
define( 'SECURE_AUTH_KEY',  'M4D>(3t7N|!?5>qcT~Qqr&&Y?3E2|#$,tm7XWRDPi*E)2J IV-`f$jv3OOJd[r[/' );
define( 'LOGGED_IN_KEY',    'U~$a}(V^RW-w!Dq_eL{CZSJ}WZ->4d4y45CO],{S7rQiIsq00-T/Jj}t)6xs0)S.' );
define( 'NONCE_KEY',        'x5ifICZcP!xmVIrBCE6SZc#W nzcV^RF4-VhR&jGoUSNct4E]j)vw%{bzrX4[Q~S' );
define( 'AUTH_SALT',        '}e[ T{XlvX2L OBU=;m]m6HBuD@=FKP*NXR~ i+d7c7w-qaI[sX2|nkJfFWW2LWv' );
define( 'SECURE_AUTH_SALT', '<g2l93[i>g`r~%1kd3ale0K4C`}399Q5W/V9E{>%pqRMw;u/c/iO2cG[&+Tb;|A%' );
define( 'LOGGED_IN_SALT',   ';)rJ?P;Yt0$ZO)vFQc[_@Ix0_uRjbYR2rH$GX{dH:>Ff>0Bd@bl,_|6l7Dw8=j-b' );
define( 'NONCE_SALT',       'zh(6`x4E#t+^UFH1kV_W|hPCo/t;H7+ Z(I^%:lhwI4&s/QBxng& !MWv#0/&_1c' );

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

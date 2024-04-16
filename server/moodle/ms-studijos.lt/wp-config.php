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
define( 'DB_NAME', 'ms_studijos' );

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
define( 'AUTH_KEY',         'w,}x%am],t`Em[JUq{I|Q>Vc6J}&,`3MkyD9g^+Z=5`A0C3Aq r_.3L-whAb,vzo' );
define( 'SECURE_AUTH_KEY',  ']P;h*`8?zYWebUbR[8[3+w@$M!2l^ksk0>Y(RePs|H|VGL6Zr+)s1FFH(qJ}egMI' );
define( 'LOGGED_IN_KEY',    '19}u_sxc%T[#@Bb|(xX]=32l?M>O~7zK:crm)K!fSM}6n|a*#:+7whR9tJ-uhoGR' );
define( 'NONCE_KEY',        '|fdnWt&cu`d9vHzhXk[_d:dD<W;++)yJAXp5OyS{7>pno&)c$PH/qKkPc0Edj5JG' );
define( 'AUTH_SALT',        'fa)A#ZFt}+^^ii#rocHr|&]jXJ.H * ]FHe6pYCc/ B!Y38+)LOyt89w^n |-?`[' );
define( 'SECURE_AUTH_SALT', 'G1oG6=.26x}DyDLT|z]UQ#,iyyk7@kz1[[p$5&M_FE$?~`#lOSeEgpx~PwIee:TN' );
define( 'LOGGED_IN_SALT',   'SX*%>^6:DA@RkU./^{ i( |((gO_]h([B!(*,GPId}5sB6<sCTHZdW}eE_pi%Z7G' );
define( 'NONCE_SALT',       'u;lE]k[suC/EQB{I LTGX(!tmMJSQn?fLo?dNf3qj3.~Ul4*R!+()=XAvAX^8%=H' );

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

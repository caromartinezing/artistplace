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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         ';HE&:kU%5lpdD1,<>DYp{>&A7Z .*I>9Q2/$Y5*J3Y0W9W$Sv>ttW[hh4@L57{Nn' );
define( 'SECURE_AUTH_KEY',  'SjR1dWuHU 1J1a!$Lk|2qns9r@cO5O+] .E6lZ}G=sY1yv}<6NeF,<^gtIVU%N2%' );
define( 'LOGGED_IN_KEY',    ')AOR]_iNc%#!J$KW1[h6ThpEmVX?sS17V12RnRwE%27Vb_I;5FUP?O$^mmG>zjAW' );
define( 'NONCE_KEY',        'Fw[SI/J<}A}S7,N7pJ5oL}e&s_4h=Gxa|Ox6Qf7IK7}c^{X1A@d#fN=gzYN[mf|4' );
define( 'AUTH_SALT',        '3hW&;-e{%Iq8vluP.w69`l6{jg#S9sydtI6h}7/%2q3Uy`a|Nnb1osp cwf#7P?`' );
define( 'SECURE_AUTH_SALT', 'y5=xGxGJi5!FQ 9Ob:10hJ4yXrDwh#<Zn{,3,O Z<?1)d%BXe-s7k3vdnv>GtS+9' );
define( 'LOGGED_IN_SALT',   '-}XZi5<m4TF` ^#H~d)wd.CD`~qI4?buH^28/D9x?]H%HrYMJ,FK:w(o}5PKi-_8' );
define( 'NONCE_SALT',       'j;RV@qK6&qlZM%k}RmN)x[@W[P7u+~QNl<N3b1oB2J*]<Oq4q@&mMJI_M7+z?1`N' );

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

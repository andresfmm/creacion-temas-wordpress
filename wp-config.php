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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\laragon\www\creacion-temas-wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'temas_woocomerce' );

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
define( 'AUTH_KEY',         '9/P:!{M38. +X]Rr,QHkM@RJ8JhqmdfQ6H0$^B*,Bu6,FrC*r;kEEcp|1ap-7_b9' );
define( 'SECURE_AUTH_KEY',  'nIvC 6<Idq<tApmFEE<Hubt~Vl+0]pGr5Zlq#es*zMev3u[P7_.A1 2v9nMy2H;z' );
define( 'LOGGED_IN_KEY',    'mC_W#0rYQ;&wY>xQ)`r&e[K?dTH+Bm~|59Qk2NIpR,fL>n,S+4?Nc$2yr,o^P_n3' );
define( 'NONCE_KEY',        'g[`>xdz`*tQ;P;U@c=[5&ZPUMo7Z7gnP6qqPTp<q(o>iS,+MWgIeb-b[IQap8H`n' );
define( 'AUTH_SALT',        'kVcaN(ziW~7p`Qp!5h2D~V*])(]lH{@$a,k&@ cuBd*a5q $y!ZziM?[).=;qCy!' );
define( 'SECURE_AUTH_SALT', 'hs/?d-TbdJ#}4ATek:<f*Mgz|CA=:Ay8:nVB-Fv:8mV-!HNkZGI/5_{4%`C{3RBs' );
define( 'LOGGED_IN_SALT',   'm8js+)m-fd;Gg/jPCt/`_&J|F* =T0dmZ9nk<0g6HfAj]wc!+J.FgOmID)-I(jnh' );
define( 'NONCE_SALT',       '[3)m=gmsG-a;(D)X`WL7!Stjbl.q18%QZQkC;t7/*#qN,7&W?wXh6r8OfxJ]:pc5' );

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

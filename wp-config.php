<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'ziyad' );

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
define( 'AUTH_KEY',         'iGJ7*C&.eoDw&GgBj$(&A0ep=_/3DDO6e*URTQZi-@y(D#NqJv,V:/tOF9K_>e_q' );
define( 'SECURE_AUTH_KEY',  'JFa~*jO-FM/(>j.L`#]) Y~JSHm:34N9Am:;/Pq[OKlGzCsX*g]m)r$]4+bTuO!i' );
define( 'LOGGED_IN_KEY',    '&O;rE84.l*x HKAWsjneK1eWoY~2&q&~3~V;xa9:TMg,f7;@ZRw>Zo87;^$, $.3' );
define( 'NONCE_KEY',        '( YiULHi>V|x?4Q1 86e1;fW_]cNLo145Y$$@M![(.^IbVE^rs6rs%`?9|BH{lrn' );
define( 'AUTH_SALT',        'ac/SfUfzhM^C<[sjCWLoJw$!)f>S!}2l<1G:Qf*_utFs5xK2C.90oPq86<wjqU@)' );
define( 'SECURE_AUTH_SALT', 'x{w9<{gPg)&H!~B5]Jn5Uoa74jN^#Yirm?gnHf#q*xB.HtL4R|hnznKt<#ntFwD>' );
define( 'LOGGED_IN_SALT',   '8TB62axBxd1X>_6RCUP2r^B t6B}nN+%2j0<cnyBpDt=N_Mp5gV:0q8l|J<cy<x|' );
define( 'NONCE_SALT',       ',v~9dvtrB2mA2!;Y0Y--5miZbL<_kC0+wj-lSy?dvMj-HB|:$p#jHGNg!?kqT*9N' );

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

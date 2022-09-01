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
define( 'DB_NAME', 'wordpress_codytech' );

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
define( 'AUTH_KEY',         'Bspk-uZ>$vvyR[%9:Tv >N9yWW%i=U]klaJ8nAbEhKbgpymBk$sh+I2H2opc>i>j' );
define( 'SECURE_AUTH_KEY',  'K{h+RbD4s*+W945UjL`Gy2IqsrSw#1B$u527QK*mgM42!^kF9=a0BO=AjU*hHK}_' );
define( 'LOGGED_IN_KEY',    'evtBq_e[4vlu#30#h=)*[8*mo<Sp[bJ,4zj#X/,9%k%y~/oe!_XI6)Oag.w<i;05' );
define( 'NONCE_KEY',        'qTI1*at#4^LX.[Nt g>M%74hKdnx2m&?H(Vo;h:,%}_Gn_e_u?f-&]g}|z+r=(&1' );
define( 'AUTH_SALT',        'nOhX~yzJr.AKITs||n;S s*6}}4P>ze$J&veM*dE-/:l#.fn.-oa{>,#WWa.!#r>' );
define( 'SECURE_AUTH_SALT', 'cRjP.1melAs=ai7kd{hX1Q)YJHZlHwB0B,Kev7*-;]UK(ld+TGESaH6Gjjwu8vvM' );
define( 'LOGGED_IN_SALT',   'TcmZ9&{>q]0AF`g`N5$2vj;LX}tJEXIOlFbDf6X<XdfF|Jl xN0{-S]>wHN)d<;h' );
define( 'NONCE_SALT',       '[TXYw?~;l?|k1{nY}A:}Q^P| Me{>oI9Wp`1>Bn`N@c-k^hQ#he6Z6;zmnsM7,6K' );

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

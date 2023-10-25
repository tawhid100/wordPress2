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
define( 'DB_NAME', 'esite' );

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
define( 'AUTH_KEY',         'V}4,Gkt$ONtRMvNCwCl+8j.)Q=BK9lX$M(3dxk!2N$/6&-0.DL036C Vn84EO5us' );
define( 'SECURE_AUTH_KEY',  'jB,wy)}GA$nth0.fEWk8jVY?UEl`wzvVs:1T-ou5Ymox}fIW(&?3/[KO+rJEVK5d' );
define( 'LOGGED_IN_KEY',    'A|oP}![`M^0Jb>{g>p5N}#dP`f0TzFh?P2SNQc&$:{Q-I#k^*PT!)~V3T]Ds~4VW' );
define( 'NONCE_KEY',        'ldEVV^ROG6m WKh,Q9mR`q)$-M8]G6NTXJv=MrtR6o-~C=P!?$ft5*mrKqT>8Pq:' );
define( 'AUTH_SALT',        ';#CFCP|g5,iFe@f6ggu,y}R6wFZOf,4T|W[JPMw|=#M0ye!x[O:[c<c<&K|}`YKP' );
define( 'SECURE_AUTH_SALT', '/+Gx-a6Vy]i+DbC>~:abzaaI.|X?KV_gv>Aw`CK&;-x%n|GL.At5p.c}Df/rCWq@' );
define( 'LOGGED_IN_SALT',   '/4yfJlnHeF7:[ch0jJ=CXQ{w3-{ibe7DP|3qc /3lXbnUZpvNoS<i$mqWaU`h?_.' );
define( 'NONCE_SALT',       'PDewH@TMcx(5/v!6W~(E1$Adx@M>RSi~@,lt&V4zvg1y+e#_#4v~}J`rotYRhOo*' );

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

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
define( 'DB_NAME', 'wpTheme' );

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
define( 'AUTH_KEY',         'tO4yl>`X1Ogr_/c>_kP;(R=`)Qjir`,T0hoq&ry~|gl8lBcc()kL:.iZK5;iud2G' );
define( 'SECURE_AUTH_KEY',  '3G.i?cxp$*fPRO=jjHumKIG8= F[bVGA:J4&Mwz_]fHV3U8Di!-}@*zN+_7iOa)5' );
define( 'LOGGED_IN_KEY',    '`|EkW.^!cp3K`s-)?FUT{RckW!Oi~IQ6b@2i~wt{!y=5n$44d0Hc9!VSJ5u@q6}[' );
define( 'NONCE_KEY',        'vErm[9qe)Imy[SO-*k|O)<A>JLcX:DK.7d#/SCy:+h<mQQGf<-mZ@yPz7bAn_SdH' );
define( 'AUTH_SALT',        '_$_M`!d./P!,ZefSIV(tFlLlr#>#E7F6:9Bjh3h-4TF ,}.Q:*|A^RRew1qeR2VZ' );
define( 'SECURE_AUTH_SALT', 'SI0Ttq^{SF~[!z|7VUxHjTQC&<X@>Q{QL<^Ny#:@o42SsGCVk8p )qV`u$dGO8Mp' );
define( 'LOGGED_IN_SALT',   'f_VmhJAW>Gp~duw%$k_`BNhJzNgVsG~-UUMl&|:.X&e8`87~:b:hf5AH~7WDEK5g' );
define( 'NONCE_SALT',       'EzKZZ <RIG|rq^xd6PH9^Rf-2|I R^` Q59p>~ENF5&E-= :#Unz@c1-XAkC#tT2' );

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

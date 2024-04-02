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
define( 'DB_NAME', 'khansoftgermany' );

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

define( 'FS_METHOD', 'direct' );
// define('WP_HOME', 'http://192.168.50.117:8100/wordpress/');
// define('WP_SITEURL', 'http://192.168.50.117:8100/wordpress/');

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
define( 'AUTH_KEY',         'Pb;OL<[U,kbypI{YkIwvcsrCmBIl,lO.@;EHTvsM-U66%8}}F)7M)THH!,H]mELd' );
define( 'SECURE_AUTH_KEY',  'MTxg8].;@lMkI!@x*<NEPA#!6^:V8|nU<ZiUW`gM]<pX3U[W#OI@#%!(Mv}]z658' );
define( 'LOGGED_IN_KEY',    '90bo9}d5%%0~p,XX}dWcLEJ,JC-_xNFIa ?*D8N(6*L_?qc_}ROYjW:3lBR{pd9i' );
define( 'NONCE_KEY',        '^~BE:RQy~^$~=2}bX`^p/ fz2zlJ}m_rtd<VFP56;nkF=%[H#`,n*8)fwM-H?EA`' );
define( 'AUTH_SALT',        'P_D6BQeJ{SH>O{q/]zJquPvhs.^F0FrqRHi;)E E4O`L3CphADu]Rf.->jH3=zz!' );
define( 'SECURE_AUTH_SALT', 'l|i<0%*g2,.^v7rL1zo%`|n7;8WmY42^L3rq9Y!7>0^_ loAK1c9^^]DI+oheU<Q' );
define( 'LOGGED_IN_SALT',   'jkqM5-o3GA>},pX;d]Z4YwSZL`vJkNMaq|wZq6<=/Y5F5cM[XjLg`#KSlScBCafs' );
define( 'NONCE_SALT',       'hzPe(/ZEY&=6YIj?[r~lEvx)~Z_m8b(F@E^0uE$|87Nx dRRrrr:Q7bYQR_OL$N@' );

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

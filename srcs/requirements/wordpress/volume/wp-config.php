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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'osarsar_db' );

/** Database username */
define( 'DB_USER', 'osarsar' );

/** Database password */
define( 'DB_PASSWORD', 'osarsar123' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'zaHY]=:Auk#m.rF[}BU7-pFf!ry>h|z|&ss/<q;naLl,Y=@g-m<:O!Fb$t@:0V>D' );
define( 'SECURE_AUTH_KEY',   'I)yr=zl-lw=e50*pi8d[bj[8*p;!gvd3E6Ofwj^h,uN/&ww3rx-x_5s0BO/;Jo4c' );
define( 'LOGGED_IN_KEY',     'GS2l3||j<j CBlh}Rmis&rY4m$K%6(si3EKXRYvFUP}?UEqHk^]:?&oETPrZ^t{O' );
define( 'NONCE_KEY',         'I_YzUaQT(@J>oGP|DC5DBwp``N8g0r<f(m[AiT0>RpG-K*yd=I<LPU].CCFZ%USM' );
define( 'AUTH_SALT',         'S_H8(-nw5(]nnT={@W./iFCE)i5#~>]QW*5]#2(5Fs/BkNM;o)0,Kn|{V]lZ6N(t' );
define( 'SECURE_AUTH_SALT',  'vxymUD#vCx<P)xz!.5;ugc{qNyK,S,JN6&Ck0#`Nd+xn>{o;:1&Md5+|$<eTX[Uh' );
define( 'LOGGED_IN_SALT',    'tPfuyL1 ~xmRHHmIMiykQi0jiU$9*H$i&+U0Ai[wy5Jk8<?51KM>BfW]5)&9,(Cr' );
define( 'NONCE_SALT',        'pz9_z8K:Snlg@,k.aQIw}pMki.vfJGhql19/@qOa+4FawtF2>1{F7_ko=;#3zZ}|' );
define( 'WP_CACHE_KEY_SALT', 'J&(ntk.GIg32KwN!*]?kN64k 4DPhpkAr(37ud-!Btc:O&g|p7UDWJ~9o:0|hnl<' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_REDIS_HOST', 'redis' );
define( 'WP_REDIS_PORT', 6379 );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

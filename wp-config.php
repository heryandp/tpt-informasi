<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'informasi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tk,GG@2}1#z,cNhU-ZqlCbH4XZ9}ypx8!Tm|]4pLV fz70|MKQ@odu<u_-b)-$vJ' );
define( 'SECURE_AUTH_KEY',  '$hmod)G!clL11D%XHRMt1rEf-avhPCDDwpmhm94D{eU+k0nA?K3.|$apPi5VNLit' );
define( 'LOGGED_IN_KEY',    'QB#e:udQ7Sk8t+{RwDR.HhFjXjk<o]RT0KfPbr8*fSjJmi7eK:A>$3e(Q?uZoO1t' );
define( 'NONCE_KEY',        'd?]>]=8TpXfLEzn68Up40`f.BU/pLx9HB ^ !Y~/ TP<Az@!Kwk,-IWm16ix7G3r' );
define( 'AUTH_SALT',        '(:)C.BGaW]2O;&%;~}>?:()0=Dd90AMsTy}sr/*^7dKXztf6y.pD|d.X9Oa^PqsU' );
define( 'SECURE_AUTH_SALT', 'VSJ!g>KJ;R?[Z qTCruaZN*T.{V.n{;Z)vkQ%sEME}fIJSz.PuxS;6kXHpSP#@:H' );
define( 'LOGGED_IN_SALT',   '8=KdVTo)<-L/60&IYlHT]%(K]7Sq5`eAw-RMCH;A3Bi>5|rRJQmEkg!=&kk_%+qi' );
define( 'NONCE_SALT',       'X6ltzq3OV!>H$$SSl,NxNVo|5rspwNppx85.HPCzsk6R7k}iA%,rp-*.)lJXeToM' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

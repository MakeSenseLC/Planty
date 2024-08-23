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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '1R]9Jd139T8P, i)8mu:_ibLVqkRPC^:kNU<a.x]w#^m|]Q=Hzgbk<rpa^t%>K*m' );
define( 'SECURE_AUTH_KEY',   'f?-j4R*$FLPJKy>6tlqDb `@CHe-]3jW[a`D,@`fbtrZ%q3t6doTrO$h<^?%<lQk' );
define( 'LOGGED_IN_KEY',     'MUD/AZyTdSg-%7X,s&+)}[#4Nr;%weYCkadxUC$A}F3+;z>.R-S|XPuO_ah#kHgg' );
define( 'NONCE_KEY',         'q.Sel)akQ~0}P23q24LsNw2,ryuEx~$[=+aPDEt~UqFy=+)ychItqB7Dc:!@$_r}' );
define( 'AUTH_SALT',         'cot G*y9:$e<c8U.wtk;xa>nx%)ARySI0VIN.D(X/LriO7cTU<]f?dM0ay>8U<oy' );
define( 'SECURE_AUTH_SALT',  'j:[Ey|f`*D[$/A86UB*;t+;,ow<-7*0V|DqUJOFmkFF<wrs:v7,Lonpo P,e3vzf' );
define( 'LOGGED_IN_SALT',    '$.kP%nrQDA60-N@:rcOus>}?hXnthX(NyHYEs_N_PwCm@Ofd+X<Xc%(/NJ4p:IO3' );
define( 'NONCE_SALT',        '^2e{@r6E[v#d 1~x~wsYf;tRrX[%B ?;w+1(~_1ts|YcR89hAxjqGFi)R+w(#-14' );
define( 'WP_CACHE_KEY_SALT', 'I!,2z1HN-6R]^Da84T=F#xqf_>WECY(>w,A2%F2o_Wp#o!R9/qRHNUbfmW}c$mV1' );


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
	define('WP_DEBUG', true);
	define('WP_DEBUG_LOG', true);
	define('WP_DEBUG_DISPLAY', false);
	@ini_set('display_errors', 0);

}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

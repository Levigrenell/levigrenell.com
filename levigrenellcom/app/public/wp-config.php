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
define( 'AUTH_KEY',          'X4}^Vp1=4JTBu`/y*a~F};)[F%]0emp LD4[hr&05?JgaPp<d7rzYt{h%|<i?qXb' );
define( 'SECURE_AUTH_KEY',   '  AMV7l?u{N+zH`EeT~cA_-h-sFets$}}[! 6?Jjhc!Txnwj1N.nK=<8QR(F?sRp' );
define( 'LOGGED_IN_KEY',     'WTOMMaQJH<:!75G,Q+rn#F 1# ]d=_9r-{5$|GWMpi64b<0A47[(ypfKd<7e}ueI' );
define( 'NONCE_KEY',         '>(W#ps])#0@OaX85@Z40^$~L>z{$z5yI<twP]CuJEsPY0PA?rM4Y;vF|jA2S.J)|' );
define( 'AUTH_SALT',         'C{x+SYC;009ZSBw[MK){.JXjGdd[G-zhWkt1Egu,7n]f0wIak?y#qnDFO9?nRFXT' );
define( 'SECURE_AUTH_SALT',  'xLs/ QAC{.c|B;@<S!isfoshG]&:, X?-LQVBhYCP@rMe.~@;YMg#nP&.k k`b@S' );
define( 'LOGGED_IN_SALT',    'PD>p);XzsjA5Vi`~<*-?[=@ HibC)Ycs#u=Z,/%MN8k3q!hsmq<{jhCCOnv&jGIF' );
define( 'NONCE_SALT',        'TOyA)FA!x EE3tA5Y^98Iz*uveZtR_w>xKHkemhQAlPT*{jr!MTv}pZrqhp7:A~S' );
define( 'WP_CACHE_KEY_SALT', 'F&$MH1(`VLQy#7Nh+X<%x]9XPqs]&63GcgrF,`>[#%RZldm$D;Knuf~5D Hq$L1i' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'function4' );

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
define( 'AUTH_KEY',         'pMVa5wJu-8=Vhym:moB:k5gwHE.[sZ`UHG:NJ[DCYwww,]CmWjr?1PyF2!fG!A1p' );
define( 'SECURE_AUTH_KEY',  'aO/KiLQZ|DmKIewSWnwy*VfSI}/!{9EF5-%3`g6(.M!_Ojb(O3(p1V;K3#IB~/gy' );
define( 'LOGGED_IN_KEY',    'g?k!:31_}k02*t!M^cBhloH,e7L%rbm|~-(>+rSK~-deim&LUCUAC-w<le/GcWdX' );
define( 'NONCE_KEY',        'x,*_rWz+3%<59:+5ASrcoL(mL_7_9)PNvbI*(%&sju<_ `.af%BXD$1i,avF}F&L' );
define( 'AUTH_SALT',        'KKTRT$%U1gcE4z8WL;;%erdtC[&-((3J=<.k4f$ua)4`zQ5xxK,!na)sI)5II_<N' );
define( 'SECURE_AUTH_SALT', 'Tg;EO6+hkcx6`^UHTsQs.;*ID!V,j+q`km~Mp^9=Vbcke^BA!:+.j8}q;tlr^{k@' );
define( 'LOGGED_IN_SALT',   '~_pC9(we5WOcTl!S0b|p$`G8VuV-mgbe+@q7^lKTW>wto.^1O2&/x{4;p`#PHoHE' );
define( 'NONCE_SALT',       'zr>E4^xgZkAoP[u]cZi!CUpjat }k(h}[M[9F)Ec`YL|[ty|tg=8~w;mp^zN)8v1' );

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

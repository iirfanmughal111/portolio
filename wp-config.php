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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          ') 37a5dm<>i~sZk*mb_r@gT5b4L35+xs765<N|t(TOhDbh7us;H2$:u-Xx5{=HA-' );
define( 'SECURE_AUTH_KEY',   'h}X H40?UPN(l@s6M+f;b !7aE B!Ffh51>HPV[%lRHYc pzJ1Sre:E<kp7/tcaE' );
define( 'LOGGED_IN_KEY',     'gua|4`7s5Cld):}(`Mb<tV(^ -y2c=aNHzD2,~Lc}W;=eqw&{&hYcwtU<M1W#[m#' );
define( 'NONCE_KEY',         'bl>p`][=n(O7R:P}YUlvX?G{=]pr~:qnUp/>5i;h[P/oxmOuH3,&ME9BCQ5L i,S' );
define( 'AUTH_SALT',         'hD#txe(.37S[A[&v}a(jSc2RGO.Z;%k@Zw7si`MBG;a~DF)~N|L {=)Q;b0?SPf>' );
define( 'SECURE_AUTH_SALT',  'QyCy,J-v!y4dX)>?%U:&Hrh(p[_loVg`17DPcI<6PHe)=r~pP=(U[o7fWDVb4Nca' );
define( 'LOGGED_IN_SALT',    'OeQ`DV3W42%j`^8 2h-LPzPcIm{>#rc<F .p@c]q~Yiqj[bn qfx;RIh+_JAnhw9' );
define( 'NONCE_SALT',        'p#  bH mia^&^g&P^o]O|-mmyLh{9s6}0hvAvyy#UjSmleB4Fk^w6,AbowC]M|n ' );
define( 'WP_CACHE_KEY_SALT', '_gYq79rA@TSD.z8*0_w(;<tW%KTlKsSofL[i(t@_/8/ea#sI]WF5`R8)YX|FFZTD' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

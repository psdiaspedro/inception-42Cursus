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

/** Fix wordpress css ngrox */
define( "WP_HOME", "https://" .$_SERVER["HTTP_HOST"]. "/" );
define( "WP_SITEURL", "https://" .$_SERVER["HTTP_HOST"]. "/" );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('MYSQL_DATABASE') );

/** Database username */
define( 'DB_USER', getenv('MYSQL_USER') );

/** Database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') );

/** Database hostname */
define( 'DB_HOST', getenv('MYSQL_HOST') );

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
define('AUTH_KEY',         'S~<ounPd>rxR<>iw4gOe}:?2e+|seDA HI1btqCC}Xn6{]PdT[9[s0|ivfz=o}6I');
define('SECURE_AUTH_KEY',  'jpN5ih[QP4=qi0#=PiG}uY3+|~G.z^ioma=|q_<@5U7>lac+p+:xS|-+9-: &::}');
define('LOGGED_IN_KEY',    'gN_*xKzNqH+x-+`i9v`k[ZxP>cv)I`S/`O:e4J%-eXCFI++yBW<aG+lMNjBD5O0T');
define('NONCE_KEY',        'O+--fD@Zj=]8:ORHGF4f]plCR07X=NB}^3?M67jzY^SYBr]-e&VPP a}@v8BZ;*Q');
define('AUTH_SALT',        'W ^T[SlgS?@w:2nS9lJ~=GV4P1Udz!.w+O;+]A>YI$zk>R7OA32|c>@-LPJ5$P[H');
define('SECURE_AUTH_SALT', 'LA`@J}fh=JqnN]*H=|C|;2WFP@FeO6_`^HAl!T{:m36m4?f|3!fD|x ,8Xoqtg}g');
define('LOGGED_IN_SALT',   '( zzH@t+f!mi8cpZF%?#?I!FY]UBJ.IzoF}rRye4!X3 zbm,Ius.,y/G|w1Ado{c');
define('NONCE_SALT',       '9<wF^ti`*jpo:Xu|1qj2/1d|id&[aW|9:;79~U5(~F{&UO{I@%~&F|T^;F8ee]8U');

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

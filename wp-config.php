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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost/wordpress' );

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
define( 'AUTH_KEY',         'laNjt @Q+YY}(5@TYL^Ho%;S+`Y7s><=BO DTa6L8&1)<Ym[OTvxTd5K}q_TQ/(7' );
define( 'SECURE_AUTH_KEY',  'HAm8q0J-3v&$9Ab{8? $->@0Zmsuu~at(,H;Ztl% b7C[XiXKOWr;x;Z8:Fs~%%5' );
define( 'LOGGED_IN_KEY',    '0MIzLx=*4H1L%:cBLS=9U+M`rGp0,O0Iiy01X#/rK_)3c8Bdl57:F&=RW2S&N2@W' );
define( 'NONCE_KEY',        'sciZpTA+6rT2?)y=Zjf//3XZR 6dG8CRt6(1/amSR?g9Tjhy5-i~]gE%z+x!V3|_' );
define( 'AUTH_SALT',        'sur8(ERf@;{{]h3,v_k+*/DrjI+%]=NIk2LbD|`An8mX)v)+YDsRSZ80s<$H4YNx' );
define( 'SECURE_AUTH_SALT', 'v2[=&pZQK_EC</]=]K-E]PkwrkGEGDL#.xtgu;)[IA:%-(; ]jRBobe~SeQxPW&!' );
define( 'LOGGED_IN_SALT',   'YqdF/K0r[mxaF8lLh52&DPqCD):Hp~0<KF`[>^Re3@y47$P[5JAs4TG7OtfXZ$>7' );
define( 'NONCE_SALT',       '0c[3D]G1L>x:!QSla<u-<!VHmMR?wp@u:Pf}tA()=,HR+B/A6OuMJ:H3ZJQD=L-/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

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
define( 'DB_NAME', 'ecoarch' );

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
define( 'AUTH_KEY',         'gGH,N{T/_rZ?Vz`*4x >d/pIx2t4Iv`&zG4KYKAKTT^.qCbN{Ph*}l4erLU>D!KL' );
define( 'SECURE_AUTH_KEY',  '])!qW=#c`?K?K%IbBIfz;f2o#:jN=aY{HY84Ul6(bQ|s;Orr,chLe<5WDZ3vXtM;' );
define( 'LOGGED_IN_KEY',    'c<1lG64CnyBZgyOo,odl}hZ(KliFpoo(;@KzgIAvg3b6xnjv-1?:{iyXT>;o*U-l' );
define( 'NONCE_KEY',        '/ET4w|cJW8Y+X.|}0ej7-D1h$}3Qk{qdc.V95U#`q8$PsMXE.bi@IYS{Ls:k@o!|' );
define( 'AUTH_SALT',        '%fNA~!JTg#a0sVXWp>a.4;H%zp!X)%$Fu2Zy,t:S>kIsjjV<j;`.Vx.Rk%#3?UV2' );
define( 'SECURE_AUTH_SALT', '^QPP[&;]<(4GGKWp_?bkN(Idh<^4TgU90SPAu}sR{_^Pj1HOs3B~=t/7zX%(2a7U' );
define( 'LOGGED_IN_SALT',   'X8z[[:#r$?ZG+Yg_*XBIoK[&X#^a_x.yc*HC?/yM,z{j_Opp*G7Cbs >ps~mf<@,' );
define( 'NONCE_SALT',       'q@k*|]z9YjS:DYI_7Hr&ixL:?]gG9MQrPMP{H3e+$P$e7E[WQm^3s30gGG=u(J+d' );

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

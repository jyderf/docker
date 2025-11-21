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
define( 'DB_NAME', 'cms2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '8*vPX5}c3SF9i-AlXd;F^aMJ7JC/~v@N^NSJ/b]&N}Oe6iGoS`n.4Pg]DHj<#+ke' );
define( 'SECURE_AUTH_KEY',  'R6`(DH$0!GPGW[_)P^$DTk4jKH6OEkSb P.s CU:V&Z+|joH k}~nTj|-2X06)-4' );
define( 'LOGGED_IN_KEY',    'xBG0oOZJ,67fz68Cd-.I@|Qh]f$e 5#:]D(l<Lp>dQw5:?|a/<Gj;5!jr3WDdm/l' );
define( 'NONCE_KEY',        '9H;NYHBuh9MW&N_gCzN#?J._w-xd*aaUWl=x)Vym@<Kk?fm@w!8QXb5.j;PL!<Tb' );
define( 'AUTH_SALT',        '`yS-b:?T`u?%brv$_9Yx7UiLzB0;l2OY}+OTyuA^{ES9.>>C}ijN0yv0!Y~NlLiD' );
define( 'SECURE_AUTH_SALT', '~;Z?GTVDOUOhs.>LvW8k<8&7Ix!0LbD7PoDC*:Ns`89=F?*w-S=:d14i iw@Yw:m' );
define( 'LOGGED_IN_SALT',   'rmviNGmbK:EUgg3_C,Z.a/nm#K,* uMvJgx&H`!cLb-0^ g7@P=0B8jowVFY;KJo' );
define( 'NONCE_SALT',       '13Lw999 e$ANp,rn]Z(|!c*At};>Aqd^F5KF|o&y{BDGgf8_PYp%gM71N3oHc]<H' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

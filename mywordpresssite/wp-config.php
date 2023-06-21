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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'UFC_Wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

define('FS_METHOD', 'direct');
define('FS_CHMOD_DIR', 0755);
define('FS_CHMOD_FILE', 0644);


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
define( 'AUTH_KEY',         '2 .t+C:>{|$)MDf/%::rFWgKP}sZVFk!fg+PGw2}=/ksjHj$:*!r(&/{Aja^Ykgo' );
define( 'SECURE_AUTH_KEY',  'NWq134gI0aGtmY/a :rCx-J`ww*t-[[lO&eaWIEDHh7_O=zW~h4*_1<8,)mA3f:#' );
define( 'LOGGED_IN_KEY',    '>z9m4*u8jQax~?-O.2`MBf/! 1zlXpTs-`k!KK[rz.#[RA+msioB+-S;Ekkpg.eQ' );
define( 'NONCE_KEY',        '%f%c4U&i7,+kE+cuH@]vK-[J2#w$/Mrxnt1$T%/H)3.#4PZ143;Vf<m2+-[r3EBY' );
define( 'AUTH_SALT',        'lf,H|u} 9Rc;v?JIzI)xHO,jP4kkO-~<sK}r$R8g,Y$V{68K35Gmo-An ZX* PNO' );
define( 'SECURE_AUTH_SALT', ' .D19RJA3Tx^Oczl lw#Y8{}0 qq4C_99w+%tY!&#;2Y90I|u?WbY2B}k=/t+L>6' );
define( 'LOGGED_IN_SALT',   ':V.x(aOlcIL.^N>GxA9?abo/N6-d1dc(]x|,w+7b=RWAB.JbHOTZ~sJHBE;j|Tkn' );
define( 'NONCE_SALT',       '!V~c$-T%wCXgO-y?P2k;f7=@y#(Y^dU4l,.%#.8si=ZhxVYO{1RoyS5xU{7LWp9K' );

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

define('WP_DEBUG', true);



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


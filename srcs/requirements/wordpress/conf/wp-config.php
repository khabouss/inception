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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'tkhabous' );

/** MySQL database password */
define( 'DB_PASSWORD', '1337tt' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_ALLOW_REPAIR', true);

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
define( 'AUTH_KEY',         '}gak)]:p8?nD3gO.DMUfyiFMXfmKp)AK,pgr-=nE(b:`K_Z_a3N 8_(7|p:Q4 o3' );
define( 'SECURE_AUTH_KEY',  'aWSv0T)i~d/I9>*:sLaE>3OT9*OK;h($4qQ%,T/L.gY*L({|}IGu24mM`[ima<pV' );
define( 'LOGGED_IN_KEY',    'Sq(z?bDy02joz(G>y{PakC3OTpU].I)?m]glUwnaxW3_I2OsSvHzTDbqMdD2vgk2' );
define( 'NONCE_KEY',        'k08N0}8d2vR+#^$|hwN17v-+KyS3fm/-|% 3%s?o)wH|#2X$o#`([QF83Lx ~2aO' );
define( 'AUTH_SALT',        '<Tq8^[H*nb v+dvzVH.hXSQ~wCWW3*pL),Nyd}O&)@zP7/j]d 6<;ym+$9lBDShs' );
define( 'SECURE_AUTH_SALT', 'Plnz`#{w+az1F;T#|;m1#yWM^y-p|G&$vQqnIp=&kqceboo%uSR`X,X!B4&Xktk(' );
define( 'LOGGED_IN_SALT',   'Z_mg<?]`<H LALHDD}%#O$.ky0n;V`vbjMyDYu[fn^{&;xJMzTBV<StjHjyw?5eT' );
define( 'NONCE_SALT',       'O8qG0iVZV=2{<lhO?<e%>6A*S`su(FHMQW|.y_H+t ==_6sm~%S|cz{oWI+4jC@I' );

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


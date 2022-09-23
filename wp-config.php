<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pjovanovic_projekat' );
/** Database username */
define( 'DB_USER', 'pjovanovic_projekat' );
/** Database password */
define( 'DB_PASSWORD', 'V&a!XGbdytgM' );
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
define( 'AUTH_KEY',         'ZBS2z&Z;[=z/!M MBm#Lgo1h<g#~z}-S$/Vy/Q4mwP+)`+{[,7O4v~ >!+ :R>4]' );
define( 'SECURE_AUTH_KEY',  'Iw,`Ofy-Ls[18y7z%3(3Dij`wnbdZ;(SwTaO{aKhQ>{n5b[iCtsDytK;/3L]O}<W' );
define( 'LOGGED_IN_KEY',    'Lq!#x=z^Z0`P3FZTats5-t<o+[CWC :(dJ:J,hmgBd/wPp|#eF:O*LJW7WHQnS/x' );
define( 'NONCE_KEY',        'U2A+j#+1F5ms)GjZ9#]tN,t^%sK,)y$^o,I|z4|)J a5[-50B0qh(E{KLKYVAyb>' );
define( 'AUTH_SALT',        '6pM%BzeJtAb(Kw)l=%Amw)Utk;M 781W3|n0w4Ml@}$7U$P>#.n9TBD*QGJ(Yc;*' );
define( 'SECURE_AUTH_SALT', '8$5c<P4g@j:%M8cQW7I?:%1{*i%$G,$uxQT*!9R&cgr3VpP0Wd5m(|7cuvQbCiIa' );
define( 'LOGGED_IN_SALT',   ']--u3R%biwMy1-ed8hn:~=>1v<2}0q} G>fXP@(~61Z:;y82(aQ*7]=*WYG=aL^s' );
define( 'NONCE_SALT',       '6QpmF7Y1<]$dqhbhr+c!)OX##Z6J=Rh7Zc:qu4Sv;v5^1sq|$;*s`%A`]6f=)!1W' );
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
<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Solomon' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')7;Lv8mNR)0hMfJ9zir$z4nAriFXZT^zmZsSlk<:(ho59e=:LElWn|t##abhuBdZ' );
define( 'SECURE_AUTH_KEY',  '=kKMMbDPm6^W7a4)^jcafTM~4=T4]w.rSagf|H6d(_Wuqz6+y 4@#;.f>lyOB]^T' );
define( 'LOGGED_IN_KEY',    'q?q{>&*k)^!i5N^jY`k<n>;=hl/snDt 4?E5S:y:LT $[u(J>f]NgQ+*U8-HjTK9' );
define( 'NONCE_KEY',        '4Ezhj?F$46&`M(W&/k|WGsh/W/ENn{N/VVu6jqXJKZbkb{+mL&-FwS6Z6`s~1?.u' );
define( 'AUTH_SALT',        'LJ-IzVv2Yn(aJ_Igb.5:!6o>$jIE,U<F;q@{L*%dZ/yWMtqPu$^Q|oPB6SSa4jrE' );
define( 'SECURE_AUTH_SALT', '3@H.6mU/M>VkWHW&O-y~ArZjiWxSzI>IY0j%`-.)~)DzF]dsg!STDZ=M-E*|od{.' );
define( 'LOGGED_IN_SALT',   '#RD4>G:N?0p@;Jm?;|6u]j1:j?C@9esvY1YbXR7-;hhf#p|&tlN[_CL>fiV)ndT#' );
define( 'NONCE_SALT',       'I.}<f397`AiUE%&IzYR5)3^8Q, Y)im[|h6E=p46rWDe]7O{ AyXk4(FvBU,^KT|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/Solomon/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

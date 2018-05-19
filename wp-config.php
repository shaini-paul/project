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
define('DB_NAME', '4project');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{XqJ6ajRdULzz9Uz4Q />J-)WR.)Z={Y>P8*w;h3wE_=)wBxc5WBBmU8/^PM*FE6');
define('SECURE_AUTH_KEY',  'pjuw.<W }D<Hz0+0huA#}cYjCqS?q.XkQyNLWTd~h*+V(yp9u{b~k 3SUpA^Ur#~');
define('LOGGED_IN_KEY',    'z@YR a&Cn(FSIj@~daVB}1|mVa0:],74!Zmh6w!t>Bm*(7AN?ZE+8`~V,jaYd;-x');
define('NONCE_KEY',        'AJSjw3o?_s|In7}s_z>:wf%u/99G%PXUvS8^{tjBIM$J)zGsr!h*Vr2NzZ~QUQom');
define('AUTH_SALT',        '?^e#QXrD)1ny$&r~1nR#20>Vy!`eS6sey6D?dg/W^n)fv|Ri(H AZwUmR/5hMS0n');
define('SECURE_AUTH_SALT', 'U<1,9-J)2V6&?C8m{[}k,;(XKPs@#<?E~b}elT6e[^1Gn461vo_U=lj4l}4O>16$');
define('LOGGED_IN_SALT',   '^T}|apX_50<lK[<P{2NaAYb)[S9 )- {U5jl)=*/;Ze^{]id/#_<:y@WT)p~,l$_');
define('NONCE_SALT',       'Gb.$82hLwi,(@r;Yg@|}|](ZM.yC}|&!:w8*?w%VCAa4s`~;zKl,no=J`=V2MQce');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

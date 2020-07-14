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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'platzigift' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'fOAO$$+o&}TUoD(NElRuy(KNW&[.]17+[Z<Txw ySroLGIv_]u][c1z4|.b:/|e)');
define('SECURE_AUTH_KEY',  'YlFr*B7/Wj-|4Y,clxekE#hRO:thU-e~p}z0)nMTW8Wnm94dlHsd;-b~gvjSH{=z');
define('LOGGED_IN_KEY',    'ULP2v0P A|.Gt0EQ#J7Rz#r/2 <|9L+XmyxJfBea:`376cIjD{Dljf`;[Gy>JMm1');
define('NONCE_KEY',        'RL<N7dffyEMX_va^pySH|5ajvm.0u(+jHp(W:_%~7zwbRPl^8)W4L!~79a?R49F,');
define('AUTH_SALT',        'CDyizxI8_Sp2bK(awofl??5CTxD#9@}LU2y_@tvHtj=/vb3cU#Co*N|%79(nWT&a');
define('SECURE_AUTH_SALT', 'i.WLGcg9I{c7BuVGmR[WG?@9i#,*.u| i(ag}6V,@V2ICVL}:^O]mFiNK^g?fPzL');
define('LOGGED_IN_SALT',   'p{QL[,u%r Rk~vy+tbY-zG`c?kq-sU/iI/4v3M@=E*MOU`-lW0b-sa?(V6}+-Zc(');
define('NONCE_SALT',       '*l[r^Sn Fo*A.AgoO:54gCE6HiJ+!kSN+6eg+jx.zlF{k/(X>/pjg/Un#-J09:k0');
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

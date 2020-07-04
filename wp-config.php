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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'BMUcpXQWg.W[$3I_i8^LZ{WTzK$#NytG.yXB@foyU^}Q$Gg+4 ^X _oNW,7U9M|?' );
define( 'SECURE_AUTH_KEY',  'z)HxqS~.$5^xLJGYyS#::cKZz+e3&k-<2RLSLhLTAb^O&b,oFNMD{%,HY`Yf7hHa' );
define( 'LOGGED_IN_KEY',    '.5:(e{01im5_W=CJs`i1$#lC*E-7|,l9L+Cl4hhJ<YR&lyN@5-6TkViLnzDUzId4' );
define( 'NONCE_KEY',        '#?MUj^Ju<M7cN_MADnw}x4Wbsq/(_8#bvcL|YG}tV_eT9LU$qc;CaH=AkeWQd)(1' );
define( 'AUTH_SALT',        'Om2*in)fP4Qx_r)I6ff4I7jS4^MQHisQi,vUw5aj&8j;FjgclG9$h5=VblLxQ2BM' );
define( 'SECURE_AUTH_SALT', ',*$~lK7h-`+fCx21^zOPUj}/lsVWg1Dec;Li9TJpzpaQjY/*m3(=-ZJhwu@=%toL' );
define( 'LOGGED_IN_SALT',   'B&%!Ei.$X[:0WNwUXCsag:[pG<L~eR]-qbRp6[5Gu&vAR[TJ_p?j@uMRw_CA4vrN' );
define( 'NONCE_SALT',       'Zh7n&;B_wS35Az:~cUg!z&h$)asndls9,fA86v}f*Q#a^T<`s3D^j63S+t#|[qA(' );

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

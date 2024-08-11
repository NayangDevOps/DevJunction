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
define( 'DB_NAME', 'practical_test' );

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
define( 'AUTH_KEY',         'rQh%mi*b#i9?bTNDp~4ZYWOGMb32z ~hP6Dm?lIw3p6[NxPBjSU^g]6ai+LILkf9' );
define( 'SECURE_AUTH_KEY',  'zGtsx~Uv:e,@`n(cIDCsdFEJFb-H3aUyWu9PsUmQA6 #GNr^YQy|L[R3Y,5U_mg>' );
define( 'LOGGED_IN_KEY',    'w0BTu6Xjt-S;OT3SBcl[jO8+TzNI(wP#EYuuG%l:n+`R_UEWGQETi$QDmP-6-=4L' );
define( 'NONCE_KEY',        'mGC0Pi2|)a#,jR)tVF !)iHz5}v%cgTI&zOS]A33>^*0iKSo*tSQ8@6vtuqwO8`v' );
define( 'AUTH_SALT',        '];y+_/x2o+ljFpr:v?9nEZAP@XT;K.3n)JkxyYvXP,(;Tr7o{WN6XBHtBn=[fLH ' );
define( 'SECURE_AUTH_SALT', '^7t=ZhZT__qtt>!7/N/Chu<UPeTJv2tTT}i?ViG:gOk4uZPVA>EV@a;m4)7eJqdS' );
define( 'LOGGED_IN_SALT',   'CFV#@x$aQea>fA3eu$<T{f:$Er51T8>axL0UDh&;}>?{6}W^>G+PS1dPA,i7[w4+' );
define( 'NONCE_SALT',       'y&/ g&ZYs7*mTT:4:PT~`c5N-wG{>H0#Iy?Bm30oq;}A=%*WOV^Hs,?WLF G30po' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

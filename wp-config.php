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
define( 'DB_NAME', 'first_web' );

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
define( 'AUTH_KEY',         '4xHG+45+6Hv9LkaZ{Jkyl!Lg<tSd`N(t.=f(r]! (:nG1h#ppXqmfEpN=*mohMlW' );
define( 'SECURE_AUTH_KEY',  '#A1PdZE{LFSmj&Rs(3/Or-b8-:R%`$m:7XVHI7Qs%4:UX<<65 -F1U%+)c^$gGGy' );
define( 'LOGGED_IN_KEY',    ',^ft;e$op@Tvb8ON7!fg6!luZ;r*U<xqa4Ir*,Jze/RStoF=LgPcqo^KtGLtD:&<' );
define( 'NONCE_KEY',        '10XvrD[#T0QTee~EwO0k(y)w>R{IQ&6q@.A3^m6S4/ TRJp0B7WR{a+k98)5 6mt' );
define( 'AUTH_SALT',        '*Z@!c_P+<08dRT}8M@VdYc9V**^vd-GExDZhH[?z>`d?VVc=Cbm;tSo6g-oTn`8z' );
define( 'SECURE_AUTH_SALT', '~3|sY1)Ms9x;-qcXS.>p-F]a]LhiU 9x,`2FpCpg90na,`ad*w|uG!H0C67P29)7' );
define( 'LOGGED_IN_SALT',   '?t@N=f~W/QmI:}R.FU!dqGeXc++;23dc(!]Q09>%3apy .xc,?~w[X}S^kc Guz7' );
define( 'NONCE_SALT',       '.Uft]6q6yVdZp~(K*ydC^iUtF`Jt2{3.P;2&qE)R^%Qz B+_QzUuxv&G-H6dJcnz' );

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

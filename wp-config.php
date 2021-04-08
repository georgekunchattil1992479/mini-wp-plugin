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
define( 'DB_NAME', 'wp_miniwpplugin' );

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
define( 'AUTH_KEY',         'ox6Xgy<NMof0tA@pv=)9{BvQR7U}6Dhaz%k!wHgCGo2s2YYMmq?B@NNShRHP/0+U' );
define( 'SECURE_AUTH_KEY',  '4,E.ii7*r1~I6HXT8xeJ:zQ3BSGHUt:7]SL=5JLwkA5E|20mcWHx^CEY@=D_t?L4' );
define( 'LOGGED_IN_KEY',    '})HRDC/q3H/B=k)Uo{}?rDKTRUGc:kd%+ a<r~f@~LJzc]I~aTDT3LMl<Zn!?8:j' );
define( 'NONCE_KEY',        'Y|qXlg[)QEh&4qvn>^vmO{$OnV*~&wv#h7I:&2p9%ZW]V^N@;#)Fx>cSr>+Gsl u' );
define( 'AUTH_SALT',        'o-A%% N?hKZ?4$=V@1U!p{VFM71.;0>tDtYV_I*Dwz[`P{%JQWq3. Fe2Qi{X>I3' );
define( 'SECURE_AUTH_SALT', 'hvu.gbk/<=[xQWu@qScK9MLAU8L/@7SXv@tj,BQA1gdyu^Y<qlnSG!b^d(b9w?Bq' );
define( 'LOGGED_IN_SALT',   ' hKl7aYu^chvg;hUA$[8XjK,0x[G<QeYqC)T+yBw-Um<DalZc*G1p]E|8]D=;4[U' );
define( 'NONCE_SALT',       'CU ju`On!^@$TouBw+C3oQChP&1)UAXgddDA$88Z%Kl{G*0{0#-Abx{I5CE(|uBT' );

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

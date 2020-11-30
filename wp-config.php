<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'transcot_dbdb' );

/** MySQL database username */
define( 'DB_USER', 'transcot_trancoAdmin' );

/** MySQL database password */
define( 'DB_PASSWORD', '.wrfpGo;.8[_' );

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
define( 'AUTH_KEY',         '8Gne/>A]6)~B+j3fGf!rl5&(u{,2T/A|sFu/n?$o=>hAc&xiVkg^<;bKuYGXOSyE' );
define( 'SECURE_AUTH_KEY',  '%h+vL*Y{odr#lyFs9.0^5#[7$b0cqT:]QfU/3R+sRw|ua+=,W);;5IEI&lJEpS]q' );
define( 'LOGGED_IN_KEY',    '*ac0S>q7ME{T=^K*^oXx{#1P4~g`:xOXu4x)]m,=Bx1mNu9V~<cFoJzXCCkEEDL0' );
define( 'NONCE_KEY',        'FJ%me#.*)Qu%FM-|:>QMrsW6-NTsvTIlK^Z|dbFq0#IC~e_QTA(lAkbdWhz6pOt]' );
define( 'AUTH_SALT',        '$1+Uj[Fp-s@%AQGUHdZ6v7vlj0vu*4F_yAc55lQ01Q7M(9[B-=6vq0#-ICh#Z9_%' );
define( 'SECURE_AUTH_SALT', 'n><enVa0#k7 #9-2Y,G.>x:Iygv8f87)A=nnC1XK2~WOWXCorP4Q+)CY]VB{5Mw0' );
define( 'LOGGED_IN_SALT',   'CMYt*5sw>S1rII!5ShPP*3l>UiRd,qJ{/Np10ihw65!kK`&#*vqd*;C`@S=Io/?E' );
define( 'NONCE_SALT',       'Hc?XtFbTYA}se&|vYA F}!an9oK44f0=WpnGK2CHsrpRshO]  cj(f]*zh5L{lo/' );

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

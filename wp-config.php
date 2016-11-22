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
define('DB_NAME', 'vintage');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'nF?&Hit%5YLu+kdo|,n:HkA7WaOFTyjtyP<n%h*1xTq,CRT*+dK=%jNgNzDg[:Rl');
define('SECURE_AUTH_KEY',  '^koVM;wxj{6:LM7}@Z4U:f%Gl}5z4=D_!z]/Ow,b7G[=A1o|}nSfNX Tl3=Xv+d`');
define('LOGGED_IN_KEY',    ';L<Vv-+jOez$24T<F#/eM[sq`!lybX+{](J`>:#69^6I>!?Cp)ZJx:o1vT6sEA)t');
define('NONCE_KEY',        '*E%q?4EBt g8 ?@g@3-vn}HC.z+ii6I0)J[~6y !eIcN$FBd1uokj45sEs<?a78/');
define('AUTH_SALT',        ' .p14yL b#)rFdi3K$B7 V+6._1+(F Zzb8;7=%/]8uW0X4nxq}v/~?TS!,01/M;');
define('SECURE_AUTH_SALT', '):=$qH%F3u}iy[^bVpt?aii{f3D)5l2U?sU%^(lXo8|~T[x{t{xCCIou981vQiUb');
define('LOGGED_IN_SALT',   '9EK_JF:f+d21]}qVH?C?xKo)M}*W?Hn!P/A:Zm+k97R;,OwB[h9 T;nNU5g&QV/Y');
define('NONCE_SALT',       '=gBi7zlmqoPU-c9MwOHS+,,FQ+bdRu@N<^00GxnW,we9Fne[1FMh$K>^keIT%NER');

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

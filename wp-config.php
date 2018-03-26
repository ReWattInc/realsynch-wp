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
define('DB_NAME', 'realsynch_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '_{3OGSGm,i~}fL>g]k<ZrU?(KXx,Tq8FG}3zR:9MiF?^PW)N*{!iKD_$=0[_6A>L');
define('SECURE_AUTH_KEY',  '7<c,kMnV,_^]k?ZeXln*WQ;-^GxFu<@v~P:|X9HV_.TqdCa{Jn/Jh4BcKiz?gL&v');
define('LOGGED_IN_KEY',    ' ~qKTG[M|9$U7le>he%&|AuMR%ER9n4?s$k/y(!$AuU?2C5:JI_`,S5_[Fr_X9H?');
define('NONCE_KEY',        '0e-+xkuJQ8J?/WA1df!Q-RF]/#=r5 q~JWvs|kBMPY6-y`0@)n2@jsTgnSK1|ZU3');
define('AUTH_SALT',        'JQ~tzm`-r4~MLJ#||46:Ag`_rlO_F)b0MZrvlt28 Ua+=q?r,*7DC-;cT~+1XV&d');
define('SECURE_AUTH_SALT', 'Jk,PDZh`qO</!]i=:EoMQ+$,N%a*kBjizbpDfjtfw!>rLmu[ E-;uu)FX[!Y&Qar');
define('LOGGED_IN_SALT',   'oAyM:Avi`}Jciz-b@R8|NNA-RJ4nYNH9&;)$-_~%55Z.hk=]!t1kt-]m/<@rTmi>');
define('NONCE_SALT',       '#Z%d<d/vyQ^!@:a@S4N#89;tMVs`PAbd3(dC {vP;uJv*:3H.=V@H&4HMwFxO5dX');

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

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
// define('DB_NAME', 'realsynch_wp');

/** MySQL database username */
// define('DB_USER', 'root');

/** MySQL database password */
// define('DB_PASSWORD', 'root');

/** MySQL hostname */
// define('DB_HOST', 'localhost');

/***** Heroku variables *****/
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"] ?? "localhost";
$username = $url["user"] ?? "root";
$password = $url["pass"] ?? "root";
$db = substr($url["path"], 1) == "" ? "realsynch_wp" : substr($url["path"], 1) ;

/***** Heroku variables *****/

define('DB_NAME', $db);

/** MySQL database username */
define('DB_USER', $username);

/** MySQL database password */
define('DB_PASSWORD', $password);

/** MySQL hostname */
define('DB_HOST', $server);

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
define('AUTH_KEY',         '0=[^JAk3#0!30*cuh:r,p#/du|(H8]LU(?vgQ$v)tcCe.nkgfYn^mT.5hd>O4$Jh');
define('SECURE_AUTH_KEY',  'C)Sq%Lt7B~5oR[Qnd.lht}P_;^COFaJ(d)U,C;Z|`%4C;ZTkYF./XJ2!id6ARMPo');
define('LOGGED_IN_KEY',    'E6gt]XG1<4ALvZLuD&F*G1tA|EGo#]kPG;|T227ch6;}uni!kjHF)G7G%a=Bw4!3');
define('NONCE_KEY',        'nu0yb]A8Pz<<rJDWqMdQ!sFvYnKF1[Js>lSTlr~MUk w!8?m :bd,g1(xd$5v*)B');
define('AUTH_SALT',        '2`ev5RL.):,:QcBuym}#P>kooG4lm|8iuPr0g[qM.ndTg_q3?qV!E3@<94/E-FqV');
define('SECURE_AUTH_SALT', 'i0fEAAEsV2DxG#qK~vT:Yjk_DvT=kLZMZUIV0q2Q%Gz^tUD.V@]P!a38 ?RveXwd');
define('LOGGED_IN_SALT',   '$0lUV~}s9,I8f.7RYZmsa@z%MZ!Y<Ohnm#rQIwG<A2z_~,gc F sI5fe}L-0*VZ!');
define('NONCE_SALT',       'UrVc>LR:fPjY-p*roG}k}0IV_(8;Yvphtb6<c>G<W7`:q$~(|0J[)-0ld[1HQk/=');

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

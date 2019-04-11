<?php
//Begin Really Simple SSL Server variable fix
// Remove the // on the next line for https
$_SERVER["HTTPS"] = "on";
//END Really Simple SSL
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
// Remove the // on the 2 lines below for https
// define('WP_SITEURL', 'https://www.northeastern.edu/asu');
// define('WP_HOME', 'https://www.northeastern.edu/asu');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'asu');

/** MySQL database username */
define('DB_USER', 'asu');

/** MySQL database password */
define('DB_PASSWORD', 'Chai4rish4ah');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'zf0|iKSM [$+Q7ZIu~c`>XdIkG6Ip_{du$q}0py.=X_lDT8/TAD!<:}A15{Uz!Ex');
define('SECURE_AUTH_KEY',  '[y=n5z_{N[M+SOzk~_+-W@A%ip&W2?A5$: Qfc,7c-|=-EK8l%^_bFGmb,,m]K5B');
define('LOGGED_IN_KEY',    'Vybl3qA@FFR+!9980BP&1h%mQ-Vwas0@K|(X|$j{+EKw(ck@?qn*WS5}jWAU*[&`');
define('NONCE_KEY',        'X+YfVn?=+QhH}~Ypy/|,fS3MnQRR796Jf<o`k4[-=bhX[g+NwEH}/l5[r<y5YxJK');
define('AUTH_SALT',        'HZ^&zfp*utC%/u7-+/0L]j`e9-]@-Rb~N+a>X%q*b~:$RVUG-bzQ0-*|4N.{cDHe');
define('SECURE_AUTH_SALT', '>pHVa.Qb&N{ID24>2Y5+&aS-Ca|ZC}L5ToNnst/oC`[G1zISaP.YS)xhETk0A31M');
define('LOGGED_IN_SALT',   'N`t 6zq|DT07520{6uFy1,RAbhkk-R+z-f%igb0i <.&@dHuy._rdXC0cuKHe);o');
define('NONCE_SALT',       'T.:d!|~MjVJROsE1y. rzqHk*+1& cuHgKuz2w#,<@VY+{By)YE{%X?#w6C%G @x');
define ('WP_PROXY_HOST', 'www.proxy.neu.edu');
define ('WP_PROXY_PORT', '3128');
define ('WP_USEPROXY', 'TRUE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

<?php
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


$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define("DB_NAME", trim($url["path"], "/"));
// define("DB_NAME", "heroku_4eed1f5663e035f");

/** MySQL database username */
define("DB_USER", trim($url["user"]));
// define("DB_USER", "b7cfc877a785ae");

/** MySQL database password */
define("DB_PASSWORD", trim($url["pass"]));
// define("DB_PASSWORD", "db3717c2");

/** MySQL hostname */
define("DB_HOST", trim($url["host"]));
// define("DB_HOST", "us-cdbr-east-03.cleardb.com");

/** MySQL database port  */
// define("DB_PORT", trim($url["port"]));

/** Database Charset to use in creating database tables. */
define("DB_CHARSET", "utf8");

/** Allows both foobar.com and foobar.herokuapp.com to load media assets correctly. */
define("WP_SITEURL", "http://" . $_SERVER["HTTP_HOST"]);

/** WP_HOME is your Blog Address (URL). */
// define('WP_HOME', "http://" . $_SERVER["HTTP_HOST"]);

define("FORCE_SSL_LOGIN", getenv("FORCE_SSL_LOGIN") == "true");
define("FORCE_SSL_ADMIN", getenv("FORCE_SSL_ADMIN") == "true");
if ($_SERVER["HTTP_X_FORWARDED_PROTO"] == "https")
  $_SERVER["HTTPS"] = "on";

/** The Database Collate type. Don't change this if in doubt. */
define("DB_COLLATE", "");

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'PAT|F1OqsvycRSp|lNaVPX8{z)Sr!%OuJ?<]?9j7V4q8oT@Zm`8FfS||A5KN_fW2');
define('SECURE_AUTH_KEY',  'hbvOA|^NsDhRxmaus6wU`g9Yi(BTcJ-lrOKW%^; )%FGl$rDB6br(8w4Ph^=F7U<');
define('LOGGED_IN_KEY',    '9t!0;T2,vs(!Zb@8b7X+<+/$LU/13TCOKBn.%0nbWT|TEY%|#cn.F=Yx_0 P3JsE');
define('NONCE_KEY',        'z@HFB111K%C-2uy&Tqw[rvX<luY(V:LB=M+U0E~U+IZ+Z6:!p]E^zOWp|+DRC7,W');
define('AUTH_SALT',        'r(#O+h I;8EV`PqV3Zf<gM-uyLyg@u#ta%sX$ v{$C1e1: R2I*<W=:7zHmMI_<*');
define('SECURE_AUTH_SALT', '0xd^RF*-B -:X.z[J|La43EiruJ1W{6<mr !LQ)Te{A{OnFb<&-,8W-s-BbT-(sg');
define('LOGGED_IN_SALT',   '3jt)H8ho.sw,K>u;3zAh=KL=;#Xg{y#, D2[De[.x65*O<D.1Rc`ar!c?U0)|l9`');
define('NONCE_SALT',       'r4r_*si_$B@h~*S0,|(|qJCHNWdH}sat]eS~|]#.C6GUi>1iF-SWZ<@@PGxB-u>p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = "wp_";

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to "de_DE" to enable German
 * language support.
 */
define("WPLANG", "");

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define("WP_DEBUG", false);

/**
 * Enable the WordPress Object Cache
 */
define("WP_CACHE", getenv("WP_CACHE") == "true");

/**
 * Disable the built-in cron job
 */
define("DISABLE_WP_CRON", getenv("DISABLE_WP_CRON") == "true");

/**
 * Disable automatic updates, they won't survive restarting and scaling dynos
 */
define( 'AUTOMATIC_UPDATER_DISABLED', true );

/* That"s all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined("ABSPATH") )
  define("ABSPATH", dirname(__FILE__) . "/");

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . "wp-settings.php");

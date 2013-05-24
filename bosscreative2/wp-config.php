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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'demos_boss2');

/** MySQL database username */
define('DB_USER', 'demos_boss2');

/** MySQL database password */
define('DB_PASSWORD', 'addison16');

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
define('AUTH_KEY',         '4]:X&zu*J1e?QnQYz1uI3x+!cK[hmgGbSMOm?I8n?_R6pl:UpiL.J3V.r)a]lu0J');
define('SECURE_AUTH_KEY',  '@iCH>([Z+@{3G^De0nYAKh5XFX3|+|A!T8ps+re{-+i$5HM*E4wF:{WVVK[B*v8.');
define('LOGGED_IN_KEY',    '>)=NGoHKVmJ;ao]{?n~;mfgNW$$.-9{Lujre`ozaY g-jH[:kMx<uNq;5!XQO,CV');
define('NONCE_KEY',        '7e,;LIfg]3wAM{X%wtMyV3WkcI%Gx--)l+sM_)1#dIC?3AE|^Pd,05iraEtD<r|/');
define('AUTH_SALT',        '<g5|o[Y?0(`MngM;HD9~(34jA5jroBHjK $)O,9cF$WB>U9_9;Bs]49U))hB(mq<');
define('SECURE_AUTH_SALT', '>WZ93~=zYw`[[5@%lzl+CaE>E^JkGnah2_biV &L_ui*]-53_h&7EItnN;2wGJ5O');
define('LOGGED_IN_SALT',   '*um!Rnd--4-y5&nm&+q|iY9syqa3+c-%?R3wXp%o1-gNLrs38sXD$L[ AjmJq%IT');
define('NONCE_SALT',       '*M$9JB3Yf1 bH(4R-,]H1Lu-z)s_}2EAgjv08%Yl =k-_&T0L/|36yH`(`z[GCr~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bc_';

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

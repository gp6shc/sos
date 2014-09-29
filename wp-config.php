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
define('DB_NAME', 'sos');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '&jo!mS$G#W1@-c6.Rn&6<<pt*sV9!75<<h>#jblUkl4j)qU+0S`Eg,J!MNlFV1Z]');
define('SECURE_AUTH_KEY',  'G8TntV|[=U=>Fz3 ([BzX3>}sPWd0jUD;,TfuWr_MlzaF=i->a48n3QJRd(0>m^K');
define('LOGGED_IN_KEY',    '8>r08D/Ip.]O%dJ}]|KOk0b#t:$Au-U<mBzy3+Esi)&(T~?a}*7P>(FlZ}3HZ&tB');
define('NONCE_KEY',        'X-~T83H(`+fAw+hl9~X F_;T*ccI9jj|yp=~3y)AQM-!u$W.c^A,C&{[;jB5GCmE');
define('AUTH_SALT',        's=tVXq+&!H1,d}IHk}-a6+|!:%??P==gQli9dgqH#sDxVi@twxn#_>S#Dc7){Oc:');
define('SECURE_AUTH_SALT', '&~P^l=~#z5HX> uZ1Vza/>>BbG0t|{%#rB f?iV9c[u6$+.SY0~0O~C?.o!jI=x,');
define('LOGGED_IN_SALT',   'DWxg,Jy:+xOozjR9D|=tUjocnb`VyZrS~qp%mBWmg[Gsjo7n&RY%L%!AAh045^JE');
define('NONCE_SALT',       'ZjSu-*Q8sl~ApV+T>|94SPsrUY-eJa?b;3xP2%To|?cG+RxC(_<v)E6]1(G(FjK#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

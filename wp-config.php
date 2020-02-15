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
define('DB_NAME', 'wp_project02');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ' ]6eL8oMtW4+&``iJ<Yj2IF8.Hu]Swbw# &J&U([O],#C#*g376V]:O4h{%F,nnf');
define('SECURE_AUTH_KEY',  ',)(BpsE5+eJ(SeGIa4D=z?k(4[M[-:C.X#o5&j7y@KGr#!y1Cg*@/z@2M*SYTN}u');
define('LOGGED_IN_KEY',    'j>*S@!PzzNX8i?A9=8G:m8Qv])AGa>3|]r5!VE^ cpoG&crXTq.SloWgd|R>-Kiv');
define('NONCE_KEY',        ')+V-7D3D95#.+wHUbM5Ja/k)x5>hI(MUr<Y5(h`K)nI2/pO(9!&;:qcW242) K]l');
define('AUTH_SALT',        'w};e!>6@,dbA=!FK(iX]~ZXm$gw_(=Nx){6;)_#v|I:L$evIFN|p{P1~,TrSBwF=');
define('SECURE_AUTH_SALT', '$T/6Hk dfVvORu/Wl>=;#Tik|&/2ThcX2hUtBQ,s/s`(<AUVpJOj,ec}d]}z(d`p');
define('LOGGED_IN_SALT',   'y_nivX=C8t{rf)&]zJZt*YEkE);x!%9S~P1wR Zh^rU|IeDEM2qVTzZmLW?9Ki-~');
define('NONCE_SALT',       '$}$VNy2rR_6.habw^9&r{q:%L^PjHlZ@Jk]+Y]`QUU(Q0 ll}g%Nw=W9pz|0>bU>');

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

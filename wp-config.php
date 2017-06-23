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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'N?B~2Ep<,,s[d2y9#{CB`Tr~g=zzy9T##C1br~fkg2={@A;]4ow>IQ O6sR4!pc^');
define('SECURE_AUTH_KEY',  'L)O1Tt@QDBJ~Z$O{lV.|L8S|yKuRb{Hw4+~8s-P/s<yx<a<I_X}W<a)|ufQXqp67');
define('LOGGED_IN_KEY',    '[jvPQXQZns:l) U_m,kV3d`l+xy,M#_0q=hr~IHL4[l#;Af:4$zaZKjZ*Ci#6]]y');
define('NONCE_KEY',        '3?%=sK?=O7LQg3.@rrtC(T2|NG8*oGRwDAAvd+iEHwA,y`D@9D27)Y,]Y8<.zPvd');
define('AUTH_SALT',        '#|rQY9n|hBBFnqL`/wKy-mZwkb6qrszg|S5X(;U]AKll)Z8Sc`rpiO?Vk,$z[:K]');
define('SECURE_AUTH_SALT', 'Nw^!pR)<j/9(pt[PXhnUt*vCR]#TdfG7vLE[x<!}SXC8o.0NTWK_p`cSwC:IR:h0');
define('LOGGED_IN_SALT',   '%F^WCThAZuwcuvwAB3D5R`.SimQlKJPfvYU%r^MC[qO7:Y]}*F$3HGw}jLOzS5:e');
define('NONCE_SALT',       '~TG#8dBCHd s?Jy(6h.gocS[SDyn(5$/> x9]3YV:wE!>^^aR{k;+QoC($ZdGwe ');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

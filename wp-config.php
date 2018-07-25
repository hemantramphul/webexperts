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
define('DB_NAME', 'webexperts');

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
define('AUTH_KEY',         ';t,<Iarip%*LW<e.vn9`_oa=q|M|z#UYbR!9LU|N5x(d~]F /bAX%> C<vyKeHJ!');
define('SECURE_AUTH_KEY',  '`Ni8MVi7g_p06VZ<W$YcM3qToaq|2lPbAtE ~=dLPW$UqiD8sksB!JxV~3MU#Cu+');
define('LOGGED_IN_KEY',    '`;6@n*OI*7HaW_7VOk7N#a&kmV$8xUn/Pgb>~jqG7cN3I+IiF`_HuP|v[][Y09~{');
define('NONCE_KEY',        'CuHd;G=4}+_,tKSii-oNUdm,}G#?)>|awEbBuVM=|hQqnei{]m=Z;7>h|vt+k+Zj');
define('AUTH_SALT',        'T,GTSsc3_ofSsKg_nws!=)3m[?sbq~tg!t#j.Y*W#ftf)2Tm|8$#s?(*rX4QOo~W');
define('SECURE_AUTH_SALT', '5Nwl80Z|A%wDVibRO|b?qPhAdvg8,:N{0ZsK(+&&2n1#2ry$@c;Wq3:<8dQY:&i<');
define('LOGGED_IN_SALT',   'v>OZWK7;s8wI@6o~5u]&z7A%Kg/u5{vz>}P~nl>p-jJhz,$]3K5-A{G/R$7&f}eT');
define('NONCE_SALT',       ']7&bmG)%jC]S4W0-;x<!O!,RY]F(;bWo)LXb`~SscYb|+_W=i2LRHIMnp}JwJ7hx');

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

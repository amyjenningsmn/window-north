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
define('DB_NAME', 'windowNorthWordpress');

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
define('AUTH_KEY',         'KL:@ZL4z?:}3T }BW@cfX=SxF9Ij%^=v(Rg Bv^l!}?@c+Fw_`W<~B}(}uf[S)9M');
define('SECURE_AUTH_KEY',  '^c?IS*~D[;<vq|k_]hg%L#y7nvO_@EyMvbFh.IbNM3x`kC16eSWKlOgwy!)G2YiJ');
define('LOGGED_IN_KEY',    'Z/}xQOoUDHj+#yDuo]*AxtQ0AMK=?_l=t&f=pRpQKdaMI6O8sPZ=w+$Xx!Icqesh');
define('NONCE_KEY',        '01}pbD9Su{p$olYG=zP_sOgTrmUeRO+twrwzBNO: B3,f=xs<lmiAWg+,%s]u#P!');
define('AUTH_SALT',        'gMEoT-I/s2-3%? 1={wOugg#%X=z(GwdL-Q>>+zYH1)BJ@D}F;9Z<&7Q6vL/#Aeg');
define('SECURE_AUTH_SALT', 'W,tDdO@^~:#}Sn){}[@<|qY0Lu`^%^cY_;Z]4rT*5Ki|GTmkZFSF@U5t8t[t 332');
define('LOGGED_IN_SALT',   '53{aX.G@dd5}f8SiSQiF!SkzpqGB6HEm_n6E+s&eo}Qs[;^TU31CFZ33x?BVHl#y');
define('NONCE_SALT',       '#Zj@!@Yd[Q<vP3}[WWlU}=?r&qq$Tn>0N{XS_`KO V8(kS>`.sXCZH>kf!1#b@nM');

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

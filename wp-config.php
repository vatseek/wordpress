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
define('AUTH_KEY',         'GjoOnJ+^XHyubJ&Il4|MrX,ywDUZAOLr?nWIZC.=1K$DQ-WR&rX[GnGNXaJ?+frY');
define('SECURE_AUTH_KEY',  ']-ew9<+y52U!GjVSIr}5[ezJ/W# #!R&3esbz8?Qi}XGSw 78Rsp+1p-cJ_!jT|k');
define('LOGGED_IN_KEY',    '9<-`tGdh1(+bc6EqnwkYpkTt{h[k+xE-`_&SZS|e]-LA|-unt|JZ-NvkboR;2.?]');
define('NONCE_KEY',        ' *n~%#*U^G c<rQfO.T8?uBi>9ZLQZ()D=3(q@l8hwSjG|5LPiIi|%lv/PP`<`[`');
define('AUTH_SALT',        'iA_LP-ST|*N=Lf-I]q @~@Ne6qb+bpb0Kxni(.kp$^:P~q#`[wJ~<OS:ki+IRvI]');
define('SECURE_AUTH_SALT', 'g}p%oX3F$k+]^j-`x/c:,%L@fh9z>Pgt*(=tmyOX~k`jX@U?0ju)iq%8Fy%,K8H[');
define('LOGGED_IN_SALT',   'lIM^/3X6a[;/tJ[|XrHqR>QXs:(RwD3f_a$oWH:s2XK:|jDHr/>T+@~tmPss9_Y$');
define('NONCE_SALT',       'Ilr(Gu]`O<>0E~CMG:wrFkUa6krK/Zg~/?5b+y#lcIGF_nPSCv=4Y$H.#%+KQ^+n');

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

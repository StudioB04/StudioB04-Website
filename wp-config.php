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
define('DB_NAME', 'studiob04');

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
define('AUTH_KEY',         'TY:jD^2dG(19._{9m+%1A3qj_b+27DDTNtA5#bq;Gc~1NpgZt6E*[UDJ0Dy-An>S');
define('SECURE_AUTH_KEY',  'D>A#V?9iB|(rkqGupA0-+,n/0#8aX@J)g#ceB[ANF%g{hl:jJ@WX4Z*d=:Yr?3S!');
define('LOGGED_IN_KEY',    'Fulp0N-e72=w%;cgRS[0`J}XsbRNLj3_{(.Z|}3nBBETWEA  G~Kc./eTpO-(TB~');
define('NONCE_KEY',        '~8f4rtn`&Z:k8BwN;u;?_HLFX|NZ#kl#UD@)^dHF9=_A[DFHlNn%vvs31FvZ&}%v');
define('AUTH_SALT',        '<M9gTOqHx4lmu:l+JS$;r-,YQej-2/f:nb<U3:G%}z|dWX3Q2;6<q$|e%oU,!S1+');
define('SECURE_AUTH_SALT', 'Q%<so))}c(h3:3E}V~w}M!wzp7/BcRPy+v&7D%FB&B!&r^xnq;1oe(nAf+&m^To!');
define('LOGGED_IN_SALT',   '@GjP^rHl*2Z5Ftw!,ZtD?R&vsG$Kuq$ DYc4yxP$Zi^%.nDR^bH7j!3QD#z~jN8+');
define('NONCE_SALT',       '=N`Cra [CQ)g>3V_Vca<h`YUu>LdNCg)/9)&a.D4P -R55tDal5PNK{DCVf=8(z*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'b04_';

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

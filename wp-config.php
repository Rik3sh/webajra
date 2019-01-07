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
define('DB_NAME', 'freetemplate');

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
define('AUTH_KEY',         '8pBy6b2J6vha4g~4M5YuAe/fJdnnP+.aPuXX_U$C!lAfk-Zqqs?pm-XNJP.7(85x');
define('SECURE_AUTH_KEY',  'KfWe.j/^6V`Z?o(UrgVIY*w&=B[^8?zz<1k6{m/r]^Yn7~Spqi>3.V[Dr5bR)|A:');
define('LOGGED_IN_KEY',    'A/vDi9nva2|W@-P]OfuJ1(*(GZw?Sdy6Zbb2k@x@lXBw(/zhL4`)guS%%8Ga}Rl|');
define('NONCE_KEY',        'zmU16lCE}5T2Q{,I#{4nn*jnleZ[m}BvzHP~./Tuer|j,UHSD=/wa!gVzWy2Uect');
define('AUTH_SALT',        'OHG|X?W/#-VJ;U2bxbtjT?eMI&r uXMfPmBh;F8yWi9?K1.N?QC;*w2ad2U%fynL');
define('SECURE_AUTH_SALT', 'dPwHR74/kM&fCA%QRe1z%}?B^Rnmfne@l .BJfN/T4<D+0WXE) |XyW^dx3x^Ai5');
define('LOGGED_IN_SALT',   '7pR90{Q5Ei_o|]n|%uMFMc|L766(F86>BRMJ<-S#UmM4CXY+<d9;6~<@e&gCq72l');
define('NONCE_SALT',       'zNqu>Ah)3TT@czVf-cJ9Dy5!x]geUFW>KN9ao!0g<pIF:|jRtdc&~Aj|e r]:O>q');

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

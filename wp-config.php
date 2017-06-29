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
define('DB_NAME', 'navimedia');

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
define('AUTH_KEY',         'qLH]d?orEFBMYm2C,}v`1`<_BS2LR?o#II1K[*~X$Fm%8;-#my79Tt[@[r;EHD0*');
define('SECURE_AUTH_KEY',  'p/AD<w#gSv9DX+)Jb2r nW %oum5cr}d!CZ`J-UD>2nL#^_;p-b7G+|}Yup7P-&}');
define('LOGGED_IN_KEY',    'O;QR~?L^|/On#)o4UeJ>ZHFnIc%bgjeUiw}b+oiI_R$5R(t[&xF=tR%I7Xz[cx]>');
define('NONCE_KEY',        'V>E7R?u!#Yc+VEm_iBK#_C)0XRD33+<lc_}hIr)poqx6.~<>qbX/ethv0^.i.I<{');
define('AUTH_SALT',        '4#Jq<HviKw-#[y@:arKY>.j1>3^UqZpkCmHF=9p^i3$MhZfN[L:Z*0OMh7;HR:>I');
define('SECURE_AUTH_SALT', 'lmsQe+XCI.,_ w jD|rqjtcwf]3.|T_QU~ekR*s>(,NcoqPO)Oe0rLe04!QTB=UV');
define('LOGGED_IN_SALT',   '$Q}6JV?DZ$~RPUuJ-y]THJ`6%`-F$Hm-Q4t2:;V]{$]_|DMK7e]Rq3j3$[]j.sc(');
define('NONCE_SALT',       'P;^1:oAiQOTrI(R.VWsN@a`wMC]B@JX_[7k$%e-h`{.08-~=2Q%.O[@`z^rS^*rR');

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

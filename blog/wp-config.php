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
define('DB_NAME', 'ghura_fira');

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
define('AUTH_KEY',         ']J+Pr$Vq}U~~M61YpYRJ#Fxr;]BMY<WRifS?X~{c2Y_?87f+t:KojR_-@qxw%v:b');
define('SECURE_AUTH_KEY',  '}MP(aQ8v+m+&qx.Rk/!l6Vux=9EgA5$ +:I,Xld>0HCU_N7pQq mUZ:ZF8}KEX2Z');
define('LOGGED_IN_KEY',    'Z`>fEl) MB{+a0B LSgDboJ5FNm{1v0vPNUUK-^)}zg~4;6RbgbPUBS$? XI!k/}');
define('NONCE_KEY',        '~(03{1V~Ybr2SxAW[!=gAdk2I%TAd~!UP1mXcC.c4zpoA0lM-F5!3TcOh0;LF*ig');
define('AUTH_SALT',        'tlQ_9^pI&.i<^@PuM,5!zu,0f=c/d2^Xp~na`jS^FxWj{iYv1_0sx(Xiygn@&..<');
define('SECURE_AUTH_SALT', 'Q#/qHpq~/5&:T%3hM-$U_!GoCo2s!QG8e m~E&vctr0?UedAM!@m}Nnsx5kadlSI');
define('LOGGED_IN_SALT',   '=,a]PYQiS),v2oL/l?2]>w)nl-fmtDQdjZS^|.>R9$ZoQ^BgCEpWfz=nQ=vDA1Mk');
define('NONCE_SALT',       'W_dm%(H2FI/5MN1`$n6S~&+D~z-b2Jrgt0,?_&J]m:Cb.n[`2.{bGQ|`M/tI7u~T');

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

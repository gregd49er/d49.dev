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
define('DB_NAME', 'd49erDBrlci9');

/** MySQL database username */
define('DB_USER', 'd49erDBrlci9');

/** MySQL database password */
define('DB_PASSWORD', 'XA2dVB2sYP');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '[-t:da]K1lh1Oxp9aH#tH|rR8Y[|ZFg0:dNo84oVwG1wd~O8B<IyjFj,rQBY}zYF');
define('SECURE_AUTH_KEY',  '~1t:-aK-5_hS}gN}z4kg4!Bro8>FzvFgR!@NoZXIy3.TQ^A{bX<Ijf3^BrnB>Jzv');
define('LOGGED_IN_KEY',    'atl9WH#tk|@R8Y}|ZFg0!gNo8[kVwG1sd~MI$j.UQ,B{bX{yvb$MJ$j,UQ,rP_+L');
define('NONCE_KEY',        '8gN:z4IjcMFc,YF,r}cN}z4kg0!8sob+iI2i.uP6q{yXEy3{fMnB<nUvhS;~9pl');
define('AUTH_SALT',        '>taA#axtH;P*+L6X<.TEf*fMmA3[w1lS1~9tZ9#HxhD;O~+O5W#_W0!RN!o>ZV|v');
define('SECURE_AUTH_SALT', ';TuEAqb$MIyj.UQ^B{bYKlS#_9ta9]H+iH2i.pP6q<xXDx0@cJ@8|kR|G:sZ-O4-h');
define('LOGGED_IN_SALT',   'Lt]xUBv}@cJk8,kRrF8sZzNGzg!VC!oM$mI3T,uUrb{<YyfFj^rB7rYzli2_DtpA');
define('NONCE_SALT',       'z}|FzgG}N@oK4V|!Vsd:[Z-h51,E{fb{M3yj3UB^70N>F}rYzJF6.DxeE{L*mL2T.');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

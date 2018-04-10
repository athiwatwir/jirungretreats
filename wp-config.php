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
define('DB_NAME', 'admin_eq');

/** MySQL database username */
define('DB_USER', 'admin_eq');

/** MySQL database password */
define('DB_PASSWORD', '0CRgfxbjZ');

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
define('AUTH_KEY',         'DI*L+H{Hv]M>SA>n)a:Yb3WWqU_>=pxbM#-yq.!8Ybnwi]a#hQmLKcNig?TyimO`');
define('SECURE_AUTH_KEY',  'j|bH=6R5(q(2HmPj{[%tCam9tuA*85)UDwm[1~W78do1>Broa.(U;0$`M&Re>|h{');
define('LOGGED_IN_KEY',    'iW (C|5n?H4Bub=pW2]:@z7y5[w/Up7rom&OKL].[pC^L2nt;&4t[Y|H7A!}n6)h');
define('NONCE_KEY',        'A)ookByi[;XKh:*#Nxo8Vf;spIne*XzU%~%iPOotZI.3gS$=fpc,)ie>izaSp.Ut');
define('AUTH_SALT',        '8C!/_e5 yOzpSd$Vmjf8E#TdU|Sj:OZvV^Pw^iHgzfbPKaY;8B9?5x:d<tk-1_el');
define('SECURE_AUTH_SALT', 'D@+^sq>^RhMSkU@mqT9^SLOOSUcrF.h:#09s130dCQo#8#o0=@.c1869nK=8_R2r');
define('LOGGED_IN_SALT',   'bL)cx)t=3@#A02L,r(+-1QsCMPw7$AoHSTj-:iD0!Xzk)a,2WX< SVAU6Yym,y4F');
define('NONCE_SALT',       'AjGpX/0`!eR29F1VM(Wh)RhWG}A~J>HqRY&5i),5zO~+=]*7bR7BPEk,Zp|2Q&VF');

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

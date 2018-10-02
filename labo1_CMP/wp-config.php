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
define('DB_NAME', 'labo1_cmp');

/** MySQL database username */
define('DB_USER', 'samdesmedt');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'VCqC3&]7M(/vW#n(4iO&5|2NR*yN6l:zi#ATnzCd/[c-6,_TARx4yua^``MU@n@$');
define('SECURE_AUTH_KEY',  '-!HbdG<wRKED9O[M2u.A3O[TI4mp7H/lKP{ 0Qc1T*tua6?8y!O{K8Qjjx;V|bLj');
define('LOGGED_IN_KEY',    '<1BmW2&1N`t+@@UGc=<7(KrvP7d?&!I4mt78(~pJR1{w@VtaZxJ1+CrU5~}Pz1;l');
define('NONCE_KEY',        '=ovKK#Ls4|-ug!kV)_i}R<}V@@Yjo[c6[!{vffbw>0ns[KY)Ocp/_j!7AW@(@U8R');
define('AUTH_SALT',        ')s3V[A:1a}](h!Owo3mrST)ZEk<z;NOm{;{*A.oV@ OxO;o2%PfY$}tDuYc}]D( ');
define('SECURE_AUTH_SALT', ' ;=~1}ukb@0,/rl;4y>yr`6&=sANlF1*`O|2&p{7bdafc;K=d$u_)(iP-2Q=U/*^');
define('LOGGED_IN_SALT',   'V7`enQ.h|dr~B-5oXsO:3@`j]z iPfUs)blU0CpD%(2hhzCE:%b8Yvr#jXdXBhCJ');
define('NONCE_SALT',       'b6KJf6#6&X+U]r7gjaB$Kqd1P4h?EYtw*}^8LJbOG101^ ]5x5n>!rf-CD4y|Gdk');

/**
Debugging
 *
 **/

// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );

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

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
define('DB_NAME', 'relish_db');

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
define('AUTH_KEY',         ' xXy~rFn{ Why%M-(Ov2E|`Xaqmj.r|$1Ne8oY7qs9TzbX^mQ$n~zwa{hs_WXj^{');
define('SECURE_AUTH_KEY',  'B37KaSxN!p}ODWFYw5.r,w)]D=U3hF&></Vi|F38n1rzngBwVs)cnb$z~n?9+itZ');
define('LOGGED_IN_KEY',    'tmkh{J[UhEXH06M$&vOC]O-R9&G/t>Ss~tu1U]QmH$rD#o+Nx)89y={{X0c(JH*@');
define('NONCE_KEY',        '-JFk;XKZ^Q]wex8V[y[]B5+$~bRJSExvq?I.V)H4@(@GDj^4}sx*ph.Z0)TUBbMa');
define('AUTH_SALT',        'V<jf?neFS9O#+4T>Qq[/]>*#848>vvha}0&dLGB:HVD;.CI#O{=-l9@Vy|WIDm:l');
define('SECURE_AUTH_SALT', 'z 7{Em:OC67WF(*Tw1;y#[dQ#`NSkX?3I(gJPVZBR`^]l1!h32*4|<n-2Vnt-xjl');
define('LOGGED_IN_SALT',   'G1(q{mxG%WS6e4agW}^*`CF:*^ChY+^QG[xATIl8z78_)3mw#L{c.R$h})/9|qW]');
define('NONCE_SALT',       ';[NNDju7{.4?_HZHh~i^4unnEB)G`]G7qF(zv2bT0zb`dk{-Rzp.cpnav,|_3y1?');

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

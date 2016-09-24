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
define('DB_NAME', 'wp_mitch');

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
define('AUTH_KEY',         '04kp0~=bW+fYzjR,yTaxIj2KLH!+v0kV;3MX{TF3{iY%l`9]<<ckTH]&j0b:JfQ5');
define('SECURE_AUTH_KEY',  'c6Fp)U@0lmQD>v9s/h?apE.stRdLf b_mI[tq56xi=tR}H?(x@!uN$^BWRy}sm9!');
define('LOGGED_IN_KEY',    '1w-hvV$(uB^yN~pnh~gbFT(U@T {mQ>sZ3>Xt$ThA~#Q%oZijak~u8Hz)1 ,Dtk6');
define('NONCE_KEY',        'le!&BwP$;c~U}x:C0Cs+A?Yg!4Ih[&{D)~k88{7D(AYT^wu+NXnKYq$;v+aA>^@]');
define('AUTH_SALT',        'GT$g2S_5c/fn1*vPY#V6S=t2xF;qp81xY|F%uHT4HCB~:7Z6K*c5%;X9vh0uY<X?');
define('SECURE_AUTH_SALT', 'KNw`T?9U>{]S&d,&D4IOB>[]Ps_]TvK*p&`W:?,C|SO@N{o&9zL$Z8St K?>_-qn');
define('LOGGED_IN_SALT',   'RXsB%M7$Z`%v*pm`$5 PmX,2XvkW)Wl(KS^/HZ_vEgXDz;I4X>F=|}@ibISz%?G*');
define('NONCE_SALT',       '>Tjug,#7|<f8[6GT$%L~v$vsM&qs^L6@{?2tJQ4p-bd$@Qr|I1S26oPK~#?.AA-3');

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

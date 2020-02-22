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
define( 'DB_NAME', 'caoba' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$ECCGoR-]+xW$c]?M3O%iNr1u3:DT}1)zJ~3Mq1TtDX)e_@XeD,/}mUt]Ult40fH' );
define( 'SECURE_AUTH_KEY',  'N,<U%4EO0iKg?@iW/3FR4bDvzzG+qqZ0=SjaUTM7`.OAh5Ib+rfv0[40awfmlJ;<' );
define( 'LOGGED_IN_KEY',    '^6N#v}Is#P|8d+SlxW$JBrw=|GfpvJ^Y.xr{4c%=>=znbGhbc=#IHB{=SBN2`$[5' );
define( 'NONCE_KEY',        'Hxu&B&dLsaL[J?c0RPNn8|M-14Kb@Yrz?a=00CX<VuzE3>pfOUzhg$f-5|!BtSXD' );
define( 'AUTH_SALT',        '7OV{.z:m_skXaV,JjIGz.cP7e`g)|;gXRtLp+.A_q@kp,/Oe[lnIrHyv5+1je)6j' );
define( 'SECURE_AUTH_SALT', '%CrGT>0X|IRnY-fp& aGSE{^gaK?<detG/z+h^jeE{DA*g?![B[dV&e?mx8Cl=?D' );
define( 'LOGGED_IN_SALT',   'yREC@t`-J,15yzj6[Qd~%[j^yjlzNC%hz5jJ2_+BwIcC5@A!(iq/`m9}E@7JXqI/' );
define( 'NONCE_SALT',       'dCyhiKeaiNU<ea?;9E^Bv)|+ra&zCtz08= &x;S_x,oOHwnt mXH*9jBNF`QE9pY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

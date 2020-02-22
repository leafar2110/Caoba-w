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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1010Will*_' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'FS_METHOD', 'direct' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<?`Bc6!RY1 *[2*U,Y9i3ez_eEe+Ytk@v1ozPW2?lBezx|7p{*c3gBJ*CH:iG+A;' );
define( 'SECURE_AUTH_KEY',  ' rvSb2E )Rf8oWhvv/Y4VGP]-Jt#Gx&wYkvbjU+qnm!I<HcCM/_+~P!~DkROEuG|' );
define( 'LOGGED_IN_KEY',    '3+t!5uDTi#`L?O?QDF+6gfua7yI>{m#n-f/5kyM>GPmf/gY+*~x3!C+FXjqdn-+/' );
define( 'NONCE_KEY',        ';5ER0/9),6fuI6}s(cd$p*04cAg ~BFgV[ID$@B/|Z!G!,~^F[by@3_vz^FNWYG.' );
define( 'AUTH_SALT',        '9uphDW;0:X7y{:vC&*YDZ/rIoYWM=xsfHF~~,[GY*V9Pb<|_F~mda1V`{L2#bYi|' );
define( 'SECURE_AUTH_SALT', 'p;T_Vb_z{%A9Rd&cAid*e2dT:{{HuX!##]#[%p4*Qt~qz?>lMwykw=cR0Aq{yJ(n' );
define( 'LOGGED_IN_SALT',   '-5#}BrdHgQ_Ty!T{Zfe* DT:b=e)_$4wB@QcX:DGG*G`eT(*uP3iIgj`LC>3,k?G' );
define( 'NONCE_SALT',       '6:}o^zgv72h2{K(n:gCoE-GL:Z16wqe2]%D4#| ~_K@>T:lX@|_=hp>dSCFntSrh' );

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

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'verajohn_free' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PG^el3Q~>LA>T]4RTz//.iA9w6NIZv8E ~fCmKz1%tB<ixIZ%m1w#JlGB#kw>nO3' );
define( 'SECURE_AUTH_KEY',  '9 @uqi4SrsS}yqqFz:ag8+s=<+3GXt$-ES9B>8-Z#JhGu.oDcxP7h#Y4/U8d1%*t' );
define( 'LOGGED_IN_KEY',    'y^[g :5lWPUxV10(|44MDS}bvmrJXPA8+,1erdb.S|(Z|+D++DO)gSbq7m!B [z+' );
define( 'NONCE_KEY',        ',&}&> -=]Ba-{la(=./#|AER- BBTH7<9+@>uIE;E{YQ;yuqG )Dzg3*L$lUcZx>' );
define( 'AUTH_SALT',        'D!z^>GM5j<+=^y9Tlij_Unz-/mz^bgQV)yXKdzOUA$Jg|Sh-aGl2GEXk:tX?If%4' );
define( 'SECURE_AUTH_SALT', '|9r;,6r7rJnQ;A1#[Z1:xB0**JJ#*Jp)s0r({9sV)<Zh|&C]aU{+<5A%K%4J&;__' );
define( 'LOGGED_IN_SALT',   'ehqN!qDQs}buDkWaOr54R]Y^TpnSYDSf[vp;X=`5Qd4#g8=a_@pX1Ql<+Wf@o&-q' );
define( 'NONCE_SALT',       '9H4k]L;JC]~(R[Xdk8BaM_Yy 0g$zDF#G@j|]`5WT$b.0X|sx%x=8Mj3|#Gep9Jq' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

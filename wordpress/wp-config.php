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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'q4~F:ddTvqCjE}@`BgIiwk@@vQnW.)oCVPt^rXQ:/-^4tXC#=~TPYIk4}|BzIRuH' );
define( 'SECURE_AUTH_KEY',  '5 q4Q6);$9lLJAG4*;fwDL2;ze$L/-#U4TL`$pz/GjG=UP.4yn7HC(+*b8-bmkt-' );
define( 'LOGGED_IN_KEY',    'iO(c~e@<T8WE<cQB<vlNF=R@Qky_|VeJlALaHzJCG!Dv=;l]Yo(6(a;LGzak+,7&' );
define( 'NONCE_KEY',        'fSzpe9#W`D]^2-|JS^mr_GG6UMf/5gn}KNExjRROp(v:TQnX(=$j#9arzhJxFs y' );
define( 'AUTH_SALT',        'm6RhYhNsTTSt?2G>97;r21plll^.exui!rl):4#;eQ/$+}QnH>RbW:hk5{zz=jds' );
define( 'SECURE_AUTH_SALT', 'xjv9i;g qyHJEB[/X$ %`c,:tcKClL*7G>|?>+YRw[Ed5T^SOts j4:PP1y)r8gF' );
define( 'LOGGED_IN_SALT',   'Y0IIn-g|:4LD`c5#PXrZ$D2h/bfm.!-fg%7oOFQY-Hu-uw4+uagW~cAr|G~a+&Qs' );
define( 'NONCE_SALT',       '$~:FYn-%t1Dejx;$4o[/$0;u>9;sdh*,B~vq?KKtKq{[5bsj=5QXdI2b9(G;DWc=' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

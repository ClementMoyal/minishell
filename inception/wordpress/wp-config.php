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
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ' ^jd-SYY7;NRS,Bn-?(tN}+*z3qSO6q+x/k-[Fb<^:nn*aRHlO~35g_&)xHkQ9I}');
define('SECURE_AUTH_KEY',  '5qcI-~lUtTtRAm.91Rw|)OM^8p}9s`7qnj.o6kar/]rA{Dg==^!:Hn]X3/qYGGz)');
define('LOGGED_IN_KEY',    '[|{s%:|>bf>Zu86Nc+wT)9uaf!mF-YZO4JHa-3]`SI^30.gF-+>3>R?wT u|%Ve#');
define('NONCE_KEY',        ' hJzOv^ z|uf19W4$V5gY}ZE(C#Y}p5o*a|eu,;JhT8%5z(]6^{h9*W`Teo?P0>v');
define('AUTH_SALT',        'OMOyWY,$@D1.un;NamV<?vo$w9Wucwo-c6mz5/)g|:-3!~OL;7&(Mh,c7ZpEg6VR');
define('SECURE_AUTH_SALT', '+]%=2:STRjMKqc]W#8FCM.F=z;e=)4`?ueN]4uN50q7aO3mk)#RuQ&Xh1$cPe_,b');
define('LOGGED_IN_SALT',   '<-nC.JMHf:=ee#|+eD9FeQW^kY|E;E]Uc:;x>Yi9mIFJi+7)+&P?5FS0w#&}W?_x');
define('NONCE_SALT',       'vrTuX+H<;.wj+P^+S[C1R{J*^gO)FFL2Nq)`n$/-4T*BOS`t:T?o/# Jic>$)Zs ');
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


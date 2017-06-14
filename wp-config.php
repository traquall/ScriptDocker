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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myDB' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '0000' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'p`wN}y|~I{S;;apU&)Va^|ypCss&$R]RnxY+Nlk.Ne_$)[k/ WU{XhiSp(}%_eT;');
define('SECURE_AUTH_KEY',  'RfeKC ABf-(Gr$8Xs$J -BIe_S>IhQ=.(ga bM,LmEbZgsrmUYNx0De~_:GX4-a7');
define('LOGGED_IN_KEY',    'F+`78G`WyR;]+44yd7I%7^1Mi+%-),W)KuHXV(@pBKr)4yxx.4kcp.l:,r/YI]J+');
define('NONCE_KEY',        '*Xt:A>?Ws~FeZP,Ct>-+.l])>9b{|9Y+^zBsEA^OxaW)*c@~S53ANEZSST87CoM$');
define('AUTH_SALT',        'X+]|N*3(M_hm.>t)8O~<E=4DjKHm}4}Of59CMf#/8i&<^+Rl958rND)D#BefKE&4');
define('SECURE_AUTH_SALT', '-F4q8IkfE:C+5GFTb1#.+)h$Vb/LItKo>+]ge+x+#^v408j@KAn--rmbc?j[+Y[J');
define('LOGGED_IN_SALT',   'd(UH@PC%gBh+B-J-rU<=G_=V40s&ssO||WFp|V]hQZwJ_Az3*|R!=_K5}yNiVpYn');
define('NONCE_SALT',       'lux 5U-1=c/3dl/mn6c9i2nkk(C_tUBca+_L{bwL0MJ];pe2j_U2+|0Qp^([rbui');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

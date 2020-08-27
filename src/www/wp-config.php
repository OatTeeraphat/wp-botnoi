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
define( 'DB_NAME', 'docker_db' );

/** MySQL database username */
define( 'DB_USER', 'web' );

/** MySQL database password */
define( 'DB_PASSWORD', 'web!' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '(s1AzB$t7SuNDM9|F.& iDzIQGv;9Of1Zca,/&*$Ms1;/HZt55^/aENisDdJ0lu_' );
define( 'SECURE_AUTH_KEY',  '~&g;dpI4n3%b<42g$W2YBjZ]GP[=koDj`+T`4SpL26M(AXhNM832[ymReA]G$Ws9' );
define( 'LOGGED_IN_KEY',    'K%[M?-JNidT?A;!2hDt#x:t d&F&st0vRxz!thE`Ym,<xb4cL4/9:^eMJzJ:Ie-W' );
define( 'NONCE_KEY',        'V2.XsG?-6``o_3xL#=yjfp.tFgr.vDA;Zn.ZZOpVEKG0L U#O>Ik9^VneLZwju9k' );
define( 'AUTH_SALT',        '=J1?mIen5=-.ICl4EiKOUmL_13uI8?TVg?.lBsXa9Liq0~t-P5VpS/s0!.2+oa1T' );
define( 'SECURE_AUTH_SALT', '( &`|XIRwm=orB`Lmz.OttHwY(^ey?l^lM-[O]#/5.=kD^HJo8@D_+y0Pt1F,P|M' );
define( 'LOGGED_IN_SALT',   'r1!=~SyF6u0h(@*<>/1m8=^<Q^Vwa9[;En7RgBlP@FT([1kHx)T:#XDPxqy[vRG>' );
define( 'NONCE_SALT',       'OjWBbHn:C^(Ir9AK!lIrxsF0dp|E(d nbGNob,*^HUIr_W@!;#7zf|*fwD=Rq m0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bn_';

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

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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '(zdHeH a|{2RsI9(@,SlP6cKNST8}/=202O:{KUs{8QfRS-7Bsg(%+@h=D.?vJ.}' );
define( 'SECURE_AUTH_KEY',   'B^lb{K3wjyB;M3CuB%5xm).^%Ls1M:RzViU9NO,m,$:XCM}71H{eBn5(~J@G=f3%' );
define( 'LOGGED_IN_KEY',     'oTlcj3}dq.uh]/Kfz@ML{Uox)c8uU21%[^GP{YOTQsQ%mCYg*nDYm]rAYN6[)DW^' );
define( 'NONCE_KEY',         '61@5LHi7^*Q)+$V6r718XW`*B!`jbi]/W7@94JHys5pG(v]cYtq/r5i!XU5HoH$3' );
define( 'AUTH_SALT',         '3h+>{I5<)iAwO+y.0M+VQX.Qm9a9{uK$9uZ}+YlH&L0*A{BVU4^E `@B<*l.xXMD' );
define( 'SECURE_AUTH_SALT',  '(g6,)13R:PIH$Wm?}e8lAQ^|9=j|rxB7:1%0xE>rK@h]nZU+bE#D2a^2%(b>jVZ(' );
define( 'LOGGED_IN_SALT',    'kv)Rm2 q^+_94Yv P*wG7RK4{]VF%Ha*:>5rik~|}_|y4#v,5#iB?zW5nNFU/{v{' );
define( 'NONCE_SALT',        'WDbX%=I;WdSqIBk:RIrQEhd6TsrdEYBpyEIst,f-([1bvP9ES]=;RUt#Y3G1kK|n' );
define( 'WP_CACHE_KEY_SALT', 'j[$Hp(&VK.LAuwV<bkzR*Mz{62c~JYwCqR]K{YX>jOilc!?l5~+`E!,{}6Z3lELt' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

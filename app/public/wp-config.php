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
define( 'AUTH_KEY',          'o)sTnlGV/ Xnhx[Z-K4pR{^{S|=H0A/, EYH)f[^SIjtf|d`|c%I*I{krHDz9QlO' );
define( 'SECURE_AUTH_KEY',   'YHTiQ2d7D)2USa!C2w*B5&wT A*UPThpgT~fcRid9P3gCWJ%cz}P00N0)Y}v~O r' );
define( 'LOGGED_IN_KEY',     '`k_jwiXNU{x:<hC#AR*@>W|*5,={DLb64+zBjfzHF&IBfgh*v?7<</A.E7!QS$oC' );
define( 'NONCE_KEY',         '8nFB99Y|B4DQ*cp?wl )f?Er]ACG2_%k?gCiwP^pNAD0[@%mcT5zz!dp4A|[b:<<' );
define( 'AUTH_SALT',         'JPAhB!:Z=}PnX-Pw9}jidx3^,JJ/j:aNJ7V?}r;gU/_7tW7@ou&W+mWa9&An{>?8' );
define( 'SECURE_AUTH_SALT',  '|x,&bJ_f~_QZTK]8}o/k/|pI7om1iI!1G[~FFao$*So.^A:(!c@|#<aKDMsoisu ' );
define( 'LOGGED_IN_SALT',    'K8<lv!e(_mzOPo)MYU?6u&.fDT*f0!v,]C#<QN{Q9l03SF* ~#;*RKvI]BL}&2U}' );
define( 'NONCE_SALT',        '@dmDs)i.K9V]N.40(tu@TLmfZ@Vy<kTO+0?)$:PyRjyJ%1TFAv&k{GyFR?:A%9/p' );
define( 'WP_CACHE_KEY_SALT', ']oLdK%+>u*:jDHzc.K5WzL7.E&!w28RbLveliS3Z^G?_LniR^QApx~DS@ZR#@=la' );


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

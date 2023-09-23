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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwp2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'mCl-dc8Dj!VAowb:ZLqFy<dP-u]B>f:_>#8ZNn9d+`XHemV.Xys>sc1%_#hVa^O~' );
define( 'SECURE_AUTH_KEY',  '@@!z@B`|k;viMDdjhJ>l[R0Sf7R</&2t:{?%Z){o$Cd)@esKSyb4@=XC}TU,oqNT' );
define( 'LOGGED_IN_KEY',    'UnDJy{#(SOkMacWU3-=K,UQL$a!rQ[^PL:(l81T7u%/i>>0=fWK(/~y On24I:q ' );
define( 'NONCE_KEY',        'ea8ByT~0<AIr 5c<EzNBRuAf|,&:nK<*mrFy*|l$P,%iB}l&$p}?_sCRzg0M+$%_' );
define( 'AUTH_SALT',        't?9mqK!+,FEVUS)5=3#/l {e[Q<v`?~1}Lq8]jnU9J e`6P8WP/bO?h eiIhvkfG' );
define( 'SECURE_AUTH_SALT', '$G$D,CP&0l-=a:UFTdi=KYrBNa3%y<X4S?wa=|)gLMa q:zVj.!o$l^ox=iAQp6;' );
define( 'LOGGED_IN_SALT',   ':*Ic{X59VGky,,IcC0)6.,e9f[wYK{`o~8~Ci}~u_G2NVU[d25>d:rd)-Z].oq[/' );
define( 'NONCE_SALT',       '.7Nf{1Ks7?b~Y>KX=@BBL&?7fZI87hIA{4CY4sK6h(9v)5:0e!.!U;:@.8Qu}A<P' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

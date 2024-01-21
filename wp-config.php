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
define( 'DB_NAME', 'port' );

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
define( 'AUTH_KEY',         'HVbCQ1W iIJ|7{oBV<I7:5Mecpr(oCCdFCEh{8D)^phS7z_gYE7s>bj4)H)%1Fzh' );
define( 'SECURE_AUTH_KEY',  'f?a=}!pC[]wMtD]mn+uoMH~]TUK1Q!o(IRidNYv%r[+j>-iPlFC_|$hPJgd!edEJ' );
define( 'LOGGED_IN_KEY',    'cPa$ndEcS/$0F2m;dnN=I)H_46c QoQvuq6F?yFS$ze>[aqtz;&MmP`[ oGsI&sl' );
define( 'NONCE_KEY',        'g5w[FuhSuvz[1Q_[K@<`Z(v!$F)!}vJKj4pj{4x8of0HHu~yixo:A%>0hkuP=IhQ' );
define( 'AUTH_SALT',        'Y2jVPI$yRUKhM` MfIl^9)T6Zf}H#dS-`|,fQA-}?[?8frq.+E9C#7eMsD.[UV$V' );
define( 'SECURE_AUTH_SALT', 'w1f>E`kQwk9m=X.Oh1 o[/{:e8=kZ6._NYK3fuTf}C4Pg-OBllC$6NF S=[S>a*8' );
define( 'LOGGED_IN_SALT',   'b*s|<#r#SNhC~6$ft^_ru_)=_pxJ15$y7L[Ndb[Zx$[(6]A}=CL_0iXS`#~_<]${' );
define( 'NONCE_SALT',       'YO%CA<D$NET+1@6cd@ylB;A@5`%%kQxZkfT)SCNIpgjmvN>}r->X/Z;&AB. ^%Bs' );

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

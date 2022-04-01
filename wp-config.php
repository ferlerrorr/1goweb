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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ingotech' );

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
define( 'AUTH_KEY',         'Ea{Ffu__kCiNk^m((RS}=X~b]7Y7.5>+&<Lw0 3Yz(+WyuMD3h<5|0L0grUl*7p1' );
define( 'SECURE_AUTH_KEY',  ' RZGmbEN0i8O*L|z<&79?yrdS*5{u4U2) ?]ECbbz$Q$ki$c,n9$yfFsL!K_1`Z6' );
define( 'LOGGED_IN_KEY',    '$G<H<qNXu;pgVb#gM8uF.QTk{r+?A-I8W}5(#o:~AU9Y%0GxM^L==nIvs/c$1w@G' );
define( 'NONCE_KEY',        ',Oos{.e4Rt$K4db`o#u(X#~9+l:B@+M^BDq^8eg3=!# ~$OrsV,uSTYiinBM.B%s' );
define( 'AUTH_SALT',        '(2YiT=)xzh&* 4ko !a(pmDrl/9w,D-tW3V),f1{F,3^$4Fr4t7H6p4(AM_x)G*@' );
define( 'SECURE_AUTH_SALT', '9a#q#sfAQ~15}C&1LA|WZ?#h*]27.z6)&4xMh*6p 2g U4UCEOJ|rj%[Mar>KuBe' );
define( 'LOGGED_IN_SALT',   '!lB,Vn]]j[L0qA<F]yqoh_Sy654R/sIOWE`%m|I83oDw@-0X7)j.C?.Tqd]YR+&U' );
define( 'NONCE_SALT',       'lmB.yI2M_0U*2^q%|}7V2&(Rm+&Z2Suzt-5H=d;H&;g;zJZ`9VUZT?2)QhRVWDaE' );

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

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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Deo40~x,iDhJEB,M}Y*l(ltZN}[++rsd2;@Itp/&T])AE.$T>mOT]~?bK)4XMI1p' );
define( 'SECURE_AUTH_KEY',  'jRV^Ib=*uZ_rUo!K(6$07W_*T#^,u%dT.4OUV_7-0;RAE,?`UL4-d)aoE!7/pmKN' );
define( 'LOGGED_IN_KEY',    '19thfBlD>KXMgTO1<CzVD+{FZy)BWBJTSog.KluQ>Cddc6N_iUjAz|Jc@U0;qT@@' );
define( 'NONCE_KEY',        '_Hw~!PE>9KDTuBSU8WRKK-aXniIKCV+VrOOK=er=J.;@H4E;<&xr>yil3#lm>9Q}' );
define( 'AUTH_SALT',        ':uR57(>:AS8;eBeU;>`I8oVjMqwpu *HDH$m.%+Blsi@z+$_8(,lsHtdCp~4^8nR' );
define( 'SECURE_AUTH_SALT', ',5JZSaVz0w9ayY*nKMC1KutX{[5J)><%vk)g~5<OIAA)c`%t^3f-x5_+3ngr8>T*' );
define( 'LOGGED_IN_SALT',   '[Avw2ajqB99ws`d(pk wF*>};tgI#K#KToX8D`=CC(t<%$*Wn;8RE3^ZL3RPY1J%' );
define( 'NONCE_SALT',       'dn=Us25<WR]Z9Fn@SQ/!N%/^5w/l4[hDN$s5EB,|^3o8na3fIKfE3NDlvv1zL}fV' );

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

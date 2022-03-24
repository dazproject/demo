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
define( 'DB_NAME', 'demowordpress_db' );

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
define( 'AUTH_KEY',         'Xa`HrcQ/f+U,BVkAbTj&>Km`-1VI$ d;v47JfsX]K~h_kcdZENA<C^`1Qe 7%D|b' );
define( 'SECURE_AUTH_KEY',  ':tmO-q!aB)g|TSRE9Y%R>f&=eWQ&>%Dy_j+&;VcVg~l|*4AJRgC`BBw*Dv8K`52w' );
define( 'LOGGED_IN_KEY',    'J!8mIx;CU;P 6j1m{4LOP1<40^;a/yBMt!5`Hq8qp>S*N3g@86N:}215MY_VU?9k' );
define( 'NONCE_KEY',        ']]|pbBH=]=t1(fB>[!p`$4X^tj.GQ#Z.=0 HE78E(.qoC$&sHz4f^MpZ?6ht#Drt' );
define( 'AUTH_SALT',        'oO47l]P8|g`lU2<%*A+*VvF+Px-lKY*O5`Ob,0m.#g~V8@h%@*Odc;]gCrt^zC(O' );
define( 'SECURE_AUTH_SALT', 'gp0-3pK]ZT|,O$74XUQpseb:7t(d3Hu+>m!5{QrK[CNYp3b65eLs:r*Br3AtDSMs' );
define( 'LOGGED_IN_SALT',   '!97R=`r>W`_eLF2!dBDoZcF~ixMds(K%5Z7e#4=H:Vo`)|6UDt!=D,g#3-De8I&u' );
define( 'NONCE_SALT',       'NbjU9.l5&Ch-=x?iF#nVk3qR6-M*0i^xd4w10OY>v)(8BYj4no-u!5AFti[sC8[4' );

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

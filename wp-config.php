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
define( 'DB_NAME', 'new wordpress' );

/** Database username */
define( 'DB_USER', 'localhost' );

/** Database password */
define( 'DB_PASSWORD', 'preet@9' );

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
define( 'AUTH_KEY',         'Z)/!]Myw]T;vCMz(az i6qg/s!Ub1/D%p}0rDUBlQBJHK2eRYv,=hi(HW@FREG%D' );
define( 'SECURE_AUTH_KEY',  '.yDC$o#VP|c>JKakG {JWNGL$`Y|NP,[1L/hbkJLTd7#q/Hxstb/+iL/E<4e0kR7' );
define( 'LOGGED_IN_KEY',    '-BN4(g,>;gy`d*c/gU+aUZG6!h?-7HVI<* rNM=FumD(d(~#N-..&se5i*Q5_oG1' );
define( 'NONCE_KEY',        '`[d+=HK4HsR5dw4Ddld[BYq:@~vro09=]RXG&Th]i;mHeRA:u_5A{|ff~3)8/MU.' );
define( 'AUTH_SALT',        '6iow(EI5GO3-wDHg7h<S~8MO|tfxb5QN|*jc64LX^a2R(qtonLfJ(*Iqntx[+kdp' );
define( 'SECURE_AUTH_SALT', 'kAJ[d:nc#DqiWYqfom`rr>HAhF8v+2{Q*ryI=a[,}pL30%v07 rW=}O;)NA9X9;z' );
define( 'LOGGED_IN_SALT',   '0mD(qR9;&K_&O)@bs,bZspq$Wva>SR$<@Uu(R}^Qa%E&w$ 2WC ;6Ru*xZd7ie1U' );
define( 'NONCE_SALT',       'e3ED5V?L[->?eOCHg=ur/gi*63Xp;DH&Y*pP;7iiM{;#9?Lbq;&{lI(zH)=HbG0B' );

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

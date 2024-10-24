<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'turmati' );

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
define( 'AUTH_KEY',         '02*4HF1R2>n;0TiM4AssgRVc/[?<R(,k6gC-R<>:jE>?2IG05~4,GS*n4Y2mX[$)' );
define( 'SECURE_AUTH_KEY',  'kq8~{8dk g^cz(z2QP@dIQAfHM=Q47:r7S%/*nIlT:)pV;y3/{dFhb:o=~.-hf4C' );
define( 'LOGGED_IN_KEY',    'cfn.o6ZKZ{$Gf_Ib7:;$>Cl.t.1^B>R!]u+ab=UKb_%eI1hQ&xN=no?;1:IKmft8' );
define( 'NONCE_KEY',        'a>B:{Q:7v)O_Eb5nR>UR:01YBIgT<z L4<wQ.E:]g~Fmd<+8P/GhB~.(]h/Mk1P(' );
define( 'AUTH_SALT',        'b&b@R|U|mcWIKPGDT;M&A6U}fAle7d]ch342[g=0]^hwxt,uho^OE~*i<CL[t>e-' );
define( 'SECURE_AUTH_SALT', '!a9Xx4~hrVDZ-[[sC5.[5JB)%G{GEOpC1#y6HfdAQ7.wKfO@{,]LQd^Q&W+^pLhc' );
define( 'LOGGED_IN_SALT',   '+d(%(3nj!h8JYemsjposHLB*(]e^)Kno|S0,IU8lfH]>8f:5h8HAp(Qlx_k0qJ`>' );
define( 'NONCE_SALT',       'M(PiEaQ:J^<3j5kB&3By8l:: !2,sO8G`;3{N5yzQ|xq.mU]Ao.t;/H dd b{zaJ' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

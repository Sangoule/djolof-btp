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
define( 'DB_NAME', 'djolof_btp' );

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
define( 'AUTH_KEY',         'nR>GC,7zpx)~^L&[7_gef_wxZ[MG^$DoL5#xBLeA3X?G<(ff(jmg6O[_QA~.gNMP' );
define( 'SECURE_AUTH_KEY',  'O#!3iNtVxxr|l#I]28aA>|aSm|G,8tHg,:$s%BK*?AhLAI*apSm2tnfJ?e]&h1J|' );
define( 'LOGGED_IN_KEY',    '87&>h6FaP`AglCF-$E,]c=B9axy><1=jS1.D4MSw4p@jDZry^-gNYDSome(>cnBj' );
define( 'NONCE_KEY',        '&I7O|gtAEY!elx~&LY}a)[WkUk{ul8)4<W/;-&}27MgTH%j%Jmy~h9[/=bL3NYrZ' );
define( 'AUTH_SALT',        '=)L 1p LsGPC+[H?:U3IgAD4mW< q%wosdf]dk&,N1H{6x`:_N%.R*Bs8c]uFUsF' );
define( 'SECURE_AUTH_SALT', 'A-rY%5<Ypv^X1+oin5nd_Kb US_ih<`Vj@$WeX:(d6@/5RFq<i0O=%Md5?:{-P]_' );
define( 'LOGGED_IN_SALT',   '%pA(e^=a9eqK40z#B+CN5hpGi)vj)YjTvZ.[<vb58bS3)(SP7O!J*}NKRpP~Z/[S' );
define( 'NONCE_SALT',       '?]dA!{m02hyw?SX>FH.GYxTLin(k)gS;HI.4.pY(`D+&HLDX`]F~Nd%&baq/QE6o' );

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

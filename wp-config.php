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
define( 'DB_NAME', 'thecare' );

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
define( 'AUTH_KEY',         'aL V6-n.CHFoKqS12T8W1Ba&>> U>08<N`aZ^n{$!r(F%NU!L/Wh9^ELJUV7~GXM' );
define( 'SECURE_AUTH_KEY',  '5HYBJ)mNF8go3=}o~%F-|*2*K2Az$#]fk^vACz^2ViJWz66xy</E[ST,q!ijy5`T' );
define( 'LOGGED_IN_KEY',    ':{%1TO|| hdGTHrE1bu5#7H,J]vBb3`,gGE;8DwgPt12J#WE`(289]lr<z(3Zz!?' );
define( 'NONCE_KEY',        'H3g<;pIuQZxgw<HxzFK1<L(z.9U&<[v{YoYO-[p#aWs:*}?x/!4jP+0Ln~4]SMi4' );
define( 'AUTH_SALT',        '.pR4~D}+0LPXeBzZK|9/7FX=jXKtQP).ndVRwte:NTGLJh`WyZ%uSMDc`ZkfT`+^' );
define( 'SECURE_AUTH_SALT', 'Sqhv}`Rd@c_Dj-RNe^0lZYwexk*c,wQ$&jgai$)Ib*uYp<@cWc}A/SOa+?eAg-Jz' );
define( 'LOGGED_IN_SALT',   '><,twEf|<)<,+0SXe[965fHlOs$ t9$(cqS&8VGaw9s_q=doS[ePY4eY={oOPK3D' );
define( 'NONCE_SALT',       '[W5>PHQ/ClrBpR>Gf1!7XT($hH~~2VKOv~xDK_T;rm&ru;F,azn&TNX%Y^juz7aG' );


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

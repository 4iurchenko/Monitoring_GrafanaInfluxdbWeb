<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'default' );

/** MySQL database username */
define( 'DB_USER', 'default' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Gg2YAc@h-g:YU!0wyECW01MM87Q{Tn{)r` a,zTg3R?9FL3~#v!QliNYO:LoWPBR' );
define( 'SECURE_AUTH_KEY',  'BH;!;lI]T}sqd7dz|!rEWt,Y(Efwh9Y]j Gz@S}v[HV|a>Ba)+P(/m=;~|]eE<E*' );
define( 'LOGGED_IN_KEY',    '~_*_]S9vt:&V7zV!TYAqz~k4U=9VPyH22a8] V#;BRc koYoQ_5}Fp;j]43xrZS}' );
define( 'NONCE_KEY',        'k].A<Ho<4pj)AErV4|r:y4XF68@t>nhZPXAGj[ Gw;k:)Mi4|AuD*=jxYI#cmJ9t' );
define( 'AUTH_SALT',        'B^Wk~zo04[bJO#e<3*fNL<SY?Ujm|`!zG_]&$n=nUR0)(DkUXS@j0OY=0!nl2aV;' );
define( 'SECURE_AUTH_SALT', 'y=OQrTP)Qt}V77dtF}a7h4 -4v?w.cZ0zZ85TyrmW(XuHme.6W1*RFSoV2d}?)R6' );
define( 'LOGGED_IN_SALT',   'U-haEEN Mm<]_~Pm<0OeLI&{a#Xs)Lpo18[XFJ@]s]wY<g*;=%)cxWM^z&SI}6[P' );
define( 'NONCE_SALT',       'tR4,SwoeGS2@Vve4wAgxvzkg2[9p`sT0%W-HzCW$S+r7L>oCp5uv?zQ?]16^e`{<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'berbesti123' );

/** MySQL hostname */
define( 'DB_HOST', '10.128.0.14' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3<]&tdBWa9-Q|X#!s1wJ72nu10:W{`uJ4)%qp+x`qSg3*0.g[kG%30;YndO*Yj^]');
define('SECURE_AUTH_KEY',  '5t[6_/>C40e:l=.&%!.gOh5D`u.#KI^qdBQ,S>wVR R6m7]A;[VD7+nXLb7U:gv1');
define('LOGGED_IN_KEY',    '[hrxog{jd8lzxe2b.iP4-bv2Q*4d8/|%jjPb!Sx}g-~Mi~>+Ay1M8zLcntz+jk -');
define('NONCE_KEY',        'kPiW37gc8W:O|:MK5N~NM){/61gBi1)||k(@!fr8u`4k[[DGrqK$>-01v{o+#n_Q');
define('AUTH_SALT',        'w)9dhS~ wq/(h>|Zd:!Ikpf_<0Mz]uqT*f628G_H/M.(ZYZiVAT`=T~v?>6Gn:/+');
define('SECURE_AUTH_SALT', '.v$F/xN-jN|1-S}=0rr%rXbXj%A?fiB%Y]e06h6swr&MuvQgE?XqH~-oPHPB(rlT');
define('LOGGED_IN_SALT',   'jd!|HGm-c?VuW[StH3:vyc}<T.xi}-w?[Wa7gip|]]G<KQ 7l(99j0:;}.2olQYp');
define('NONCE_SALT',       'e|+g9Xv[aNO|;ty(_pzHo]|=()M,w}`:wF?ZEC*6-7Z0nj#nr_mF*jNZ+&8@@eS,');

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
    $_SERVER['HTTPS'] = 'on';
require_once ABSPATH . 'wp-settings.php';
/** $_SERVER['HTTPS'] = 'off'; */

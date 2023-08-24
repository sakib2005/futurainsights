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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '4Ix3MaEyt5ts/4l8hPELDCyGIEIFTf/TTKYSidL6Z2oVes0hmYGCee0LJkhI+ifuIenjd97Aoa1Xx2YeMaO37g==');
define('SECURE_AUTH_KEY',  'MR0rST6EzZ3ETzFhCKVDHVugRRO02NVHnFzIMTYKjfjkrMgWNXZ7j6o5S2jfv3Wz/D873VR+TsY/s1mOH53FDg==');
define('LOGGED_IN_KEY',    'jHn/2Y+Fe2/npNegNKkV5Hg/lqaMMBriPRUiwXcAEg/e5/bEi6nTK3M3Q0C8Mn4TpB5FL245FsMu2qy294OqhA==');
define('NONCE_KEY',        'oaazM7dXxASUq3U5q5U87L6NGo/Sr9MOcztNKyjM/9QNfrWSzATNIsNV4wW18IBhEVwwytjMsHuxFz+zMwL4Hg==');
define('AUTH_SALT',        'QQE6el/K1IgEeiZbViuJiHCHSK4EyvlCSzp9lKJUbTKDToUo+3EI62QW9uYrEQet7KgRrvlKh42YLfNAkSeUzQ==');
define('SECURE_AUTH_SALT', '6ftrh9nbBmENI8AuSScFw+2IdBnRLz/6qpj0WA1iRZvi4PJNQeTHHKT1OHL1HEMBGj4akPvPtDDJLirlT+HYJg==');
define('LOGGED_IN_SALT',   'QfTntSSr1IXdSIUJmW+urpxi9RGVO5k8fRnW+HIE6DHPTP/inwkysrtmO4eFRQBUrzcMt7E67GaRYZIXPOF95Q==');
define('NONCE_SALT',       '/c3JBcX41r09PSf4wOiGftqNjQ+1D78jcE6amJoIOQevgs3MFFn/hrQ1xoX1B6L4ltmxNXm5WwCGFzYg/xOvWA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', 'aritrika_wp624' );

/** MySQL database username */
define( 'DB_USER', 'aritrika_wp624' );

/** MySQL database password */
define( 'DB_PASSWORD', '0C2S-pN)84' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '2yhgi3hmtcpoit97sjlms3z4fhdzzaul0bzy1i9khngm2qrwekvlwjbdjsvifw5s' );
define( 'SECURE_AUTH_KEY',  'a9xj9q0dtghhfxqdkdgs18wqit0wkk4u6sufs8z4ya1mrjcgwdqwsvhhjoqqszpg' );
define( 'LOGGED_IN_KEY',    't1chtc4vto4imzztaa4m02y5a9h0znv4kz3yguzgfcgmvisbu7fezf0ddnbrbh9p' );
define( 'NONCE_KEY',        'ucdw5zwbznjunotq9roixqqmcko5yoyvmbjmwoygffkxzvpltrqjxcmqt9zl7k94' );
define( 'AUTH_SALT',        'nrpeplyyyz9gcexxa6odcyzojvnamlybj89g7ctqrmrr5ciy2c3f6usicc5iy1ls' );
define( 'SECURE_AUTH_SALT', 'qwosdk6tirwzs0eu6f6wsaocxdw3ol6dphkw0jwpajhudberajfjnlxkqvfx2ync' );
define( 'LOGGED_IN_SALT',   'b9kcbnfat7ajrlgbrd6vtgpx5ionmrui3g1pgsevsrcqpzfpajzzdhtyva4uz9hr' );
define( 'NONCE_SALT',       'kwki4wquxoj5lbaqck6zq9wtpaljpacrto9oiab03ghgdid8rfuj3mxalx3gxlho' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpbp_';

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

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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'U5t8D+YcQkA/E5snBQbEkWCvr1QddtP95FikGCnm2yjcs0tmWZtz4IFDUFuBAO84NCLYueCi62wB7hsufPs5ow==');
define('SECURE_AUTH_KEY',  'JSAGAlQ8ym1owXXhrd7e3Hc0rHAA58toOkm4bbtPsqAuOMBxiufe+PUEmU/PzwbHX16brpiKGuphCq1XyueMpQ==');
define('LOGGED_IN_KEY',    'MeLw1zt7WDsk1RQK66n+Bp0Q+LSTKZvjIMLmxGXT/S068sxywA6w2F5t2n1PCyyOz0dnY6q9e3Vk/UaF9Sc6xg==');
define('NONCE_KEY',        'mqJhiV0tNtmtUTeqdNQVI2ZGprsEygqFQJksW42rO09uxngB/jppXnEd35dbeBkybKgL8Mm93+bgyWt57BxiAg==');
define('AUTH_SALT',        'aKp/4Hiyom8IoFdPPqSKMccGH6BfISPXtP8tGvwSX0BSkzd/dhvBHxqOB8peFpkWr18Ec0y/LeWm2vQ3d6oAfA==');
define('SECURE_AUTH_SALT', 'ADcAv8DmmO7FwpQmC/AnlRjJkjXfInM02miA9RwnBVNq/28JHUrCRmj+0utUTp5vnDleuoGU4VxOZgCyMyj1uQ==');
define('LOGGED_IN_SALT',   'rJPFh5mhxOHw0hMLnkKetFw/HpBFo27lte45GImbv+IIDUAqsY3I+L19hxU20HZilpmWQeMAcg/EjgjyQYUG/g==');
define('NONCE_SALT',       'H7TfeJJd5s4HQVP1FlV4bpuGtxU7Mc5WQ0yVuKB9cft4WkwgWKl9TWa5oD+cXJIABbn/w7eI6kQR1Tz+fkRueg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

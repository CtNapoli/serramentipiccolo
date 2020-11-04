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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
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
define('AUTH_KEY',         'RZme1lRhCpOMZ22KU/EBqmsvAxE6k97nbi3hKTKXuhyRCjKa3KMeDpnSEbTKPwTQioq5QCsOdk3gE5sBWkfRJQ==');
define('SECURE_AUTH_KEY',  'p1GyHDn4PapcfHAiRAQ7hRQlC9M0onFPHAWZAHYXTm9JQlT8vhhFAn+1nya7eLJpPYUzjz4+iea5JmWWSonHBA==');
define('LOGGED_IN_KEY',    'bYnLnHSpGRawtahNhCnvT4t6zNmDGoUdaGZl50mkyg5jx1uyqGfl9n1ph5qtHBwlnphK5983EPrBfFIS6af04w==');
define('NONCE_KEY',        'YYtsC9WYsgcM1R4pdr9tJHijp1F4lAHZ20hU2bzkNNkCujEFm1sV1E1Fw9mssBQEzNeZg4Xx/4/pYLbskTfzkw==');
define('AUTH_SALT',        'hwI3USrC0QVdrbXyI/TjDHvAdS35i9lUguVEnroiBp3bMiNSPFgCQGvScnu9PsLP8IwMztnSeOt8wNQTgWIMHg==');
define('SECURE_AUTH_SALT', '87iGsTR+hCcOCZ1WpkYJY4MnOAGCcVf3k9QfAfMwIf3kVv3e7BpyNskHPK+p0eVpV7EE+XQe6Hd2o/H/BdeTlg==');
define('LOGGED_IN_SALT',   'FBX5j60tO5qLeRGqNqaJ064orSkLPeW3zqUFJjdcfX7Rp79dgAbLQX4/X/e2CDz3rxY/kBsGnqMik57xDx0uRQ==');
define('NONCE_SALT',       'y2mVV/8g2Ad/Z73lcgViE1BLqHtnqlO41s4OkTX/XFRLcy1QNuKdcvhDiU988EQF1OFKlJ+wDewv1nmeyqeW6A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

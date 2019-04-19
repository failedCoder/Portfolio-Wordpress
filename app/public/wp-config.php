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
define('AUTH_KEY',         'K2uLjOpqBWJRdp7sR7/v9Qr9PdOGyhXEzvq7zlNtXCQ4Je729f/STMKGKoqhnjseHg6y+7W7Z4ea7YCeJXGLag==');
define('SECURE_AUTH_KEY',  'RGqsdHB/LYkP3UIH/Yf1K63ZXeTPbvUEGmCVKwQrsWz3c6Kuqs8rJPD62Py1ToaMBRzKjyhbLILovpe5V4w9Ww==');
define('LOGGED_IN_KEY',    'OpOwXjqj3hsQLRcb44lAI19ZgQnCqnNHtmIVhbW89SjF7TU4y6A8biIv0vD2cxS9nK9FddszmlYmnLnP3bxYRQ==');
define('NONCE_KEY',        'dKaLnW10reQ37bkzPhecp/f8HkoCAocNZAa7AoreNvGWa4kYfSCWMpIRRcitQt75c+OebDyka3NTebu43mWTwg==');
define('AUTH_SALT',        'IUk61OiGRwBisaeALrhRv+OkyzwZP7VhWEVYRLgY6f9O7LYQSv7opiTZyq5EqRky84zOjIb24+IxGo2946WjAg==');
define('SECURE_AUTH_SALT', 'nrV/HfQKruqmnqG9A5AVa1wNkJgzcJBM30G62TSPMqDN6rTR9CtEaYF5GsDyLc6iyD5ayI2uDwOXDqT5FrSlaw==');
define('LOGGED_IN_SALT',   'UIJ+6ihKa+TcCtDfhk/80Q87OQ61HwwUgIirb5vakNwDmRcJyEKeZiDPQ7aRmTmON+dVfakHZglC6u0lhjfm8Q==');
define('NONCE_SALT',       'qxkgh13AWZVT7zvofWuO1k6Xg7WFvn3SjDujYhmJHqIJSRAC2+OOLm67HbEBsPKmsTurBo9NZaLGslc4eTKpXg==');

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

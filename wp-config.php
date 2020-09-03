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
define('AUTH_KEY',         'okE1B6l2qFLnZ38hJOdysCuTeTuFYR1iAQSw0SkvDv9sgWZUwgDgVP6rPL/k6yV4HAbjViG+SlWC5RvbPoCNZA==');
define('SECURE_AUTH_KEY',  'n5j5rldHOmNdfALTUfjF1Oi1QxSqIpIZOg/vKKK2urhF4NFU2RAgV6eWL72lzJjd/0l0xlH0XAwgrEIWfbaAzg==');
define('LOGGED_IN_KEY',    'PtgwPQnCMQJYo+ItyEiN2kcdyB9E5xd/lVcFv0JuxS2Ngt07vVI30wYdIrc5FjQtUjJ7qhJdj7rpf0w827f9OA==');
define('NONCE_KEY',        '1phNqGjlMT096VFKqjAxVm1/XjWvla3HrtNbYjZqaNoIPxKhCEraTCkrcINdHHRHXIj/F550o8OXNQKrjBPswg==');
define('AUTH_SALT',        'LbAFvdzVUWarw9293jg4wzhHJ2beym4ayKbROwvhDsgfFx8H0qY4Ngt77lvhtsm1Pq1R6c3QEWDtG5URiUsG3Q==');
define('SECURE_AUTH_SALT', 'MFzU1HcUaxb8PRSeFdK4nLlfUQFh+XLjq/9UpAp/CmZz17UBhr/qJ4hlDKvXw04LfzOFTFjzb3PJxTI2z0yLmA==');
define('LOGGED_IN_SALT',   'vEx3K1xy5oc1fB74QxdYLSj/8pSRmUTp0XOBuRryOHF94KyEwikaXTZw7joh/dYbxWUMmgL8o/Vm4QTc5zFgIA==');
define('NONCE_SALT',       'lNaST9y5NWPhdiwOfNl8iX9+FmPRRpCRmYvkYQ8HkBi6bB2j58fGKHagxrAJZ0/7AxUqZZsFTOdCofchbzlmYQ==');

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

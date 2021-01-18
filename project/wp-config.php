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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', '04a3ZPBkeI3FGwk4jVMnk8dWmsJ0OeoKzfrJgDAP9Cm4ulQRAmhtypRKSXZz' );
define( 'SECURE_AUTH_KEY', 'bpUx9tnRfNkIIEMQhaFhKRVRFWb5BJJ74LJvXAD62Zohz1Mu2ujjcLkKD8Ei' );
define( 'LOGGED_IN_KEY', 'p1v2XDf4A6Ynu7vbpWYbrYt1iDpQ7BxFGSRMRgsLHRTPknd4NQRmt43MyJHO' );
define( 'NONCE_KEY', 'PuG0gUDgun2mhMaUWFVrTsJRLskCHm1j0ib55UA8QJgZkHsAx6ojd3biYidA' );
define( 'AUTH_SALT', 'qzPZ2oYxx5atKkIIL8RZaGQ6uAmO3mcD7fl14LVr7gPgCFLxIWZQ8koeLUtW' );
define( 'SECURE_AUTH_SALT', 'KAlET73DWzWyG5v8wu8XomiQk9NY4s9OoT7Y5rebsfMVkFPozM3EHYelyiwS' );
define( 'LOGGED_IN_SALT', 'i3nHKlzfZ9U29X8tUyXUu6asLzSX5bzLCbSBdSGvSY402sURZNTCeFzUNcws' );
define( 'NONCE_SALT', 'zE3ljxGzlNG39FKcvBFVAUTmb3dksmcikeGS2YLxepekuKvM1dZuI61puz3M' );

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
define('FS_METHOD', 'direct');

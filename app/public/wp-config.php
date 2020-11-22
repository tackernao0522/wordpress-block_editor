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
define('AUTH_KEY',         'a01CbWQ2ln/XKQiBp/Nm/KYkWq/jkF/pqOpH1uH0LDvlEnwhVrTnGFLkzTemAWbJJrh+UDp+Sh+znTaqB3GWZw==');
define('SECURE_AUTH_KEY',  'ObVBY5IdCTrwNz/D0Ouv/B+HUUzexxdedkWGv3ggNjB4k4S5RhLzzn1OOBgFGkEEHMG+hPywSqsQ1GAxTsB0Cw==');
define('LOGGED_IN_KEY',    'Xi4S0twD1UhXONmMf6hpXrcQiRsNkEw2FVs1bKtxvJ/G0EvrcIP6On6tkioXPLELuaKgiOjdeZGhC1j/umUBlw==');
define('NONCE_KEY',        'Ty5htlGRrZnzlSCsytX6YT9hTFpdtAHavlqckR1uEqjxHOGztyF4dOwFJlLurt1COTOx+4ECTsecDE7MM0+VkA==');
define('AUTH_SALT',        '76FQqoJdFuuh9o1ls+C5wTdRxhrbjTwqfW2hbJ2d/aZgauDWHEbknDc9Jvob6+XRv+Jr4tsGWHgNvA8Jrm+lhw==');
define('SECURE_AUTH_SALT', 'SKc/UwQsgAIyOZVEBLzE2ZQSOD3LrdpsxI7SwdeOz7RkGt+EpVGX3zdCfWdzwpVxCwpx4uWwZC6BeKPWiw9psQ==');
define('LOGGED_IN_SALT',   'h/H1gZfUc0sVCtpxf0wGHltRLB10zbmIJUDvTe4ntoeIMGV29Dor2kjSpUr+egtdD5uqovycsjiyuv7/XbFAwA==');
define('NONCE_SALT',       'nPZYCAqNfqKbh476aj7tNGkpTwI6aLNN7snurCEee2EMROH7b7+y78BvAPb64CeulEDTbgEslKtHnGZvxpwe+A==');

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

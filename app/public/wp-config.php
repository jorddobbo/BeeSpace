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
define('AUTH_KEY',         'Pbp4xH70ZUVG67iO/1uA4GLQjNeXj0OdF5E5YaOcCwi3PR9qrtZA6N4Xlc1FHNcNyGEKVomhmJC7tkWvEWVaSQ==');
define('SECURE_AUTH_KEY',  'R5FMtlD7Joy1crvvzsNoewLC5Wa8KD+zm6bLewb5WQkOLWKK7lWHssuEq8uMe3o2Z12x6UQIrEsParXDq0+Hfg==');
define('LOGGED_IN_KEY',    'PNSbfc4kmjap/xMZJwAOSlLcEPHYAdatNYZrp3r8u/7p/tF9BmKHq92n1i7+T+Gv+21I9qhk54UquWswqckltw==');
define('NONCE_KEY',        'PPetFHuujgHNScHAUaQ86pDb0J/DWzFdZS0gmWFRPF/1KvsFUhvXoSc3lLB5pqPS3RXkuPyp1wpZKm7EAzFSBw==');
define('AUTH_SALT',        'ukM5PT+zzTSltcxMC6FFk6XLAyLR0/Busrx8lb8EpfWkGHQ30TjETdWjWwNsgiNM6LhRGwF3vdeTY1XFMKq/qA==');
define('SECURE_AUTH_SALT', 'm1lFu9AEIHD2NzYYedxbpXoPTAXKifaviMM8utob0hOhIpg4uiuwztDCG7RMUrrJ2vkZ2rnWJ+8lf/V/qiBYUg==');
define('LOGGED_IN_SALT',   'edqhDg6NFYjlMs38Iiwa6PTDRJxEFAoSOl3i/SQzwYyxM/+5KeuBNCP8E0QnCdqZDE/YDnSzo19bd6Gdc0n9bQ==');
define('NONCE_SALT',       'zGSudtwTpWbrZVc//3m2uWWHqZPXuKDHZqDSUvSLCyFGCU3/jcpos0sH6wlBHJzrFz9hkIBdk8QGuYa1q4/SSQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}


/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

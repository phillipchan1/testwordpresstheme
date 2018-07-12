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
define('AUTH_KEY',         'xx6XsOjr87Ux5pBIn5ujSGaG88eG93lDamChcgwFUZojsheXJ9DRZr0P+xmKQRlFVqaNlGfrEkhuDuTq7sU4Ag==');
define('SECURE_AUTH_KEY',  'mbI0ZOaRk6HdHls1ijXB1JePq0O9Ez36RYh7K6nT7ReOHWg2IPKYuBxbffu2nhGK+jrJYqRngFcOVLYr9zu28A==');
define('LOGGED_IN_KEY',    'E3XxcKj5Pu38j5jRCStWW25ywsJtsFUDai3SvFsQoocriYwAYShcOvFjCRRvLzAd5eU2FXQhgz9/30E07+k+wQ==');
define('NONCE_KEY',        '9lNPINpz2JZgZqJhjBlJGlGxSqsnzHGROO9z18+5sNNCGtM/rYEbn1UZs2WandpyiV0/b7QsewIfiPb1nPaMfw==');
define('AUTH_SALT',        'Siw5PRQvUY0njDN3Ni0Cbpct+oyfoffN7sOj1+o1uHHx4NAMqY26d1PkE0qp93HVQhZfGSLZ/53v3SdcEy4kgA==');
define('SECURE_AUTH_SALT', 'vxVN/lLHYS/KSXyHC2oUzBFyVrHYHN3gZJcHLRDqTQD7uBUHQ8424idN7FNUu7VGujViUGQthnVlkHI5mHkYxQ==');
define('LOGGED_IN_SALT',   'ahvnn0JQ0rd2o0ELBtQHYhfcf5JTzbw7QtueWj6XOiZ5+TO3hkDMHAPeKfMFZSnQRH3RPYPXfULpfz7Yh9KNvw==');
define('NONCE_SALT',       '6z5nQB14ZjpgzGS8K9mb5S2vOexMqyEHd4iwLgsUrsqk+26M3H9gZXNd3eurby301blf4KSFSPr2wRfVwEfN/w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

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
define('AUTH_KEY',         'WeHimix8bNZcTovXRmw1BpxM1/wKySOCuumE7MWWLpjkO4jdSvXEnXND5qs+aKhdF7+gfqN67pCVG+nlj70VBA==');
define('SECURE_AUTH_KEY',  'Qg6yZcRgkmcZyCAa6PZS3sfYpk73p/mox11R3D/lj87eyciYmF/23VxqQ59aBHLYa9SzbOVLD5UPtcq7s3frpw==');
define('LOGGED_IN_KEY',    'zUSQsTFgYnzho5kCCELkVdNxe4juEVMuZAhgWSA93RG4O34j+xKGmmQFPm9qM6SHH+7CEiyvmu8SNPLknlO5xA==');
define('NONCE_KEY',        'JLNiATkwxaNrWZFpxVs8alEzgdmdpd9pV2QKFjtmgRMREr4eQpWvXUCkz4VJyjbdTVoMjXDBT9i648UuJuitQA==');
define('AUTH_SALT',        '1vzRKdOAJoNTOgMHgTklfeE8SKNa77c1Y1NzE+QdfLdvnoUhj0Fdv88D6AdZRFy7OWlpp/nmovorghuTLW7qgA==');
define('SECURE_AUTH_SALT', 'ouLYN3UdcpaHu6Y1h32MmDuJ9wpWSxG0JMduYwIYSW8bSko5mA7/gEVppSPm+3pHrPMEBCmNvm0z+fPkwu0Bew==');
define('LOGGED_IN_SALT',   '7OdQCVZmI9YuCmPYkblhZ7LRnIOIl0GGo4H5rB+keHvesdEl5VDLIFZhEO2yLcdLsQWkfC42BrD/0QdCO16fKg==');
define('NONCE_SALT',       'PeOtxOTx359GAhZzT3cvakMKqAeeq8Yr3Rsf3xrv4YQpFJYpEHlJWjUXwq5eez+3kGAadamERwlhWvGM7bNbEQ==');

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

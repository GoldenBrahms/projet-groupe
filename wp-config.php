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
define( 'DB_NAME', 'solutionnumericabrahim' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '[<yDg?SE:wz791RI7CGP1McBgVHH0z?U)!>0cTG=OfU*AsFX-dx.5Jg_@T+9Wats' );
define( 'SECURE_AUTH_KEY',  'j6v6p(=Uu9[$g(Bllo&BL=mMl8scZ5?1gCtj@k5SQC:3 5R`nzFp&_KBvNnFGhyw' );
define( 'LOGGED_IN_KEY',    '</L9I8NC)<MvBZ!fWN*?EN)^-4+x@x&L#Z}1NBRo0`a2FO/.xE5q7@j gALt=w<[' );
define( 'NONCE_KEY',        'RVuQ7RI#UzU 50^y>pcWlf KO>fE{bq=B}zaDRCMY?xu 1lmIS;7qhQ?`!;7}%<L' );
define( 'AUTH_SALT',        ' fQMj{@byu`J_`W#2d.P)rqIA{a}^ZzVFaIVE6!yA__60T8UFaVPFZE6%mtA6@sg' );
define( 'SECURE_AUTH_SALT', 'o}Fcub*!Dvd0uZZ<@>q-{!_;NJ&SrF[;|n c#+Q_)<5Y$vix_<e;.s|g |{t]v3&' );
define( 'LOGGED_IN_SALT',   'Z72qVLOn@8ACnbaANhNdg9&Eiz3^u-Bt+E3n(o{!C1.>st1]{rm#V?&<++juc^O4' );
define( 'NONCE_SALT',       'vw;wf&c,vn}d%??;?0O<|C}z3 icWz_D)I&i1[s4gq]am|U5W}TZ$Ns4Wb)y@vFj' );

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

<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'digitqj7_wp778' );

/** Database username */
define( 'DB_USER', 'digitqj7_wp778' );

/** Database password */
define( 'DB_PASSWORD', '3[64-4U2pS' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xb0goftzn9rmhe0cohyel1kijesoyoy93d7mxq1xml128jw3usarfukcqckcwdst' );
define( 'SECURE_AUTH_KEY',  'qz3rbnsrffjmkazeh0nf85ccsv8cgwquqcxjkz22icmdgoppsiyzmpjfnu0i5ni7' );
define( 'LOGGED_IN_KEY',    'e0u8ioi9okws6sr3xgubwkhjcw7xihepq4db5ehbwwnjgtcd9uq5w7xyypdi0rg5' );
define( 'NONCE_KEY',        'ngq0yfmlquxalpuf2iwukgvqk2t1xvzp5jc2yj67ctqb9czdupzjo2ofaquoquhw' );
define( 'AUTH_SALT',        'kjgsd5cf7yue89mkllurb2b58zx2wzvutmnoqdpbyu4vryokxfrti34nnfkhi96w' );
define( 'SECURE_AUTH_SALT', 'kzakltvxijvobulbr4cvwxnx0ucfol92p8cvc7o5u9d5utqirlgtdntrgq0zaysh' );
define( 'LOGGED_IN_SALT',   '2st3ecuo4cwbv4atdxcvbmyakbeskdyawrgdbih8k0x0vyo2jz7nkoajzqbpt647' );
define( 'NONCE_SALT',       'nwmugssc18jdwdauvt2tiwyiqecew9swfajvy6jj7wndr1lp7k5od07h4gl4tbuh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpwk_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

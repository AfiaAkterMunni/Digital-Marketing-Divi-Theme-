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
define( 'DB_NAME', 'afiamunn_wp47' );

/** MySQL database username */
define( 'DB_USER', 'afiamunn_wp47' );

/** MySQL database password */
define( 'DB_PASSWORD', ']7G6@L3Sp3' );

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
define( 'AUTH_KEY',         'oqrwfcjnghef5agswfx0tub1fbvzhleu2jkpic84rdioumo7qxw1bokxwqrsfzm4' );
define( 'SECURE_AUTH_KEY',  'hivxkrvhrlxoafzvycc4cgkhwrd4n5xmfdbrl6u0lwd5zodayimyxlt3bpcrwequ' );
define( 'LOGGED_IN_KEY',    'o6fvnbnojzguj212r9hftbjvtbqnhvwd6sj8nkymnsqyu7rzwf0ctjhaw6oxdiw7' );
define( 'NONCE_KEY',        'ifocnv5fb1i0fg6xhhh0ke2y1hl5ultqypw9xnlhjlu1izjw9kihj6ak9bx1bzih' );
define( 'AUTH_SALT',        'lkhnk1gstjfkbuc3ra6coyqti2suzy74kwpazdmodl4roijclv34yjvrbizz8rpo' );
define( 'SECURE_AUTH_SALT', 'vytxfdx71xx2nkn80zsyiht8kcqba4wloblgsfeoyt0atrtugvdlcio4ouq7dmpp' );
define( 'LOGGED_IN_SALT',   'ycbf9fyd8sgcvkanmp5e577hfhdqgvlvw8xlbvqezpjzl5dwrzq52dtv33fmr1rx' );
define( 'NONCE_SALT',       'gevp8jbntjvdb7djwbw836thmtmrtjgrokyk9kgq3yaywgjjysaddl3glhxmfloh' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpf9_';

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

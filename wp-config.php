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
define('DB_NAME', 'kateswor_wp778');

/** MySQL database username */
define('DB_USER', 'kateswor_wp778');

/** MySQL database password */
define('DB_PASSWORD', 'HS4p]y]5Q1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fswzfj7bps2zoglsfhszra44yysbglzs9c14trnehadiz9kzxygkbi8lcp7ukwzf');
define('SECURE_AUTH_KEY',  'ohgg6om0cbcrdauyiezlr6z178fsgketxgodqi8njw0uywvas5wjutqe26spsuf8');
define('LOGGED_IN_KEY',    '262h4ojqopjkajks8ny3u5pg1qxdjutrbrxq1wkpi15eamvqmnbjbfuydkya0iga');
define('NONCE_KEY',        'xfsqamtnjt6esla6qp7hbuqlbdixr02wf4iphvfk1sljsbamnizwvre81xftkidq');
define('AUTH_SALT',        'bsgow4wovkktusstkyxsynblf1wrk4fgxpupecqz5kuvy1ett1wu3i0lw5aqoehn');
define('SECURE_AUTH_SALT', 'hjqqgzrvua1mytguu4je4dqbn3o1ikarpkxhvmpjcebheiiawtny2olob74qfer3');
define('LOGGED_IN_SALT',   'gyaap73eukvqxfgps7nl6czpw88vyvwjhgv0pxjoykpeyfnc35c5uwnwgewqbkba');
define('NONCE_SALT',       'bek4v8n5opvylcyk3wt08iddyxqxdcar5wrwbfmhq9koneinuuizczinudrnbanq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

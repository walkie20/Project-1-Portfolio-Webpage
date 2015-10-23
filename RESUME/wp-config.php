<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'i1042027_wp1');

/** MySQL database username */
define('DB_USER', 'i1042027_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'A~8HR4O#q155[]6');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '3fAysepoJGGveg9fEWDj1xd1bSpmu7uBDdXcjc4uIPi9v5PlPjI7qqfPxJd7BnVN');

define('SECURE_AUTH_KEY',  'a5at6Du7w90IdbGBmzlytmuj7HJWPaYvlX1yMDzE3Voa3RVRZ1GxyNtXLx3saEEn');

define('LOGGED_IN_KEY',    'IyYvDoUaQdnw3awjs3JLBNE8tYm94prijEO9y6cUEsPgrCk4olTpPPs1MhQvqjnC');

define('NONCE_KEY',        'IPpQgwn7IHHmj26NX8X7HdVXLGWQkNmX9987vjfCXWWjPpLOGPmszy0FcVeZRiQG');

define('AUTH_SALT',        'mYxMwFFABKjju7fqdHs54FOBrdNQCluQUZVOLUQH3T0LqZl4kXHj6Kixj1re7lpA');

define('SECURE_AUTH_SALT', 'w2Jo51oGcpcr16v1S5nrpDWxoJxuoPdWLCBZzRXHZxartc6BLilIwlyeuFwRHpiI');

define('LOGGED_IN_SALT',   'AdUB2kKeDNXV0ir5tUWqRE2S051gK0wGPUQSywCL0AL4Mp2cQrNYkSlcPwidgx07');

define('NONCE_SALT',       '2ZMXbybgNDc0RMeQIcPvdGTRSweNzrUoCUuft1eXVswblNb8Wwaqj5iD1x3QQOhF');



/**

 * Other customizations.

 */

define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');



/**

 * Turn off automatic updates since these are managed upstream.

 */

define('AUTOMATIC_UPDATER_DISABLED', true);



/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

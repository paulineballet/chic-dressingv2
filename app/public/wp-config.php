<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'DCjzF1A0sUaJ+g4j1S/Xkq/px8s+ErsUvkPVZvqj5ZqJ8tx+rbaARCLdz6wXU80K//1/H3iXoRaON8JImPtzEA==');
define('SECURE_AUTH_KEY',  'xTU/Ns/si22HVYuN6cpSCjantXM/GluJUqlfcG3LWF3mSdFNJH78q+L8cOll/Jj6ClxscE6YO76EFxlMNbrVhA==');
define('LOGGED_IN_KEY',    '0K1WoZ2aoasU98XgO1c/JGM5mQIS8rtTG89b9PEeJxH15eitb+UFnHMDY++UBa6lBk6d8oOdTeUL4gdg+5DpDg==');
define('NONCE_KEY',        'EPJc8kD0mwuJzLm63dSNXKVf/Ui8YqDlpWBgK+sn/5bwVWQ4M+o8/dYNxjaTgv5zXqErRCldaHNV7iOYuWlOsQ==');
define('AUTH_SALT',        'GXao3drPNbuOyyDMyB4T2ingv/8ylro59ICswbmt+aaXA4u2RB5bIMQ7j4LhudnkJa5T3m9rdon4Xg+8nwZebA==');
define('SECURE_AUTH_SALT', 'D+VbOQ3AzFQauyPDQdFcNv5xTxE3V0axmcEaAnqx2jgX+0M6QMKB3df93X5l86Rtm9wnjoGQU/jMkG5/0O8sJA==');
define('LOGGED_IN_SALT',   'GyvQrzp7XN4VGEOFgBM2yR9YWkoHxfCU/wHKIViem7nm7/ngZgjj5dx/kFEPzmjqSLhZOgNYkk9GT995CkDpOA==');
define('NONCE_SALT',       'B5V1TLnEybgyxZbxDO/XPZ0dX92So16Bt5U0COVUPj16Zi0ZF9B1IS/HM119Jmp7tqUPtXAaPNWcoxbBg0tJtA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

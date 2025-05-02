<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bancoway' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']fe2yj.vnELS&QZs(& lh{^_tj<G;{WGDh>2^]qfY/|75!v2s*HCBrmqZU3R=XGc' );
define( 'SECURE_AUTH_KEY',  '!$gs-0}x+/M!M6BK3FAr[d.Y5:sS3)%k:O)hN6!r<|t+(`#Z G>#bSHZ,!?TI`^E' );
define( 'LOGGED_IN_KEY',    'G#+?o%C&d7=QEtfEn>!Gi*F.?7=aW0>+aR}Scc>(N%8A>#Q< =nG!>ieM#_3L|iO' );
define( 'NONCE_KEY',        'npGmelDl}k5?aVYchY{Br)H}QK|P!z|l{8y$8J% jb1#O<7hNqduVJ0PP7!TDp8O' );
define( 'AUTH_SALT',        ']]<R[E0Valj>XgDE)D1,*fOjjWrHchnO}$E]9PzrR1&W*O/k6BlO[|4Z87F+4;;[' );
define( 'SECURE_AUTH_SALT', 'uggyI-|P+9H4(Q-w;6_or9[19)V~-Id_}N1/}ox,[K;:yJf>v<f,joFaC&}UW&k^' );
define( 'LOGGED_IN_SALT',   'z@:)^ ><uJGaI/y1@LrtW~7f)xA-/t@/[Qu`c`3!&sD2!,s]{x:LX`]M6?/nWKm>' );
define( 'NONCE_SALT',       ']Pm9&xT FE91L.QxNmB>OxjVaB{TdsRvjsZA736R||*>^B-f82Vrj]|#>!{@2FKv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

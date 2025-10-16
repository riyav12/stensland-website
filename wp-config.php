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
define( 'DB_NAME', 'wp-stensland' );

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
define( 'AUTH_KEY',         'ilvs9G+h{=7uteQZWJZ)>|Rmp61M&3`KvxDuWvuTw$~2=|iGwy8VT]=>VWbi!A?c' );
define( 'SECURE_AUTH_KEY',  'PxFpx$H8UQyd^|S{Raz`NVK;3>RZFn9PuOm$6L}s/<O5|w5!2A^dU-IS|Wurkn:N' );
define( 'LOGGED_IN_KEY',    '%]U}N]DQp=!!OFEn53r#Rf}EK68>6R8yR&W]K-i~Tm>[Od5@s_lx:JU^:#fp)U>o' );
define( 'NONCE_KEY',        '~=;|V7`;.Fhhn<-V2]AUH+u1d-+*]7yj%RHxsU;gR+cW=kD4J,Dm`x@HY|B1*HX4' );
define( 'AUTH_SALT',        'P@sO3DBAIQEv-%,F4*7,E#iu)hu>p^jS9f3 iNovG8slnfeI%BA#QN*~!)jtyU_@' );
define( 'SECURE_AUTH_SALT', 'PR;>xKKE&/6`A}o_<,xCseB,hqg*_MQ:F!}1o/x,,`0RX]psP3`B`|vbNT>]vNQU' );
define( 'LOGGED_IN_SALT',   'kP,(-IlM#T?oArI1)Xwzd4szeNa`(N=hE5><$6CMw-!nDWKp^5;Tpwv&%rn$-RW>' );
define( 'NONCE_SALT',       't;23yI<Bq-<s3A@v#sT;BR)! X/(R5P56C6v`sq=,e)8[@gM}N@t3STn_iAQTb$6' );

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

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
define( 'DB_NAME', 'xlijttuv_sneak' );

/** Database username */
define( 'DB_USER', 'xlijttuv_snkusr' );

/** Database password */
define( 'DB_PASSWORD', '1Million2!' );

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
define( 'AUTH_KEY',         'M0[^F+1a+}U0y6z#7Zi>Nb7zE;>bQ&@LB[b.FrS)RuWwS~Ln7w+{DIc3K&APBc(/' );
define( 'SECURE_AUTH_KEY',  'r`VSl)jHx:^xcPP*r*S?GIL #FoGq+*i!/W59ro|_>Zo(6]z6}R)ywQ&.4Ue+#$~' );
define( 'LOGGED_IN_KEY',    'XvMl`3cbfmoYmBE^i5TAgsZT%l.A|P>AP),*n=Y)eeWog^vdthMl:)[wlt6llk-e' );
define( 'NONCE_KEY',        '.fV,LE|ZFvJD>otq:y:oD{T5bWCNnhuqjJ}+__d1X11crP*CZwrkM3sYli9by<kV' );
define( 'AUTH_SALT',        '@!L^wEQ]p.1s3=M|S4[;}PMCTQGsQ*K425WS#l)X)]4HF:s,K.bdl_H6oX`#Rf:$' );
define( 'SECURE_AUTH_SALT', 'hK2L~*wh,FR?A`#LsHgf%c179GQ69WtMHpTC[9V2M;U+Z)M_jk]`X[Y6o,Q}kCB>' );
define( 'LOGGED_IN_SALT',   ')fAzh{-kZ34N7AX[ln,!vV]{>FnPc1t![ia0n9~~#+<l,e1=`]&HTP5t0zXbW)!|' );
define( 'NONCE_SALT',       '!mj(yr%_k y_/}9V`0#TvC!iN#@>W@+qj9jiIt6n%FxJrQZaen$Akl@bLoMrGZzO' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/** Memory Limit */
define('WP_MEMORY_LIMIT', '256M');

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
define( 'DB_NAME', 'exerciceBD' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']SSOpD+]gB=b0My)=XEVN{A+3|ph@{ZB/7R866Q.44ZGjs6Tr%bs69h:P5Vg/A]k' );
define( 'SECURE_AUTH_KEY',  '=k,P:IXo~5z.HzjjBx1K$*MuI1v4p -,Ew98zA/6NNm$R>[[AbQy|;uki-&ikzhj' );
define( 'LOGGED_IN_KEY',    '4ntzeEPM)i1YA5u?{y6tjHJ/|$QX$,lMXxLR.((xx>SS{VnN- )-kyR*,uiq5M&J' );
define( 'NONCE_KEY',        '=dj1`:BlSyJA>m/)TW<HvmFlv^c@h_% U_[h0<@~#py#]v;D{+`97T;;o%#3|1=X' );
define( 'AUTH_SALT',        ' b^XmE8)fShh@  xL=k2>qp+r}<5!X`PNAvPZS|5s@Z-?fkN*0 f0W.wWTT9~9!k' );
define( 'SECURE_AUTH_SALT', 'P;O a WIuP^^zfn!ZV(_qMH^>qm&6+3Vo!tD,X}&Rl.n%)K$Dnk*BQ/i7&_dfO3<' );
define( 'LOGGED_IN_SALT',   'YAfMg;ccZB~!I$h!h`5{[Q}WEn;/m8QooPd:SAxxsR&O&u!sj3P-/w1~hS}_fR]s' );
define( 'NONCE_SALT',       'Ww{h#ne`Wuz>fn<b~Ij*wq299wMtB8S)S{/FBYZRU17#U:!v9q##OO]TMyzuH3./' );

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

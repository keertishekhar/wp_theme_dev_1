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
define( 'DB_NAME', 'wp_theme_dev_1' );

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
define( 'AUTH_KEY',         'zp|8f.,CN(~hiydso`MfKxipDsgeRR@VHsd!%J$:%080wRKdM>mWdp/Oz~e`ZH8d' );
define( 'SECURE_AUTH_KEY',  '-!I0UsR0LI2SBht8y3Y{b)=vB{|R(De]~U(.,zLlu4o:^;`m~(fco!zwWa?R0v,A' );
define( 'LOGGED_IN_KEY',    '9L(ebNYMp7CWN?k;r}E%&x<3#^mQiL)Bi?^jz+Fj9[6]f+5B.}Q_Ia[Ori<8KU c' );
define( 'NONCE_KEY',        'k@vPmyLQ/O::N$(9Wpp=h[RXCC:D?E [<m*9k(n(RRe{&w=/={/8n@$ct>$F)pGf' );
define( 'AUTH_SALT',        '}|)|+t$|wB3P3sd%JZ)4gctNANhKY}{]Hs~-GA^j1ae;8vZ}G4L=!s8eL< !f!eq' );
define( 'SECURE_AUTH_SALT', '1qFcpi%nx}vB+Z4r/_lwp)9I0ypX9&aY.?o?et9<Z8ESNyU~YbJD_96a$2n=sy{p' );
define( 'LOGGED_IN_SALT',   '@LwGan[UeLNc,CZ4;CEzhKUMRo_dlxpH9;[gPozD{[5Y4#3.9t-}>hTqks}Zxo/s' );
define( 'NONCE_SALT',       '%CV+ +t8-GSR07:)+pJ@9!6GG.R3hqmOHR2jW4HKEmiW[GZ?biIIRZ`P>2H4C(DH' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

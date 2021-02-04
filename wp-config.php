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
define( 'DB_NAME', 'masairrtech' );

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
define( 'AUTH_KEY',         'V_xS3hIMtyMR}+fi/+&`{)mpFW[^IC,?Q>)046(:^xu/[kxg 1W/$~bZvCc6m*^ ' );
define( 'SECURE_AUTH_KEY',  'YP`UiDSPMcFnf5mCo`Cft(X<Ghl/Na!Y?m]G-!.e.7@B#?Q8gR,?w/1#4%1IrP=y' );
define( 'LOGGED_IN_KEY',    'Ts{Rcm^A5vm4o)NGZi_W]T-E@7-%1_sa.FdM{3@wbk;QD5jMbo%4_|.GSgb&oZTJ' );
define( 'NONCE_KEY',        'JP:SsTQH?y]i9Tn?07c}T(s/lwV;EVC}Q%[+w}e!}7JQ#Zl`~w}K 46L8JTmM?.d' );
define( 'AUTH_SALT',        'fT]h6W8N6?UC?zQZ,E02M:#yIx,<+[(=mY;bu]K=3Y>rk}=:lLEj_1YVL(6Nc#u{' );
define( 'SECURE_AUTH_SALT', 'Dw#6]Z$GBp*upjI<I+J1lG6/K9p0Yr0^yX-d=}cq8eT.i!D|kmG@cE4C=Csu)y3p' );
define( 'LOGGED_IN_SALT',   'X3i:8Is-Var!JLiG[lq6$zC1S_Lmp1gEF+x-zZ;56PMRq!&C>q!dz@zVA5~<~iVL' );
define( 'NONCE_SALT',       ')m&bC$yisYGClpt)jL2*T}{l@VO#VF30d}D!vO<}3_xCWz9lMU1Ji-CaS8I5KN>8' );

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

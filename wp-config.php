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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'regulartestbd' );

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
define( 'AUTH_KEY',         ' LdBjNEEOzZIg_:%[=wSM~;K6sYCi=pF1zG/l6<;ZHp- `c0(.6YDJs~M52Ae?43' );
define( 'SECURE_AUTH_KEY',  'P&c[iIP<<Qlp:w+`r$2WEM<E8(qU>%%FR~eXQ`1sb4o}Q.qCC(Zg5h. +-KU 3lM' );
define( 'LOGGED_IN_KEY',    'Z_|Gsp( jbXl+rOvT9(C=+1Q[XWDHrH<?2,5eLsLhQ@BkLT%z$r]vYSYd*b?c%Z4' );
define( 'NONCE_KEY',        '4-BN/cDlQjpL:-Xx_FM..A+g)M iMd3q_PiY:wqN5o=4(hc[HL~rH^~Im$H&:a]d' );
define( 'AUTH_SALT',        'jh`]4C#J/:ub]>m,:q7X`&qv!?p$IMYo[QXhuntbM2!#1|vqsMGuP1} engyXP49' );
define( 'SECURE_AUTH_SALT', 'j,A6AvIm!g0afpgaVp:M~LM@k<]7a:WB+re shYQGCX!l_?6 e{!&2(q^d-w3&a9' );
define( 'LOGGED_IN_SALT',   '?sv(|8]#jX>qk*Lqpv]Je}f,J(H,QZBX!5<VFi~={<g?_@2#u4B&[SE(@QEG]C+6' );
define( 'NONCE_SALT',       ')(jd~]YaCTpM!Zr6aoQ2&<84s]Mt4%Q6~BC:(07)--^4)$LF{Q$jzP j&_Z:wX$f' );

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

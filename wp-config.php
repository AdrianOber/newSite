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
define( 'DB_NAME', 'newdb' );

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
define( 'AUTH_KEY',         ']=5y*z-w~ay{VVB52A?4apM;)W[<o)b-rPpkb(edg;FV=Ws<`Cq_^TH#y!9Qy+:2' );
define( 'SECURE_AUTH_KEY',  '8K8yP?GmuSh(?n*8*25[xSZ~NX={Y{u81_z4@!]#3oX.GY/>.Kp[=y@,,=|}8s2.' );
define( 'LOGGED_IN_KEY',    'xZIe)5b!7&wAhqcn(xS@e5.:j=d_2g}|IK9<gp5}m({~{^7Qpz iq:gmFv{~^r_-' );
define( 'NONCE_KEY',        'ZXQ$tT+6[QEgo?R7n&cabCR*zKc32p`*5J59G&(<.H~6@g/=q&hk2d0Shf{r~ KN' );
define( 'AUTH_SALT',        '#Y;{J8Ee`CLS>Tn>D~Q}oA>l@E*isCKQpy1gbxB_H+u6{+B}70]87}PdY9k/KaJd' );
define( 'SECURE_AUTH_SALT', '{e3N&Mr3E1)e99,6RJvFmuRn5/Gdv? /@bga2U8m,;(LIDu*[%*l2uKnvn2-wEWU' );
define( 'LOGGED_IN_SALT',   'm6-Jap_m=52?:U&Eb4yg5C<m!da@N0T@f1{>jZtM#q}kbl+]dxG`:^|R8@d:Tv/r' );
define( 'NONCE_SALT',       'F:R}Y-X=UW6n~#2loY+3REB=xN2#W9423pq-Bh45%4/n9]%p()5Rce.3)cZ2+@=P' );

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

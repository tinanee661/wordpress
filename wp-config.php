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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'gbZ+A}/(z~lAj1~Q/m<;+(b[o79hE4}HMMW}/)hQ.yZNOhY{9*7rCys+RW@L/w9J' );
define( 'SECURE_AUTH_KEY',  '-9]$Xb!Gs9F#ZM%iwY7aOv98-?:G9xW|cjKD2I/jL]7**r?m-dz/@c.8^h1g$A9/' );
define( 'LOGGED_IN_KEY',    'Zl7*kboP:-i6l~hYbvW,#kkT:5MK+K)~(w:,%@?pDq338WO|]ZwZQcz6;a~R<UQL' );
define( 'NONCE_KEY',        'ikAFX(yFJ2<)-:a2 )Zl%U:Lup!.)FNCF.wbRlW#aNZe -Fwrs(D|1(7tr/{9-&*' );
define( 'AUTH_SALT',        ' 1(Z9n}kV|ne;tCdmY!*,(*<Qf[]{#PY3lD2PUz%p1X[!v4RlcA5dF#-@xHUC ]V' );
define( 'SECURE_AUTH_SALT', '-+ctl][rm*x)>uKc~/o)UkU+SB`M>!Mcfo@2Ku%OL5Cc<H79:f8G!4w*tR=Q[>#P' );
define( 'LOGGED_IN_SALT',   '[_9r=0M;GRb|zzqAn6F$/E({DS!Wiqu,*MV`/.mkRpY^)}mk`^QPvdGt<iHg60qk' );
define( 'NONCE_SALT',       'gPYE>#fUmv;M:OqJ;^.^=I<f&9HAF17.c:{+Nqr SBxpH8fOXM*7kQ2UM]D_/xJI' );

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

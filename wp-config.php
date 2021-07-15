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
define( 'DB_NAME', 'db_qudspediaid' );

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
define( 'AUTH_KEY',         '/}](MI/t{V]A,$nt|v !U?${lgL^qaWi.a0YHSTb32Sx2d8!Me:acyfcq(*N;O|Y' );
define( 'SECURE_AUTH_KEY',  '27Xx TozynIPt4RIaX_v(o(e&O?iMSCfSVMlpBrA,[WFLhq%/z9E_D~r6oBq8+Z]' );
define( 'LOGGED_IN_KEY',    '^1<zV^6.zZt@!Y9er%PgU}eLd7^M_74#f@kbuY1m+`5)lxhCb,U]l:AZtA!}.p{y' );
define( 'NONCE_KEY',        'MO#7q-3z6x{.I}Gw_AeO@^@{)(!|,I(o:x?nTg*)<XlalzxR2/}/_@C{T %5cGdZ' );
define( 'AUTH_SALT',        'y}( ^HiX#NM{b46IB{_/;m6H9k22Ml`2AlmK8Zm@Grv<-J&)5R-Jjew5t$v{8-)<' );
define( 'SECURE_AUTH_SALT', 'fUa{X8M=W^c9cY^*?:*le`</0HA`UC8rUv^2A;K[k<zHrO^$=a{q2/fZi?5-Op4a' );
define( 'LOGGED_IN_SALT',   '^bN0}H51h}>Vl?vxg%)1$1+Ran@|~uhz$N2?]g>1^6;=j9qq}E<=~;?nJe`EL`F ' );
define( 'NONCE_SALT',       'AaLbE{?qYru-%o)Z}T;Y4(|l<r)1WUo]NuH8y;R3%BZuqA36w}UjPIR-9g~N8yL5' );

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

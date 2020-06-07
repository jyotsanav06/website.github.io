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
define( 'DB_NAME', 'try' );

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
define( 'AUTH_KEY',         'aIXKs1wMm~24RD,8/pAc51[{m^z`xzY[D*];hChP14C*Z]<%Pc_I[A.(!s^d1CDf' );
define( 'SECURE_AUTH_KEY',  'eBf+&  |PTYi}Y31oN35&+ik.I;?]iTLSCXs^~w]7.|`F/.z<N.BDE=#+Jinxn?$' );
define( 'LOGGED_IN_KEY',    'd@D2w<LnHLlTP94`u#(q Y2G&fs,<geG`^y1)BPN]dw^r~Y?FvhlQz/%K[!Spaj;' );
define( 'NONCE_KEY',        '+J#VeJ~qH[Sr)Fcv}jHEIY<{ xkC:hAOtY6Kz$.~OX^?-#*,z)dwefM!|pVg0piC' );
define( 'AUTH_SALT',        'U CFy|I0-7:+UC(Z7kBy6}0X+$NiU~H^8`dA Oy:2X~CId9&k:QV2%^q2O3d-yrh' );
define( 'SECURE_AUTH_SALT', 'Yiq?t!9tNn7`GS+?]<Ce7Go5~z)t5:c9eO`.yK<PQG69]<_bH3nA=]<orm}Lnw?b' );
define( 'LOGGED_IN_SALT',   'qvJ`(BkmG0,u~JW{S#kfx7/a;6O$GntS1SiPJm?QUJBZXqoZ07g[ezlHE5OGXYiP' );
define( 'NONCE_SALT',       'kJ,apY[r$PYJxmW9&mtX%ju$Zt !~[`%^f^Dr=.A:cInlC{}jS.RDT}Zg# R wBp' );

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

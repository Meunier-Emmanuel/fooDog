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
define( 'DB_NAME', 'foodog' );

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
define( 'AUTH_KEY',         '=596HbW2c?51+T7t%RK<L 3Ad]ppB`QstX4ch3O*XSM*4VHe7lb?9Ex/+{5=AXp ' );
define( 'SECURE_AUTH_KEY',  'P:U9QRDEa!A&*wqBzeN>C8uA_i8 `~@){Ro,~w,k(QM4Z64{K9Jblf^|#!h(wG G' );
define( 'LOGGED_IN_KEY',    '>fAaNr^h,%1!~L Dpok`O*PN>#vV C2*`r~+d6<hsUxlSeiy8:r1Ee2[m&[Op;^.' );
define( 'NONCE_KEY',        'cwoJ6HIZK)+q38#:M$DF9]J;bV:g)x*QTyD{|,AX[?H2lyI /8H]yyz,hE)1}H,5' );
define( 'AUTH_SALT',        '=LV+hg.on1^j%M*wCk{:P3t%Y|p$X*UQnm^vVdcpMlK+@DdD0=#`N*5dlVU,*NMk' );
define( 'SECURE_AUTH_SALT', '<L`Y0vJq>I~pQ)RN=&aHJFnKEF$`9?D0D0.Iq}G7zcW|ITBpgE,<tD$F#Iipi[ak' );
define( 'LOGGED_IN_SALT',   'sW EQ{X;+s9I:(c8GS(!D_i!xjR(zvgb|p:I2y$_Dt9Y>`Bq}P3<jx>Kc 7,Nks$' );
define( 'NONCE_SALT',       '|^U0t/>w+/&SRS&<rzj1DHK=iL~@R$v2M$eAws3RriS<(wgjnOWc:k/B7?;M*uX`' );

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

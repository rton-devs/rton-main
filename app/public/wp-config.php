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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'J)b@4@DO]{?>MO*/  3(trxWTe#(^VByJ=>[52:Zpjs)Eyp%tyo5k8MI:F]Kkn.e' );
define( 'SECURE_AUTH_KEY',   '&3_v3+qM|*g-]SPN!.^{I!$pT.CinMN_iyuTR`B{>*++r:Bu.LKmii(sk]gwE*+E' );
define( 'LOGGED_IN_KEY',     '%dUZ+WvFK[zJRAU4$A1y#A?D/k}#e-5z}RxkEY8C1_z]m<Xop+4iT/Xsy*,N!04(' );
define( 'NONCE_KEY',         'E)Lzn#:|o_O_n,pIM:nt^KfS%VP)dY6ovm#+pnFB#$Ekw_NU/A+6$iPT=K!0^?p6' );
define( 'AUTH_SALT',         'qXAM+iSz0w7NlJ:Q& 4D1Y9@Xq(onUTN3$da!yqC1y?j,CEV#~wAbsqfdK!Y-{wu' );
define( 'SECURE_AUTH_SALT',  'wHPBSD;bq3dsQ0TV,dRSS)/<3Ku6CIt5=0u4,Qpb8aX%qN5)!j6htGU;ZgN~zQ_x' );
define( 'LOGGED_IN_SALT',    'u%bOsf%B)Gy}94A5V6w XQ3%?=4]GDleO/+WvmfY6$af0Sjs8N+_I8JFZQ8GXpvZ' );
define( 'NONCE_SALT',        'Tm0f6sLX}8)RR;6]HI4JkJpq]DX^5v-dQ]>rR%]Uy_Z]gQ+7g2(8iRH~fWJ9jElC' );
define( 'WP_CACHE_KEY_SALT', 'e-N^`}4C+u2Cz=q$3,zQ8f{t>gLb6I{>KC .@<5((`f1@${ZKe7<A!%E*Yfp@sZ~' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

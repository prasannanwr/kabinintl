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
define( 'DB_NAME', 'kk_international' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '-LsbR%VO@~TE/;5$j*ke-/d]zv3%(Daaqbzjh/E<),s+3nur%jKf%hgPj<waNNa;' );
define( 'SECURE_AUTH_KEY',  'kKB2x&/TWs82-(84438!bn6958KyR$7AxO_LYtjbKb ])J9T!zF:V#(^$Omj@#2j' );
define( 'LOGGED_IN_KEY',    'MMB {rNrEZcXHVE~bM3c$kqxy$2;hP_nnEii^<MzV[83)jrza@#JJ#^yr0:@fARu' );
define( 'NONCE_KEY',        'C5Fhy${rr6`CVLacN~O=U`5~o/|u9PV*tod2+0m=QO%sfb5I2g-vP+yEwV8{39ZO' );
define( 'AUTH_SALT',        'cQ?7?E@l@O1harJ1p,)U?671_U7-8W)iS0V6xMp-Xfk*Q9ndGi2au~z1xKbk4&;o' );
define( 'SECURE_AUTH_SALT', 'a[>t0iC$BK)JuUdLlq9<>nz35=KY){<Ob:o7lOKL&[rAd2*Rhd`*cUu>dH!5@%H;' );
define( 'LOGGED_IN_SALT',   'qv91HFa?XZ5u?YW=.igc}s-g$mA$FK55[bT#6N`tF!@s~J^wC@`Dzl*mFL._Y)@N' );
define( 'NONCE_SALT',       'hE~|B}#J>tYRoSEG2RL&X[Rpi?,?uhdh7SeV/Yv3e,Q5caYtnc/|KD2<Pi4,9G*z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'np_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

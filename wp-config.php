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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dcaedu' );

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
define( 'AUTH_KEY',         ',VTG&6oJq%m.dCpL|)aBkvg#hC40g_J7kTq=_sHEhrUeRRa-xhzXH=M]?`Q)4?D,' );
define( 'SECURE_AUTH_KEY',  'b=2dPX1r=(,VGd9!)oplmV|lc7]@XGw4DOg>k=Y{b_M$Nno70+5M`j^iL!),e2is' );
define( 'LOGGED_IN_KEY',    'L&+!aTklSrQ 9qT<kI3_.>^om` pdxZG}SheGD%<=SReOB/Qw&f5,p;?;U^kyPsc' );
define( 'NONCE_KEY',        'FZMHn4Y6Lp7={QJbI/i70F46^@IhUi32)4>2zufsUE)!mIfNdFVzAoVCPxOA%Gub' );
define( 'AUTH_SALT',        'Hl#a%HI@vv^Gr{653e=1GG[&H~G$Hf9=EX8ez2$ZWV!EqrHA7;V-TY~g)`~ZvOCq' );
define( 'SECURE_AUTH_SALT', ' >%A$],%c:k:z8Uvn;byJuT)nbdi@Jx}~juy&VjPAXH>Fxzm=9;QaM6detibHs=R' );
define( 'LOGGED_IN_SALT',   'S!3g3g}%=G>pPLXR=E7w_`zA/-J8N[eF+d[)K25pR>g-Li{QXa>RLQ,ZMMi}n-jB' );
define( 'NONCE_SALT',       '7#Z7zGPD>=YqTz17JBXu{sDoni6&;>(;_JQ]_iuynC?ij.!$ h}{8o{f_5.5{pn>' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

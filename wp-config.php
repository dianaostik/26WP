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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testas' );

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
define( 'AUTH_KEY',         'C{; ylfG<m%El>YuDO0Wq$5<-!^CQkIFZuKE(-$ijJZNzXhah@86Z<aY]g<N|A}E' );
define( 'SECURE_AUTH_KEY',  '@o82S=izCUEZ=Y,hpIfcFKytOZC|qsKo16?eYZ<!vQc>+)whVRVjL0K1gAqQ1+!-' );
define( 'LOGGED_IN_KEY',    ';~l`Mdr eWL1HuHDHMB9~iCmbJ~lRkv}y!!NZ.QrfoV~(2(=&jz]lV!Nt?yu^Dj1' );
define( 'NONCE_KEY',        'd3NP9mK/RQmWtzjHOn~yP*7ipUEgS!=;wzo@62vHT48}jfn.Z&2~U_g>Uk2Zve?_' );
define( 'AUTH_SALT',        'gogwOAUW%d(w]&?kYS~S?U#a8ia/d*?gigaQaIyN@&..FC_1M:AP j6TBBD!U0/ ' );
define( 'SECURE_AUTH_SALT', '9D`cGp1[ 5,q:,57:oKQqbFJ(AV9] s&I@Q{M(q4{ J5ciz(;E39kC$=3BALImuj' );
define( 'LOGGED_IN_SALT',   '),gGI@Uy].Zv^a>X@z:GC%Q(oH8UMBGg0;d,k3p{~;]Sy/c9yNY5):Cv.R7cZ:=C' );
define( 'NONCE_SALT',       '`X>u)R(fKrNg%$K$Y[cz8eIxgI.-}?3JO1u%!moh[*hSm<s&Fk+W3F />.IyRS>C' );

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

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
define( 'DB_NAME', 'abdulrahmanaltouiri' );

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
define( 'AUTH_KEY',         'O9D-9i #R*9(DW|Q{)DB*C||.{m {aNOlWl<_jP.MUM9zJzqZUAS_qjS8L}zxV^H' );
define( 'SECURE_AUTH_KEY',  'fI`)D%:1qQLj@d&@ceW#a0;_^vG.}0g|+Wd8|~NhaG4K3On1FJDxyzrZ=+u. @4W' );
define( 'LOGGED_IN_KEY',    'n>yas(4XG%Nw*vNuu8QotGQj>9e[M6ggg0!mxu^tS_I~,^{tKcZ7J#5@QNk1/]Cy' );
define( 'NONCE_KEY',        't?64yE[<%kIJm-!JvJO[@U#-?VMFJa1$rJe hA.D`Elh3&-jxERGvt{< OWtdEBj' );
define( 'AUTH_SALT',        'oV-OLQ9,1(`>lqk;YQI~j[uL*C*hf?Nfb-1TkGsicC8$) dOBn@ozw88B<Y}d,[C' );
define( 'SECURE_AUTH_SALT', ';O+^:[k=fH3BgY`-^1e}9:FZE6jU__Z{*GIZ7n6:1xq@B~tNv#Y#UM.P`[he{*~!' );
define( 'LOGGED_IN_SALT',   '2yq9^1m+##LU%}aw:c.M|Xh:hsk]xOXuJ0z>,w]ga>(0eUcvDjFTm@sTz~{Jg6tM' );
define( 'NONCE_SALT',       '_A4hM?7+E9x]%c+@V3JyV+<C-u/SE}:TqUY~?)|Vq*0Xj40Ib`hlpq!oa3yRh++Z' );

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

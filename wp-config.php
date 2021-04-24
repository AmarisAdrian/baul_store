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
define( 'DB_NAME', 'baul_ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'p6(2mMgB&r=#aDD6ADONe}72S1Wrqef4$@;/ o6-UHYo5o/Wn;,2%SwJ[JF{2b=L' );
define( 'SECURE_AUTH_KEY',  'TE:$)T_jcYnQn4i5e&^Hr[Ah.N5unoF=zzLz.KU= j{PI;]HED/>=%.neLwS<eTb' );
define( 'LOGGED_IN_KEY',    'N~7|4%_(Na=<E29~%0x(AS(+p:|}1tYNCQ:,wBLJ<!RS*A8.kP*C=m:3.ZNKc[B<' );
define( 'NONCE_KEY',        '{bg@sg5+GaGBt^{%UFP7GZ]S#3m=e6_>/9E;DKuQCN=9e!n`#cB{Kh;3/k~zWu,L' );
define( 'AUTH_SALT',        'y2%vz[GB%!t{DmNP5u0U[ErFUf}Zl!=,EW<H7+C(qhYSWZgG~#2&~L;AnYo|q+i]' );
define( 'SECURE_AUTH_SALT', 'aak.Y!M>Mk>Z609))MpB4P6GO11 %h,&iH23gHDD}`3UkH=2I]QA~w#>P>.NRoM7' );
define( 'LOGGED_IN_SALT',   '+I(&&m<3uW`~SKM!cp`0pyAZce!,xfo~W%Ojk[/&ovC9k}m=YY`rgJ}58oqWys}u' );
define( 'NONCE_SALT',       'nP`~x%q+7D_<o*vS7s.8O$j:F~[s:Nb2jKMlu{1mz$%#hDR5B9kdm9}=|:$205QW' );

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


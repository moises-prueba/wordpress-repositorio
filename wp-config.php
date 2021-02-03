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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         'nY.?T{(&#0k606To-sP+NEHJVH|=  ZQM%1b?aPXLsCFn!O%g1[JLz&dV>?>D]-*' );
define( 'SECURE_AUTH_KEY',  ';P&c#]oN>M4(MycDsv1Q5$y1C|ez=&V>^WBQ0xruqvVgaBaB96`M=wYS}]k(e3R ' );
define( 'LOGGED_IN_KEY',    'sW59ad2040&99}Y}=#`H%O%_/Hr1L1%>x<Df{ll*]?.6j`[jY]w[5es>-8jL-.>4' );
define( 'NONCE_KEY',        'Q.H0/T|<:p[x,}~tgubzK.4;w|aT)HJs]xG#>D%*ubWZA*SAfgA!{tWUn0R!TJa4' );
define( 'AUTH_SALT',        '<|mo(SvI]!=J-%RB}^Xe&{V+Z~z^=OL@w.Z&~,>.4wa@0OD$^NGQ%*K9a1Wd,=th' );
define( 'SECURE_AUTH_SALT', 'vK#$>a.[pcp7>>%/Ju$=t4TUIxl-&a9z!fxNM@QHy0+J&3b::uQ;45@qRpvyv`db' );
define( 'LOGGED_IN_SALT',   'xr?n>1={`VYz+,cr!Ad!XnlkT6)2<79gM5IGnZ1EL]B)Kou-*S-B5RdPm9c^6Un4' );
define( 'NONCE_SALT',       '5KB&HX:wnpKpj+6! 8bJ7$YhM&GyQi`1$1$i{V0iHPq#4!wfw5iWt58Or*N/8Y4W' );

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

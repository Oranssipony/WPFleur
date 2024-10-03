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
define( 'AUTH_KEY',          'E8n>`6W3S^YGN9QfOq7fu28,3X^FDm)HnQVlaN5h7*B4GB}jc)^X=`YD=7ZG#tH)' );
define( 'SECURE_AUTH_KEY',   'B[W;Y]FA/6`hbfW5#Bo5d$QaeZ4IFQqDX0a|$;H_E89K^vc6jMa&r-OL3EG-w3v}' );
define( 'LOGGED_IN_KEY',     '7g?Kc,/X8qIjMs][.]8Wg~Mb<]qq}>Q&{8{.gmS^Msv0u&AF/iI0g3pKLY =B`*Z' );
define( 'NONCE_KEY',         '_+H0;+VYrp5?C!!jkMGG(3~ev7^QE=vR^o;i[t{]xMvQ@=]kZz=~ukcMvr/==R41' );
define( 'AUTH_SALT',         '?*a9^t:Odi`n(z?~Zeq[q hS^ GS}jWW^r&kaGxJ=gBl2jTn3:t7j3 CTsF <}Zi' );
define( 'SECURE_AUTH_SALT',  'b1cnotsn:Q,,IkYfVydUd@5SY<u0}siU}{trIrb8nd(!g(#}J(ED%zVOH>V}QnO>' );
define( 'LOGGED_IN_SALT',    '$D^?)hv`qRbwcEF(l#:Cb+.!r>QDfYQKSym>r#1RD+Yl[HDdQuJz+G7kpo8bApw%' );
define( 'NONCE_SALT',        'a6L<52Mb!:.ZX<>-MU&CgmuMQi2)7a4-`vz[[)(7b/#1XT<:VFAb}[|6&FNUb~Ng' );
define( 'WP_CACHE_KEY_SALT', ']<baWwx0(z]tT}So}i.nucM9,f_Fq~Bj&a`Q8JeD[:RR]pMihq:5?<z>wCj4Jr.O' );


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

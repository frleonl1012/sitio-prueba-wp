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
define( 'DB_NAME', 'bd-sitio-prueba-wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3308' );

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
define( 'AUTH_KEY',         't8KZtpLQ6rsRaSBOHHQ^APt16yin%4T*|#mm$f1Wi_5+qN%HJe>pGDR-;Bx8uOFj' );
define( 'SECURE_AUTH_KEY',  'Kq-dl`F8MBMUh4VsQ(;2{7;VZu/;/V=lG1J}1D8+jCX:w+p;]*%JJi~_ATvW$z2W' );
define( 'LOGGED_IN_KEY',    ';azw~k1tX_9lQOh/0-YDXbR:S9HZl1$j$0_;vv}7-y,{Wat{?aSfE?jgjuUL_d-K' );
define( 'NONCE_KEY',        '%P-rF}kG+;}S1IZX-B=o&LBjRxa`lRr-DZiwFa=_-%5i}>;mJlSu,<W=17!>`/SH' );
define( 'AUTH_SALT',        'K 6s~d1:itSmVdVH^/<jkQUck%9z=53u49(9?>L #Rjw-e.J)sE,-$YlVv?E@:~2' );
define( 'SECURE_AUTH_SALT', '${Hoybu:AI}fU`>c,m11X7B!5(2kcCPr8c &G7GLzGQ3U[E/r>u;xVU$Q*l jaj1' );
define( 'LOGGED_IN_SALT',   'SA`TP]+IyT<5;*#6#qo^V@uAX|q+9-7u6Ld =88<XAzMZ/0y9?1RH9)i=V1BnqlQ' );
define( 'NONCE_SALT',       'ip/B&ke*oEN>NbfA/ZZvb1.hxNGy_##I&AiBc)AhNw-v8SBe%%u}Zjb~|.p&?|{G' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

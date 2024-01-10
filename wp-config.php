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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'medmaterx_db' );

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
define( 'AUTH_KEY',         '](~Vu@J1pI+4orIxbf92}UmDx-9$QA3iGuRO{ F3%FnL#USq<3|^CB{eM3 kj<]S' );
define( 'SECURE_AUTH_KEY',  'wInumFs9@ceGi[u_VESZ0~XdO:47f%YioAU7&;_1mD5T+dAvnKNc2?I#Iwa.s /9' );
define( 'LOGGED_IN_KEY',    'd4#b{_<WT1H-R[hug,)I>brL4%+)Pg]2D2}Z=IYn^F<ZOoa%Dd.Lsg1`0&JKkEL(' );
define( 'NONCE_KEY',        'fwk|arQE+tgRn_{!6CdL#$<D%^,rQ)X,!4o/^$r#LBqy4,LN/|z5.PQuEW4c;-PN' );
define( 'AUTH_SALT',        'le iH~7@$r`Zu:<}G]_CP?gpY5i5uW>p>9Va,~4lj86eJS@/(_f$e-VY1gA/7LC`' );
define( 'SECURE_AUTH_SALT', ')%u6c?Qs/MZ#aSn]fU5cl:NY?jM9iKqD$>-m2]+^0T2[GTev~Lr8s]<ddeial7ia' );
define( 'LOGGED_IN_SALT',   '/BRx~nTm9b6Ryb]?_2N#oh829lrt,T<C/f!-dnAD;JZ1z~tX!xvm3a;ZmqBxNkDP' );
define( 'NONCE_SALT',       'RSbgUz!:{do{;iiG8d:}HGJ?|!vtZ-Dy6yetfu|8U, mpt0C{~0DgWf(uE-V8_Yz' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

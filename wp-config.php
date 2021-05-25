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
define( 'DB_NAME', 'IG_latvianature' );

/** MySQL database username */
define( 'DB_USER', 'IG_latvianature' );

/** MySQL database password */
define( 'DB_PASSWORD', '9zrWgzXwU8%9Z8yx' );

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
define( 'AUTH_KEY',         'E?4aEMv/+&;8znkSi{>-qY~eut4v&5jL]#i[-2tJGlG.xAGYN)WnenAGgk%KFZch' );
define( 'SECURE_AUTH_KEY',  '#k*@EOM)?q7kStH)^vR,9G?7>|VHxxTW)WY|*0-Zh;=+hHtQqryb:5Ma].N@irFC' );
define( 'LOGGED_IN_KEY',    'Ixr,-Q1IpMW^-K4{|sg2i{8fnN}GU2Yo;]RVT<nE_9R 5RmZ#rt67~Xevi/S2krP' );
define( 'NONCE_KEY',        'Pur^g4(D1>/=BQH6@|XPeh+)nI`:@m#!Gh%6@Z&`h2{NaW3FMJXEY,]Y~^&FgJ-.' );
define( 'AUTH_SALT',        'N%W6/2:}=:vd&?+:Xsyx z.DZpwXTEZ-U7>dlO*PGKXo8o3JKsUr;c}bAp#.s@j-' );
define( 'SECURE_AUTH_SALT', '(K)lwgbd`s?M_+^Bu9M]|J1`}5 UL)gbe,^z( 2Mtkv]4bjqZ@2 Sy=8, ?#JH}1' );
define( 'LOGGED_IN_SALT',   'u^e*S:OW4)#~)CC&bxK,mF=HXHo(f[-`Ln=~lG=1j:+5/))Pr^<3ohone|5Vr>&K' );
define( 'NONCE_SALT',       'Nks<+HaAt/y!<]M^h@A{d?3%fqR(k!d:(#]7tw/G}bl44*(D{_q~UKm|29t7/ ?(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hi7ikh6_';

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
define( 'WP_MEMORY_LIMIT', '128M' );
//define ('WPLANG', 'lv_LV');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
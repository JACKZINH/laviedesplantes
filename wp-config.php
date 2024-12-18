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
define( 'DB_NAME', 'la_vie_des_plantes' );

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
define( 'AUTH_KEY',         'DZ,yIxl}OLf6{r<XoIZA|,55[m);Zi$t`-{{SFAP%7Aw?7cv/.|Qa(VF5!L}Zy_r' );
define( 'SECURE_AUTH_KEY',  'd`(YpafZJvWFyu %4I+d2^ia[]9Oo2Y^E9|Sf_eZzp316kVxzGPRH|{];%exiJR.' );
define( 'LOGGED_IN_KEY',    'y@Fj(jq=XA|{ ?VxlE*fDJGdin=`psz(75T71hCm7m/*ZJWHI8Z6&!A//6kLt6M(' );
define( 'NONCE_KEY',        'Wy[?[8b@&l7yHSG$.Q&{`})[gAx8td_j@g*4NP9>Yzj/qoy-y!YXyss.g!6r^mnb' );
define( 'AUTH_SALT',        'K5PJ+D34z~b3|azny|V.]XccoU;AY3_ZilSN)qTJ<^dGyQ%TU](Y$NZ:cnLbQM/K' );
define( 'SECURE_AUTH_SALT', 'eR21tQj@k/p~3.y,!%~g<!&G:7y6d2D3$jib=O^/@zm9f;:s&f?zQNd) >+~cj<$' );
define( 'LOGGED_IN_SALT',   ';5xNtrb(EoEKD%y2tG)/o}(;JNr!J48D1V7d5$8%@IIiz?/=fA6uvE;smk_JS@;p' );
define( 'NONCE_SALT',       'q+{{Blmj(OM,.2dR+ Dup0Y)~tVu;LuPEzsP6gmytL<[z1Nq?YzEOF:utEOi2!Me' );

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
$table_prefix = 'mp_';

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

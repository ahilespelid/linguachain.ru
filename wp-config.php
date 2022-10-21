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
define( 'DB_NAME', 'u1802652_linguachain' );

/** Database username */
define( 'DB_USER', 'u1802652_ahi' );

/** Database password */
define( 'DB_PASSWORD', 'qP4-W9x-JnQ-4Qc' );

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
define( 'AUTH_KEY',         'e_^`>6^WH6v5W^b8Sk0sY(M?)U-L @C+aishK=UICC9}FVh&pG:#V0+x=y{vcWbH' );
define( 'SECURE_AUTH_KEY',  '<.c~~yb$lb~:L92?h$5z?8X2*LZ>*<l8*bi5S191Ro|,ejBZ,CtVaho&}ZE+#Dod' );
define( 'LOGGED_IN_KEY',    '}VwDTa;zIy)Mw-5.Cv~{WX*m|90O3-L!*td=%OE~TrF:VI_#_FH^8pIjDmi{s!86' );
define( 'NONCE_KEY',        '=,h#)^n`Us9>:R;:sxzc>f*~s+88?zP+g7sNtZz]=AT#$}8*356#v8`|DLQ8G|A4' );
define( 'AUTH_SALT',        '`s<`%.LDMi?*&+9ln+r.4~w^_m=sn,d$jq%MWlqh~AY3FUKNqK/~ED,h~4iy/l~q' );
define( 'SECURE_AUTH_SALT', 'U<j=(W-jMxbakS_SkaF{bk]2Eq1]s>t!)-1EF}<3nO7y)v={)V|wihegs8fU>s 0' );
define( 'LOGGED_IN_SALT',   '+zFoaAm>rR9cu^|*cH#Ula/FyoU.$![5Iyoy4Kl`$4Mo;hd>X~`$rLsgsYB`3`nL' );
define( 'NONCE_SALT',       '-#&8R/Ve. G#qo}Tkoxg55uef;cmZWGC_^KZ#j0Oh[e)Og7:}m*xNKuF1ubZHBFm' );

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

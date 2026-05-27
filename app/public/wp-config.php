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
define( 'AUTH_KEY',          'dA,Lh;=PUfAxyH^L(q%m|0}jfjqNPNhOi?DS+)h/^-$S Y*NR}vJZ-~k}oM@ARUt' );
define( 'SECURE_AUTH_KEY',   'c4i[|?vB$;UEQ>WvLJhSV%SFN1%ipd)nhC3~Z&62QG+q!9L]h[~g@v<c)Rx`q)68' );
define( 'LOGGED_IN_KEY',     '.[<_EC<(W.%GLeh!,8GoJS%mD}$AO/pbhTEMIf48SaP8q]$o7{<(RxSdG;uBHO>A' );
define( 'NONCE_KEY',         '9Zuw.a8o@2ko(1-{6MTu$7;2~l}Pd,@sw7!zFzk,Zv;f+|[:1WwU@?5z9zp6n<:/' );
define( 'AUTH_SALT',         '-}fq@omdBszZzs44jD5&S7xnR}uG,1,U s_(,8)#3 PfnWM>S1[ Bb)Wph?]l]ry' );
define( 'SECURE_AUTH_SALT',  '6]$Ql4Qx4i>mxR$X`|VH %`N_nVo0G;[^7Z9US@(a`g,YRobOA-O5X ue>#N#PM1' );
define( 'LOGGED_IN_SALT',    '02[[RjT]v_au^3GaD@k/woYI]C~jV/qM/yi.8h1y/%<`t@Zb &;ZM_LT;Dj[&`?&' );
define( 'NONCE_SALT',        'I.8[xWZXOL:QT[[kRGEC~D(AW8w%~r.T[//);_83IdXLTqg#~#*3c5O} F7do_~!' );
define( 'WP_CACHE_KEY_SALT', 'ejP:?OQ-2$6f8?^rIImD~Wa002>Z;TSk(eHg)]$P3js<4w8d,lAn[-:)khq-PG0`' );


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

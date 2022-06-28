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
define( 'DB_NAME', 'project_3' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'ZNAB)P>+A_]*Rn-cNXKp:sz1}rg>}rPP1f&4Rt:%[DvzK{b%yX:T_G2FHPsh01{a' );
define( 'SECURE_AUTH_KEY',  're?Q>B^{25}~1ZJ{z@DQ pJgs<QdSvXUI$w],qAVwi*%PC!QV1onlm4:$uqdn7oH' );
define( 'LOGGED_IN_KEY',    '|^B! /Z_V(WNS[f=;iKCX|ssQy8I6E]J=N4,[t<L_SQt6W4G@MYv_Yq]^Ed&`8K,' );
define( 'NONCE_KEY',        '|;:_v/!K2E%xq[RzsEx._{-,w/!Mo24H>(m?];7>&tEJ&^5OrZ-Q@d-Au@WHWa6[' );
define( 'AUTH_SALT',        ' 6MPU*5ZT3GfF,8=?K<jz}cIEe?b@3J9Nx^^ppI~<Nfbv2f3$)?`[](_}?R3>q@P' );
define( 'SECURE_AUTH_SALT', '{/@blxKV:1z`+XI[*W@HHQJXIa58,{ijUcfq|U>2RWuZv.RE_/:KNJ_z~D;sR?Nj' );
define( 'LOGGED_IN_SALT',   '8l(_XSv1_TLoYX(O:,sVprFlC8X@M>Me=@Je:DxX=^E|t^&qr;7e0;USdC.7[Ktt' );
define( 'NONCE_SALT',       'Y7/,;9mVX.X9Qt]%2@;I<W^cXlv*EclsAL+|._?sO]G Ysvo2AEI-1(c[wp=x9f0' );

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

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
define( 'DB_USER', 'user_wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass_wordpress' );

/** MySQL hostname */
define( 'DB_HOST', '10.122.27.104' );

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
define( 'AUTH_KEY',         'Mg2J1kv?5H]mq/>>b@zOSiUa[0>~7|B6I^o*|bbZQOu?uOGJyl4H*8H_|)M9wahQ' );
define( 'SECURE_AUTH_KEY',  '4%2R-!A&~O|9Q5Uxu_M|/n>$msYE0e.Sw3~}DQqYu>Zbiq.*#Senmptgs[9?m7(}' );
define( 'LOGGED_IN_KEY',    'lSCOyD>}Fs^2}M#b<k8p1=T5`#O{pd=OWefuIAp}(z8$XI.I@60OPO{vyT$.{|0/' );
define( 'NONCE_KEY',        '<BKfks[%.9m6(pnBG*%De_EVH9,By;Y4YC2S)?_;WG9Hm@nk4*Fc3d~l+bjIRyLe' );
define( 'AUTH_SALT',        'wnltM8V%V@n&$iN`I9du$!$Zs}/d%9h~iIE1HHNt4H2z-Rl.8xtOHcU^cj$1`Z{V' );
define( 'SECURE_AUTH_SALT', '&IEe{~W3COH;0d]]yQcqV7*?h&5lL^t:TU>@cfi9)>jp8`$TO0`TXv Gr(1<+/G-' );
define( 'LOGGED_IN_SALT',   'o!NBNhY7p%>weS3KsnO0,|-A:^S) :4x9]lfp!{31IGXg8#9J$Od]7#%^Nm=p-0}' );
define( 'NONCE_SALT',       'Wo2R!HBtStz}t4`X%X1fs$yreyz_ap>llr%DPD>cg_+3,EbVd&7Ds?wSn8^igF&o' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mkdwp_';

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


/*  SSL */
define('FORCE_SSL_LOGIN', true);
define('FORCE_SSL_ADMIN', true);

/* CRON */
define('DISABLE_WP_CRON', true);

/* AUTO UPDATE */
define('AUTOMATIC_UPDATER_DISABLED', true);

/* UPDATE CORE  */
define('WP_AUTO_UPDATE_CORE', false);


/* parametros extra */

define( 'WP_MAX_MEMORY_LIMIT' , '256M' );
define( 'WP_MEMORY_LIMIT' , '256M' );

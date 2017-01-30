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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'finditdoha');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n[k_)2s>F]`5m hNZLSj$z>d?$THLJ(e^x+2LFk-E^%+&3p>~YS7:7oSg;sVSR1&');
define('SECURE_AUTH_KEY',  'QpqZq5aif>IBJ1]L>x1+6$KP(y%4#}eYN0M2BHM9SFRxm !q4MrP68,w1lU? $E4');
define('LOGGED_IN_KEY',    ' Lw`#>krc8i>l7WElE+.e7dLw9/{unj|<aps,&S@xXE|Df%^Ip5X#AJ@mH<jVVsk');
define('NONCE_KEY',        'HUP)Bb%=_HkK* Cj?=uif>!uEQ#_$O]klXXoWk0krAH8O,@neo4+}HjT0QP+)+`/');
define('AUTH_SALT',        '0RA4;i|_Z]J(FoOi((i|]B$JYkeeT|dN``<KR%0IMbX1.INlx<kcKd{c],s&nvLD');
define('SECURE_AUTH_SALT', 'Vk(4EM<2xIaHYQi/$#L6R}{*8fE!bD>nS$6~Y`NrgKtA-I&=.cn> !5:|;xlHsuh');
define('LOGGED_IN_SALT',   '#5@A;kP>[{E;U35V-~%Ai2c,pEv mT5r=q_G*.>#qX7[QL+#Z[+YZ{8ngrV(*eTH');
define('NONCE_SALT',       '&B(|9&[;VVYqdv;wLBrf/+r-9J4?[#_l;*ys^:/AzP& ~cjV|yf6hm2B;oq|.{Z@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

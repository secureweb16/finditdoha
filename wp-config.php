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
define('DB_USER', 'finditdoha');

/** MySQL database password */
define('DB_PASSWORD', 'finditdoha123#@!');

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
define('AUTH_KEY',         ')VWReALf4Yfdu({hnfcZeZaoAA=zsWWCg?fBySJgc],a5 *~%`3rh~18ypiBKU+T');
define('SECURE_AUTH_KEY',  'lVmkN?:>)$RAV4CNl{R$Z`I$Ju+g@`vc1.4i]Ni!H~Sm_{|-=mrKf.7HP9w(|}8<');
define('LOGGED_IN_KEY',    '?pq9Ln|C,Z-HNZWiM=/Xbn~kwa9r[De0}.a@Z}_CLEGH*Was`;loc #x9<<-R53P');
define('NONCE_KEY',        '95t d*O@<eHqnOnN 6x*DQy#{YC+W_ RU@|bjt91);S|W:jufk<}YT++}^2f&yu~');
define('AUTH_SALT',        '^U>M.lLLf4>YW!%fqh^Wv?G{p[byH0Nk,}<d{3H%};mAWc>[7(A/!Z&|yc>7CvhN');
define('SECURE_AUTH_SALT', 'k0UO~L-7qf~P-HLP]<:AcdQ#N=pu)R;,ypg!&yM|.EIcJ9KU]D!#e1kJJq;iNR .');
define('LOGGED_IN_SALT',   ' L0f]gi[lRHCof2YCVGYR>tMvy!^.2|xEeyOB]`:V|~pe&:#@M;{S7F,FltYonJy');
define('NONCE_SALT',       '9mJaRZk q~=uHqL|UX9LKrwPVQi>L$EgsM#l@2.2HOwH(7AsALN;fG$=i}4s9hdK');

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

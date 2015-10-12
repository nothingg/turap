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
define('DB_NAME', 'turap');

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
define('AUTH_KEY',         'Hx0{89V^,*;|R;0Zl<X#`v>G##?=?PNkGgnsha}.`fXeMzEWYND7pJ`z|xB6f!Wn');
define('SECURE_AUTH_KEY',  'vW6#GKK B?3%Rg9S&(hAc++B~_pm^]t/q>DV]<TN:y^i]#+>ecO}PBI](pB>7:),');
define('LOGGED_IN_KEY',    ':=-2P}]$z|bSOF#O{4dd$l87V}G]gu6#b)3ib-ix3u)>fa2xx?.t8|W2?i+aS+P9');
define('NONCE_KEY',        'L^jPeX+dO {$,ey6j]VK6>9cH;vZ1>tJEW]xj8/G~h}/!0xd([%JZ7jXJX}-)i.&');
define('AUTH_SALT',        'q$:(<w4#eH,h&8}xo*gCyLq7vy>XJk{T.U5g[(#pBA|56yHusdVmrI Q%;||Hw+z');
define('SECURE_AUTH_SALT', 'eeLHM?+e<GQfgo;UME9jHl[xH|`/UFZR:C8y,NzR-,M2?z|^wLOu,kriZ{/y;pG*');
define('LOGGED_IN_SALT',   '=G.Nl4F3y#=|VyTncM=| W}4=g?3gR9+Et^9kEi[Qbz+[jX-<CC9+4r-+%TFT.Om');
define('NONCE_SALT',       'll`G.B$,rdTPq,`.HJ`SX.,%q(aWEtez9;IZu<ah+hT`747(15[~UH6Z[WmRrpae');

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

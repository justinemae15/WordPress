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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'jCI(L}EnAd;tr$1}Mhz%hY[g-hR8e $eP7,LwIwAY!mw._Q_jsPpBw7oma.GEOp%' );
define( 'SECURE_AUTH_KEY',  'T1-jMp5dd6N<7&uU:3+~HQzCb%UX4_|sij}%I}kb_cXSE4$H!i^81nc{.3)_&n@r' );
define( 'LOGGED_IN_KEY',    'c$+dH5{$I.h,lx<knPv2o=jgL9MagS(xkNovTJe*=|.?dbcQ<TO?li6xpfrlf_e|' );
define( 'NONCE_KEY',        '/,Ml}pm6YK0[&cj#1fQR4t/6zgf}Udp7yI:aFc#Voop^T@R6=13S*D71}5bK,Lnz' );
define( 'AUTH_SALT',        'A/3g cT.3qcc!9A73$[R&:UaJ15wj~ >^!T<0?`o4(2@*m_#z;ZD^~qv[4;kUF-b' );
define( 'SECURE_AUTH_SALT', 'Wp#n&M~H<5*MZI6{aO=n6-pf&mvRz)[Q[z77lKr;H9nj/NF7Tf[d&ba?,Jr#:!AY' );
define( 'LOGGED_IN_SALT',   '-=_t(J]cTy9DVqsAaknWGgr0iBt#MJY[BJD]8#stQPYg=!m8w6ik3wx=!pu.=Jhu' );
define( 'NONCE_SALT',       '<kpRDftX! tYI]o}LzeC1rc=O7BmW:}uiqy;cA8[7{461yU|mhp{g[ZK+tK.0mW!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

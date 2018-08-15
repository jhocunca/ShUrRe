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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'pKJ<J&u7=C%K60n%Vz%L|3eywHo9zK9g]q2)dLD4H)RL^0,|vxDpZ?]X=+dw(r1K');
define('SECURE_AUTH_KEY',  'yg,Vm4?&17),tr~hYdq(n|tmYqoa;:3jj!(q.d9_8HktL{PKVYdCys-?l/a^;mzD');
define('LOGGED_IN_KEY',    'LNe3jhOdf=L,B{|gblA-3m]mr6^ 7/K )&)P!_T63X{q_G8iT)!?j~Q&XRRHZNiM');
define('NONCE_KEY',        '2f!@.Q5zl&IsZp.?VQ1MEN4$S58|xP` #PM+>Mg6m3@@Zy;tqo3@C+FS. 9.+,HA');
define('AUTH_SALT',        'n-3_4`u&4Xqy3z(WC,J0eJ=a_,0W7Xu]OG^mSglFT0a&znH-v-[7;}Z7uq5OqP_N');
define('SECURE_AUTH_SALT', '3ZrIrV PvT3g(;9L-H6(9d<KIV0V#_,;*7m<GNvvMV+j{d!FsT~[q1AdyLiOVRhR');
define('LOGGED_IN_SALT',   '1B}}Rl`?c|v$5j)P%~_y*CI0 uEwx6;I3NZ2k2}9ujcNSK{P=b#zS?zmV{aXzAoP');
define('NONCE_SALT',       'e/37Wq}W>[BT~Zsh&95gBFj,k*ba7%/RJ(IL9AmlT9W0zc&F1dgOc^[^<LkR]8H@');

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

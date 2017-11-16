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
define('DB_NAME', 'vloc');

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
define('AUTH_KEY',         'XO-$m>~ME:4zk4<bw9QS@edR,E5S%8H/nAVSb%CL@B C&PES~LQuG0n>A_`h(FX5');
define('SECURE_AUTH_KEY',  ':[!+Ya=e]b@hJIz9K?yzw?}H:C3zov8%>w&Z{o/~rpg .Dp=8S^UYNX?`6oJ !Lr');
define('LOGGED_IN_KEY',    'j<>hm-@awkzsT9Ad&PW6^lp4n@x``Q fdMJ<},uvx3  Av.{p#(W#&oO}g3 JFBe');
define('NONCE_KEY',        'l91Z4g#;KMJg(T?yYIL^<xF>&5Xk-JusxOK~D&9Mi.S,m+16AkI72XaMKctLSGv;');
define('AUTH_SALT',        'DG0@,b8NrD?)krFY[@6I0T|<&fEuZ#?a]m4XN.zCgx2WM`R,zByTAS0sst7a$y6w');
define('SECURE_AUTH_SALT', 'tDQCKY;ew#^Z*WhzyL>?!DGlFE2s[MD($1UiqCJf7n(ATW,5}t3z3c_R`[0l#j `');
define('LOGGED_IN_SALT',   'fsb}=MN@s$X3_~oo*q7oHi2W$Q8Dm5h:)Xs>}5O;/=~v8s%s1IfO+j(znwRx:J#X');
define('NONCE_SALT',       'pB>YkI.L^6~lc+m,=1;ci.ev|4}5r#}s:|Y8 :6ZiW&lkA>,baWnL?u^Q(QKyU#y');

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

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
define('DB_NAME', 'specialschool');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'habeebdvlpr');

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
define('AUTH_KEY',         'APf@Mj0]W_)5S3J-e%5<#4Zv=Z-3_ ]T4E_ 2u)%(>2?Cwij~$K4Hdd1O,KFS.DU');
define('SECURE_AUTH_KEY',  '1yxfAOtU|>(uZu/.`P*Bb9ok-{VyHK{X<HGgoEbJq.S Jy6wD4{}N2z_SXeYUUwe');
define('LOGGED_IN_KEY',    'uSXwrPN/3O,q!5-/v>!eT?y6$(dFf.B+z,Vb_GN|+D>+`3.As$Gx-o92-6au0mdh');
define('NONCE_KEY',        'WS-.FMf~_foaHAOY]pWI*oSVJf(k,9CB.r:A>hum5RxP1R$bRUi+} 8#JE#H,v{$');
define('AUTH_SALT',        '%}Yenx$lY{G17)QJu`+qu?ukZE#wv _^r,ZIdA&]vRUlW*FWhk9T|w7ZrPWjaVo.');
define('SECURE_AUTH_SALT', 'x_+|VtR rl#aU^n[r=W!4n^!H&#~Efe{Qdm>s(C6zEQNAs7>]-IS:u.5:A gyHD1');
define('LOGGED_IN_SALT',   'gqey)4D_5A)T?XEC;RgLi48[N.X5T:eod]Ds1|81~nsFgMGgCJK}%+=T.JF{4z l');
define('NONCE_SALT',       'f[>~@|#SY4-@YGLO7<G*Nyh`+v_4:0~o;1[-irQ7+<qzn4AK_ZiSc9FvFX-bItA ');

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

define('WP_ALLOW_REPAIR', true);

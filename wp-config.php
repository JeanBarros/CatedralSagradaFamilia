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
define('DB_NAME', 'catedralcampolimpo');

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
define('AUTH_KEY',         'o_ItR71p6}C3m0CT/~}frgS1JQ[xf>G(gnWAu}dHTEq)I;HP>I366)NQ-(~7lK|E');
define('SECURE_AUTH_KEY',  '=szC^fYPwd~OZS[FG}fa-LQJ%,V6*mrs]!R>bfKao%U<V|}hOJT1e2$D;/BC10fS');
define('LOGGED_IN_KEY',    '-j[.9/;^94=Y2Qw}Xy$P/@=#.,Ro8SrLKNPgKFrkkwcn)P=O<g{-rG&v|ltCX<sp');
define('NONCE_KEY',        '^%x)Jw3k$?PHV|~;1IR.YVydX^.H4QR>IRQrdiV[r[O]+y?&;.a~^2XMh&h.D^g$');
define('AUTH_SALT',        'WY[F^}5e|sMod{bu}FmV1%f)dB6#<e9Xfi);I#7DTD4E&TyP)EygU1SN6r}AhtVj');
define('SECURE_AUTH_SALT', 't{-VciinR20?go$*(`3X&4W=j{kqdpx 0HTLd(WSbKP_E.cihe;h<<-X5WLk~=U?');
define('LOGGED_IN_SALT',   '^Fx66|?Jwl,?@li8Y,{^<<oOi|),z3Fv~cFrL]8b.^kp]%v$rgCZVf@8Jw-A!.D/');
define('NONCE_SALT',       '3(%&,c`.xZi%uv1wip6{2R-?$<:Pg&Q=wqH:f=Xy$/C``zrXC-n1x{9,aI`&eD?u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_catedralCampoLimpo';

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

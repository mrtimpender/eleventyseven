<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'eleventyseven');

/** MySQL database username */
define('DB_USER', 'root');	/*could be eleventyseven*/

/** MySQL database password */
define('DB_PASSWORD', 'root'); /*could be notmyWPpw711!*/

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
define('AUTH_KEY',         'Y+XJ>zZp||ArQFaX%[ZTnk^Z+7B8Uf/6]f~Wo5D)[[fd(o,=qjI}d/N&PPK5PR:w');
define('SECURE_AUTH_KEY',  'm>*azV[u70Wt^&gJLbq(T{f|U]Ybs{BCjCHZb+t9J-cfy&| 7KeHf&Mq}et^-9wi');
define('LOGGED_IN_KEY',    'iBHwxUlTGn5Cy;Ua)73J~VACDW=SU2|o8+be154xp8zL]{,J$iOM-qJ %G#_nKzn');
define('NONCE_KEY',        'oC9S+@E4@yG$WjcC-#P;l{aGuqzy`8nKT[T)+<S]5`ane> H-[80EoWFq|:cGRe0');
define('AUTH_SALT',        '$~0[+NBbT0lchbU-zR;7njgiL3`AUiXfD@?Z}Oiz><FVy0PyX<C3XS]Ii5]94l%k');
define('SECURE_AUTH_SALT', 'a4N(-Pu69J>:sUC8}Yib+?f~0^~vY90VyD_vJN?y6J4CHtA43&rI^?~6:lPx}T(S');
define('LOGGED_IN_SALT',   'U_zy@ +_wUk{&{lOteGmuI<zj#`EX8<L#upK]Q]voBWi>]3sQS&I&[r!T)=v2U2 ');
define('NONCE_SALT',       'ab;$H1g8a#+E22!Fj2wo>)Gd--z3~kf4HE o9Zc!I{rLQb#?xca0nY[m,<<AKR|S');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

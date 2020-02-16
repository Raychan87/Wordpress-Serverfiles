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
define('DB_USER', 'wordpress_user');

/** MySQL database password */
define('DB_PASSWORD', 'k%G(k)IV2nEE5x#oV+');

/** MySQL hostname */
define('DB_HOST', 'localhost:/run/mysqld/mysqld10.sock');

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
define('AUTH_KEY',         'F-A?Gc|wD&(U$Pn`.91&d@1kJZB,Yji8n;wXV8$-w5br^6tS2Pt6_qvd#yDwr$-6');
define('SECURE_AUTH_KEY',  'P_OVr`2x+Zga%VqF]!BsI38kTy8TF?^ Cojsz%wWm_;m-iKNseP]/h1w`:=R-.L,');
define('LOGGED_IN_KEY',    '^^6?JiL7BWt~FvFiO#r,zKt^@Q|S6qiO**S@xdguKOI4!&i${YNI}dv)YE~07.b8');
define('NONCE_KEY',        'E5p|S|d?`XNMqd@B%&GLM#%[k85-Nxc}$hM(u7nT.Aog1If 7:6K6kVSnDr{URJ}');
define('AUTH_SALT',        '3TP_L_K4 _GR;n@!,X&ZF42<l)wdArq?E;WS):hf!W7&Y:`yi$]B;/)WM!LD7phL');
define('SECURE_AUTH_SALT', '[MZ+2fm[Kk;3p`#&w![H;r6i5S$Nfq}UTHOS#*456,@;<N%8n:r`^$GTdzSnb&xA');
define('LOGGED_IN_SALT',   'fn;So7Q-9(>=~SEX44c!2rW*uEKnzZN_r&4Up[?M:MnIAt}I<W1[_mu95aEb[Qgh');
define('NONCE_SALT',       'IM5ebEP1ur^Nfm1:Z:A=1%>6vT@QFc,9#39mz]?(%qOMQZVnt->i5l3^Kv9,qv_}');

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

//** The next line allows direct downloads */
define('FS_METHOD', 'direct');

/** Papierkorb aktivieren */
define( 'MEDIA_TRASH', false );

/** die Revision Anzahl beschränken */
define('WP_POST_REVISIONS', 5);

/** Verhindert das Plugins und anderen Code Externe Verbindungen Blockiert */
#define('WP_HTTP_BLOCK_EXTERNAL', true);
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
define('DB_NAME', 'blog');

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
define('AUTH_KEY',         'g7U>mGx^Lo{kI^W86|Bh=8}/^75QVx.qNZnoUSNr<LaA, iVVA-tr>XwZ&OWu6hZ');
define('SECURE_AUTH_KEY',  '`nQF5_tI=e`C>LMcbJV+L~aOCQL*lfQ ANs-;%t$LYOhY (SNKC,<t6Py1?6 4|m');
define('LOGGED_IN_KEY',    '1L#>I)e}fKLK6qPL&FLh,J;^hGuJ~BA:# ,i~,t;fFw#f-lX WZtQ;,f13h{@l g');
define('NONCE_KEY',        'y[vQ7HU ai;M[S-EXPE$VDs5jL#d|+%L&2BeZf9R9y2`yZWn!5K;js#g@J$q4vzA');
define('AUTH_SALT',        'a,G(#Zqa;Dj9Eek+,2#~c$3[09]^U05wiYT|UPv`Iy~53qFNiHE!I!1)nrU[^e#!');
define('SECURE_AUTH_SALT', 'O:OhU2v+&eqJ@u/zxv#I6bnJ{^cOf@B%H<.(L)NK([X`)WZ[5z@HDBb<BMZH5fuc');
define('LOGGED_IN_SALT',   '%7(*5_cljY:_VazN^jgJ_`(^nrqaG{2+BBrWZx&n4Z_@4UGvf%v:OxJmu@&FiI$#');
define('NONCE_SALT',       'PQ3vOe9K86O@9|uYb?[s6bZtw}VDW+;N2$b5nfH5&GlCb|)t`5ORgty@L;w^B|3Y');

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

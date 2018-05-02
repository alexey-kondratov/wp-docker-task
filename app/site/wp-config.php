<?php
define('DB_NAME', 'database-wordpress');
define('DB_USER', 'user-wordpress');
define('DB_PASSWORD', 'EHeGecnMJjgw39qy');
define('DB_HOST', 'wp_db');
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'W2n`Q|`ng:Rlxy|mbUo$R4%.6e DPb>hC# xN^SmxeXC,9PC#c.2Mat:+c#Ayxv)');
define('SECURE_AUTH_KEY',  'Ey#EN]pvBtFpK&+h`&dU41vPL^2b?jta`HGl.}Yk (Z$ovYI{,FcW]MBoDH^g)Tj');
define('LOGGED_IN_KEY',    '<+%2U1P&-4SHX1CLbI]yF5X,:xG=`-muG}YP-bsB]dsRgT:?}@|F&hz1qSos@3o[');
define('NONCE_KEY',        '4HhAWl8_eRNUZc3<#$*~YCbu3{|CJw5L[MW=5hV|g2+d[d3PRe(9<IZ!Yv8BVE&N');
define('AUTH_SALT',        'I-^2*Ok~j|-=T6b^E,W2Qq2S!TQQ2u0Xuy#sc62>;)9[S!M>P?Wqr)-e<0c.CB8?');
define('SECURE_AUTH_SALT', 'B$2[**%yB,5s.{y&V|J-6(+ec^eo`~8tHKlgYr5LY9prC~on|R8*Dx;Pcksjc%[9');
define('LOGGED_IN_SALT',   '|*(g+xQ)Vsuz)w-b5c([zGjZQ__j2]F@~[tQ>K3UQ9PM^c`R0*.~QwoVcSiN,IsM');
define('NONCE_SALT',       '|p2x<[S%m$T6{}XH@D{wf(J=|XRG|p,!Vk%vk)v-d?_#v#[ZjH+mjv38qq?j=~y=');

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

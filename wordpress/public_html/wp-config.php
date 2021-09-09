<?php
define('WP_CACHE', false);
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tilliman' ); // 

/** MySQL database username */
define( 'DB_USER', 'root' ); // jasonb25_wpaefe

/** MySQL database password */
define( 'DB_PASSWORD', '' ); //259e1d7e1a7e960994928cf2b9259c10

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'li+1(6NkvnL&HU+?x~+4YVBd3FS#>Q0en}qV_LY|nI#BQT)lh1MiFdp!&a}n>Ie`' );
define( 'SECURE_AUTH_KEY',   '-i0y)Y4[j@McC~_HZP~dKA[yV.gxskq[2^?Ysj~mLDzVTR<y-1`pNnSz4[hXFg,R' );
define( 'LOGGED_IN_KEY',     'KhRZ[2#2*Z5!cC:,Qx28pFEhId%=,GW8]W7yqbC|(]?_wxXp)^>;(GUn07AbvH;[' );
define( 'NONCE_KEY',         'bOrzVc8D1g2MkY][wt=M P&Fs-ajHRvCMxwv=_9]A@.J05r#nkjML+Ag1C1iFEU.' );
define( 'AUTH_SALT',         'lAW7Gzw-kf<sX10sNJ4DNoM./T%Scnnf$Q%)AKyiAUaCJy{q4`.$1F C+G>hNxsF' );
define( 'SECURE_AUTH_SALT',  ')T&W0~fdAGX!8YtzLwHt7jk*~mIX<KA7%0CICZxNu86=0Xs;38eL:?98cN*$C8pA' );
define( 'LOGGED_IN_SALT',    '&uDDeyCo@<)_.3m8Q}5cAJ0 pXK/>tPw2i`/=Fi Y0/js8URUe;gFw (]%XI,C&X' );
define( 'NONCE_SALT',        'Xq<fXj X)ySW9rgIv>$;m`&j)7^B@X+wU4ep uEr/%pgrCwGjolb1:#hB ?9xl^k' );
define( 'WP_CACHE_KEY_SALT', 'x`Y<RxA&gSmz`M}T,gw.W^HUoIW9,aD55FgE|(4iG<OSG;9I#L|JU7vSe5^nAEEo' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpey_';


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Defined Uploads */
define( 'UPLOADS', 'wp-content/uploads' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';



@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', '%%DB_NAME%%' );
	define( 'DB_USER', '%%DB_USER%%' );
	define( 'DB_PASSWORD', '%%DB_PASSWORD%%' );
	define( 'DB_HOST', '%%DB_HOST%%' ); // Probably 'localhost'
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         'NH}cHS^& ^U?v=lxn5#}#eSM:lC`dt|G3C|UsM<;4S[%R w^sz[h_T%/nXod+|~}');
define('SECURE_AUTH_KEY',  ' 5S:1|OX()67|-Xz~cK&C^=i2#$dc_rzcDjhD|g`Gws.Ew(ZQny)`6)bopz,wm2i');
define('LOGGED_IN_KEY',    '7K%]4wGE6$(d]LU-bT 6Gf*edR4Ygk[t*YE7@7bxE#dBsRc,Vqx-wfTsIUNo2;H>');
define('NONCE_KEY',        'iU%=U+%1>F.D5~6Oeky07#>uc#F}-e.Gv]MKl=dDL5E;-Fy%K`+cN=H-Cd;@~t.*');
define('AUTH_SALT',        'Pq6Q(|/1rdxROi_y-+-+,t9SWDw(2^S&AvMqZ|?3eBL<Q_<8NAAI*NB7j];WhAt3');
define('SECURE_AUTH_SALT', 'M|#$mpwoYTe?W}=)*]+|tx=00D<?F>K(1W,M%<~43NU3JKty$TN-!@_ng2[SX{ J');
define('LOGGED_IN_SALT',   '<Vn[]+]@XJRCi%Q*q|cXHB#??tw@6;5q98tt,o:&bZ0+zV{F_G+PdIytB#d|q[Yx');
define('NONCE_SALT',       '+_AylV35S{&%ibw2bs+.]H!9m6/V`@q|H9Qj=rqD{+UGMaFzMN;580a5bYdp-<8L');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wordpress/' );
require_once( ABSPATH . 'wp-settings.php' );

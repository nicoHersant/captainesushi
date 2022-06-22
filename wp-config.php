<?php
/** environnement **/
define( 'WP_ENVIRONMENT_TYPE', 'local' ); // wp_get_environment_type()
define( 'DB_NAME', 'captaine_sushi' );
define( 'DB_USER', 'captaine_sushi_user' );
define( 'DB_PASSWORD', 'modpasKPTNsushi69!' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
$table_prefix = 'kptn_';

define( 'WPLANG', 'fr_FR' );
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', 'local' == WP_ENVIRONMENT_TYPE );
}
if ( WP_DEBUG ) {
	define( 'WP_DEBUG_LOG', true );
	define( 'WP_DEBUG_DISPLAY', false );
	error_reporting( E_ALL );
}

/* Desible auto-update */
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'DISALLOW_FILE_EDIT', true );

/**
 * Authentication Unique Keys and Salts.
 */
define( 'AUTH_KEY', 'ro0qF$xn8S7+V<?~e5W^L.O+OY_8H~me<h1x#Z(YFWx}U@yr?IVYJ?Y$]X+.cxW^' );
define( 'SECURE_AUTH_KEY', 'c%> V}pc:d_VfAlf!?*~+Fj7oPa}{B,TBY%A`kNdtf+Z]49e}QDM3N1`-Ya-!}#q' );
define( 'LOGGED_IN_KEY', 'WF:pg)7abJ5+3 QyL!w!TF4P|^4N hvL{0p|;rw|vou~)bgo+Taw?WJP<2L6Ayu+' );
define( 'NONCE_KEY', '*E+[jcP9pG&aq$67bJFEW{%4 Rj!~,_+%5QS+dgXF]U`C5_++*L8Nst# cL0tg11' );
define( 'AUTH_SALT', 'q|NVw+~1_!sr-+{I{bEc$UtXnk*||ES[;FD|p6P`(M$EC gDDK@,(F;eG:elwxU{' );
define( 'SECURE_AUTH_SALT', 'E<RbLK)8jdOX=(}:=1@XUG6:|~G$LQwTw=5Jl^5c1n8K~M/_hby<Ns?KHbG/zLcG' );
define( 'LOGGED_IN_SALT', 'VczQM77V<9rebB^z@7`IA)uWG8s}1H-|hTnS~]j{))}b|Sn_|a(ezo9O!k HQXr<' );
define( 'NONCE_SALT', 'q@lgh 5rYa}N-2!@[svPN*/bHXHH#Wt[+wG@-|c#+u*p_m?h,VgzcL%Np5SU0V`B' );

/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

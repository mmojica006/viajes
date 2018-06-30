<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'atw');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ',!|b-EBJuf_mR4g}*B3.oO%L_`PPy7 ?X1!_4m;jc OSg7zuL% ,+l]sWg`JT*bf');
define('SECURE_AUTH_KEY', '#~J2l.Jy[ZZzmznBdMhvEdebXm{|--B{x8DVq#yEuOok]c@]VSeF3kQSe}M)8%8W');
define('LOGGED_IN_KEY', '?#0$7qq-i9tL?#h:ra.E@j^)/x@jf.?~*WYjy5O+4NoRS6w6:~7 -0gBt@/i#,^q');
define('NONCE_KEY', '9t?zE}6tV6%<x5>_E}R.}Hm~gSuGCW35U6m^F^fLB=PR+Pa.rI=y#Er+O99,aw7k');
define('AUTH_SALT', 'B@ajS)a!+txY|T0nyS^l`}Dz*ASqM2*0UrZ^@-p$7m*!XL0]D|G,ScKDi(0o.Dli');
define('SECURE_AUTH_SALT', 'mG@yt1h/9oRtYR,lhfCkeW[*>}K<gs0_X<l;Y=o]Cj-dnJO`qO]FLZ*ytw<8KZ`b');
define('LOGGED_IN_SALT', 'jW%Mm}I<~Ra)TARz(:A>[1-8rNy`0oFx__47}lvEs[{@yb$X1~k(Ehi7Lr{b4<xf');
define('NONCE_SALT', 'vU:WLYNY=H%)^`f.Upr$?@u;.a0[zB+Pe =1#}h,Q{6.PV)pa8sZo=o3[@DT0~!U');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


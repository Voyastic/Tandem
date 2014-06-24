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
define('DB_NAME', 'tandemle_pub');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'tandemle_usr');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'pNJ87_t8');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '3UGF91#xU+0Q0K}]o/2A=iDa4HWo+WO|7!k/*eSQ|oH^o]qp@l4P]_bxfl[%cGq|'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '%s $N/naMC)qzRZA|F-`e0a`6v-wNJJuy9QD?{iZ(6&_kG@Bhn(9b#We+}-.ofzQ'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '|=(c)>i}nRqSfzvI_`H-X.SzV=Z6Od-Tx|+;38M+bEFW9KIcexS~H_>N@qMrL#x)'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', ']m]J#]9ip7+v}~/|H>Rd?hn{7w/8Q@zMn7PO%,kFAs+f?#i:M}z`=Pjc<[<dQ|(j'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'x;L62?99+=B,.ck@6X)V7>I}4hGw`u=y&+MY6v|O[`+Ilx@]rwWnSiflAQi*>zY2'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'za;*20aYi3vp0WGHz|G?Ij+=s5BU)U.b r}<<s-;k@&d*T:TloJ?~ |O|=KG5Q6-'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '};lwy.3d-iS5HR2c2,t]+P{Nqtl:C+Qx-1?5|_|@R)PK)L%ATSR-@%! ~P56L3 ,'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '%Ti)m7,H%s6$c<[GkB4nfDKUud4=BSjccoW0/t9`1`X+Vf#W)rZ+%-9h+[JQ.*Yf'); // Cambia esto por tu frase aleatoria.
/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define ('WPLANG', 'es_ES');

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
?>

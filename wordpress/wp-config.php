<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'LAB201');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C re:OF=@EFOrnldoqV+!_okT7@Cdh,2.r0 gg5@<OZ->?sW&buH rr{Br]?y?9f');
define('SECURE_AUTH_KEY',  'U^BARHv_5b5-KSy./iARmFr*6*`&!%%J4fwd/|HbnBo>AcaUz8dW_7GhRy@T2A$t');
define('LOGGED_IN_KEY',    'H_$oBPrFJXt&*gW5`zjcjD@GsQb,|KNC_4oYL0AheIHnb-U:4gFin#Ww:N*s{S|w');
define('NONCE_KEY',        '.laIR1f;0kuJKf9(JBzAEOS[uiPc3B*h>AA4=16cu#pEw5E0]<{v5xPcaN,!oCYf');
define('AUTH_SALT',        '2:Vd5M4xO3jKu,;@P)H!1>dG.+kG%YkxwY,[4trr*up6zdsnsy=4gJ7V<#Qft7iG');
define('SECURE_AUTH_SALT', ';=k&mx0/*&msLPZy4qEgtuFi1=bI{$8ZsWE(0>8g(Pe:/TP;U2Ag``/L)O+I,1a&');
define('LOGGED_IN_SALT',   'EavQt=&nhMX*0P!OR^c/0c>t=soj%@ybZZ72N}Kh?E]GSvrMt-]b?UaC?K1WE/&g');
define('NONCE_SALT',       'Y&.ci^{M>,)V|K+<?f->p=7DzfHIyP,}%$4~1!W[tkOromQT)c2qV0&76vvYN,.+');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
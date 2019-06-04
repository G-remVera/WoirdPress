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
define('DB_NAME', 'testwordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'jDS=y^zQF X yyQ`9.aLJH)SJ53E~#)]j%Uv ,QSq{CF,4_X);wwq46cSWFskv@^');
define('SECURE_AUTH_KEY',  '=D2#6kQ; dSyU ]V+F0%?C:/$OEkM?Grg^&/%+EsGIG&kV&YJi>D;?:_zFeeZh+J');
define('LOGGED_IN_KEY',    'ujFvj+UOY&=sZMvKn[R)?K)7Qq6<n11F*VusG4f_(mXp-kRHPphbK%M^g=C%0=gN');
define('NONCE_KEY',        'obp:$XdTy ,SEzlg71Ihg;>}[?7 $497.k:K4)B^:7bp,@D<X%o/jQJ)zG>H0%ad');
define('AUTH_SALT',        'Hq|^!%4:;vd<*K7qlCJtq.-KAt|0jkZa)b&z;5>dZ I[KSshq0{!4-[*5pZ=~4IJ');
define('SECURE_AUTH_SALT', 'KbP({d#IXaa^m%r.#06`/hUmGQUZ``Y3)OZ:N`1eox gDD:j~U2vDA]!YWv#*e0@');
define('LOGGED_IN_SALT',   'L1zisfij=DI5|=%XxZB!aMEj73tYR0-o^N,F9k/<EW/Sz 37]uN/L`fxFv%D~ dF');
define('NONCE_SALT',       '1_AWy,fRs2S xFDMS~<zz-Tu;[j~:5szd7X#LXiv$:5Z3[(`kJOc>y3FZiFLEBwp');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'cour_wp_';

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
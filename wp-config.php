<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'tramesv2');

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
define('AUTH_KEY',         '101KN|qhv=`ru/yvZ`IWx*gA|0fOZ%sSu>/tt}}++7#~8a}6H#[T#=tT5Xhwz}aa');
define('SECURE_AUTH_KEY',  '!ERHE2tb<!hzdqyCk~=xr0]ae`s)sMd95-t=z|HcwcntgW_LOE(s:7 U3vZ*JLkZ');
define('LOGGED_IN_KEY',    '0r4UQtjR@sKQ?n%;|p]4s;;%#+Sh|zh7k6Epodx^GwQ+134C<X}~p#*t:dj4,?@<');
define('NONCE_KEY',        '*{+5g>L+-GSgT#L!=!,i6E$p0lA9C+4^{?>@>3Y5(^hxCq@n3SUZHFftSz^ng:cD');
define('AUTH_SALT',        'LR!|MZC9ADsmD50`GRwRN)lrQcj3~s^?m?i.[z=l4vbzaz*o.hQh7=jrz@Op&?4Q');
define('SECURE_AUTH_SALT', '@vg-.$?+%Lq*E}iJ32kfWI77F]h%/79v/nCaSB2ld;@3|8w8HF4,Q|7djL,9+YdG');
define('LOGGED_IN_SALT',   'a?Im.^&n6wr67_r^4oO}eFcp|uIzQl$L4hg>+uB&8D3?o2Kww/{=1E?rBrpcH{3?');
define('NONCE_SALT',       '57=$2#4I>okn34B.bfpv!^=:l4<Ce=<UIqDla-gt=njU3kf7>_Sdtvg2J0`cE|6+');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'trm_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
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
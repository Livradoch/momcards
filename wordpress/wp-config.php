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
define( 'DB_NAME', 'momcards' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'oycNpR(r%6OR6rt8{EE6!F:;-;EGE&a@H*8$X;mB)s,])EB0BIwq-}71GVZM{Kg ' );
define( 'SECURE_AUTH_KEY',  '(h_rdkv[+q!o2c1 ExxAsx2F]amX-m,v7Fd)<hN|i~o6guOl QDX(C!/Y1HnnN?Z' );
define( 'LOGGED_IN_KEY',    'Fv,ho^v&Y3)/t6RxSDAmrEa:nhi7A.-QqL]CC4sj/8e{-/fqhwy_{f86cR8Dbt_`' );
define( 'NONCE_KEY',        'p(,qbiD;`$.*+$s8(d/_0,gRxRSl~V`@6!CfR@YL[]2}l0^ai*`bgL;8-B?@<M>A' );
define( 'AUTH_SALT',        'fiFdfcm3srQA^Q!gYTD_5YDUGy9W:My=E)Z[PiFGm,PX]vP7-F:}Ac@i+8kj~)U.' );
define( 'SECURE_AUTH_SALT', 'vs&tP1TZzIMH3,VZG{(KJG<+`blKu|m%T{lvWpjJ~XCvU2lCsL>wS:Q~+rx@ kau' );
define( 'LOGGED_IN_SALT',   'stYExLP=#d#Cki%:^QxP8D~o%_XamtykwYXR1pO~!R/1CkgrMm:DUNpq3a]Ks`xE' );
define( 'NONCE_SALT',       '1ar08-#3dCy*`,8dOj2cNm8<>SzX:{F%J>/40kaH:DwBrk/ DudxB?(:LBK|XiPX' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

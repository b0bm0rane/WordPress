<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_moncv' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^JYfk;%T-N.HHd^Jfs2Pwo]y{~>lOwl{]g)6FM[*(($zE>jDmNXR,;<fDbul!fAa' );
define( 'SECURE_AUTH_KEY',  '0G!X0#H8 EiuF^}f}v!D*?z#bQaNu_FSx!cSP8wY/s0w*c>)ZbnQ8W!tV[M&cr.+' );
define( 'LOGGED_IN_KEY',    'k3H]iI[Vt?opc&wuO)60}:b~&Y(i!17Rl 6,x1b>W[J!Ra.w [fktPR[kZnBBD7q' );
define( 'NONCE_KEY',        'TH_s$eSUs+:DjuRs^`ZPF~y*:vKau2~z.zVt=$b$%e&cs|Wo%O>]z &98Hq!&Ur0' );
define( 'AUTH_SALT',        'ocPYq@;&e[HC0N|8X>l-Deu+Js=,mDHH@6-[FBNJA{S/ Rz:}y>y6(ZRbFu7q0pi' );
define( 'SECURE_AUTH_SALT', '/:NKFx4ge=D2Fua{-;.(sWTGNOr/I]g{]CNhiJe(B`q/3^`[:Oa}IMYs0rBYtB1s' );
define( 'LOGGED_IN_SALT',   '2)*67%MYA,LMHJv!:N1JswN##eL@iV=6h/.h=izoRhREoV](y,bf8CtU.qJ*nDK^' );
define( 'NONCE_SALT',       ':bCg86?#7% 5J8g{SXck+$E)~lS)H5B3]>[qS[`Sb(X1~GenG9g[PM?1y/LMY8O9' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

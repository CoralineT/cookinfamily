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
define( 'DB_NAME', 'cookinfamily' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'admin-cookinfamily' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'admin-cookinfamily' );

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
define( 'AUTH_KEY',         'v*JV#Npr^&&u!?xa+!|o#u h[fBcT6A+8P[r)uE1)LA`HdLZ!F1Idt2}W03}~6nt' );
define( 'SECURE_AUTH_KEY',  '.#^]d~yToCF~8/6AC y*]rCyb|zMW159G6O(Gi/2Iv8tX$c=Q2j/pchh9e{c_;Cc' );
define( 'LOGGED_IN_KEY',    'L&>-&#N=uD<N?74Bs4x{PM?tkhOHnL&S0/E{E<a29yU`+Zjpl6G8++#[Z:A]aA^X' );
define( 'NONCE_KEY',        '6QR=@[#Z@5wkdlm!kAo.:=VUZI1C[I+G$-G*6IsRf#3;errPQ51Iq<jGxVctF9-.' );
define( 'AUTH_SALT',        'l6JC$X<1v0at)=,-]/;b/_^~{Znc379<3[R 2;Ky/CyACgD*[atX:Dv^-)BCHV73' );
define( 'SECURE_AUTH_SALT', 'kd$Da2~E!O>d$@}&99{i@JVUXh7mW~% e~k^ @+^F7!f)dX#5c!BEfhP/=Xv s/ ' );
define( 'LOGGED_IN_SALT',   'J:Qo>yg7t p:Cw*Zl4=e>@UQ<VsxyUu`&QgX9c%oe;D7<y7D!-B<trhPscP_IT$c' );
define( 'NONCE_SALT',       '>U}&!L~*@ADx|zaU{O}Qs!}aMxO<x1Kx:>&|e~cvMzljiZG)<8=%LxTnZ1gTv<fr' );
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

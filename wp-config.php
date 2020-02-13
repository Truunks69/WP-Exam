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
define( 'DB_NAME', 'exam-wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '4B.54pYN{v{Qz}oy-229,DSRc~d^e?EvZf~/m-44T,`~]HqG1n.UJhFS[/y`e%R6' );
define( 'SECURE_AUTH_KEY',  '$i^nDiwZ+yz3~ajm3hN>,votVRO,{vzPx4.a=3B~wW>lx(_p|x6x?. =SE#*iY{f' );
define( 'LOGGED_IN_KEY',    'X;MN.&<naFqqB/]g#6d7=1+NA#],ht:3*d8Bk(>*&x0i&,88#B+qozYEe_ThoZ8{' );
define( 'NONCE_KEY',        'E)XfdU20ab_S.;&S,eJ+uT7(|DeWQaP}9Uv4[<vFZT|b@+BlHrRF6GLu)6 LGpD3' );
define( 'AUTH_SALT',        'BtTnWwc26zM<v)zd[,fDtY&u#Z@nd9+ ~&Hr_>C>s[4m<0ZxRbi=[3Apid%V(f*.' );
define( 'SECURE_AUTH_SALT', 'Zgn?wPd~_M,n[[m@owpKc/)AFn`%a. {[kQ?STX97K<ypHmipu?x? <I(,,5^dKr' );
define( 'LOGGED_IN_SALT',   'Xs:X13aA(TD25)B*35A=1%K3uK*W[~x_SO;6:X+=Cn YTc-RC:fp&Dq>#$QuD~vN' );
define( 'NONCE_SALT',       'y4q0,`myVRB}DsU2p~m}WGP@Ps-^OLZEWIWJZCQoF9Yk.&?bhT$*c.]cvmxfP8+c' );
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

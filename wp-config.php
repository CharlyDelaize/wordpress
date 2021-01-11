<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'C(nv<_[@Cc/@~q`SkOQ?^gz~n}Ok5e9sy=5!G9q;kGlZCXPazG-[QXJ4WR(MRRZ5' );
define( 'SECURE_AUTH_KEY',  'f{^+HJU(r+WIL[[>Ti2gBEQk>[;N4XO&21]+Ne/|H+y9u0uHzz5pbxz2^!~$$`*t' );
define( 'LOGGED_IN_KEY',    'P^X9/AIW5XAu|wHU0Nm,w~8{Y?2!2{.dLekXH4&nyH{<fL2 },6~xqggm][U>!*0' );
define( 'NONCE_KEY',        '/_?rj.zEh]HZv:X;[uCOvC)eFI%:D?{bRGXTgv/?eB(t_:$U8A^d@{1OeAhC|x]&' );
define( 'AUTH_SALT',        'GukgLy 1ZVzqp3*6*j:/@_@D1liV8(!C[tX|Dn*xg!cs9[Ad!yZ@yCbZuCQ|TVrD' );
define( 'SECURE_AUTH_SALT', 'F{HUVmx_]UZO-?<-[2K.=t6o(]@$y;.=89y$8S[?XTv;HxcW>5^bbgT!C2F~]3D>' );
define( 'LOGGED_IN_SALT',   'cTP_tlRA_y|BkZ*X3BaI=ku.w,qotGr~`fI;S<=@HZ%Nlw#8[Y%N;&ExthdhRFZW' );
define( 'NONCE_SALT',       'j_hwd{y.%.Z1Lh-6g.}*{tGf8TDnW(+TVG=nktqf07Y274lsOT9K&uFJeWYE#`|&' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

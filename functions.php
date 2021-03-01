<?php 
if ( !function_exists('ec_setup')) {
    function ec_setup() {
        // Ajouter la prise en charge des images mises en avant
        add_theme_support( 'post-thumbnails' );

        // Ajouter automatiquement le titre du site dans l'en-tête du site
        add_theme_support( 'title-tag' );

         /* Activer la génération des flux RSS */
         add_theme_support( 'automatic-feed-links' );

        /* Activer l'utilisation du HTML5 */
        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

        /* Enregistrement des emplacements de menu */
        register_nav_menu( 'header_menu', 'Menu principal' );
        register_nav_menu( 'footer_menu', 'Mon menu du Footer' );
        register_nav_menu( 'social_menu', 'Réseaux sociaux' );
    }
}
add_action( 'after_setup_theme', 'ec_setup');


/* Lancer l'audio alétoirement */

function gkp_html5_audio($atts, $content = null) {
    extract(shortcode_atts(array(
	"src"      => '',
	"autoplay" => '',
	"preload"  => 'true',
	"loop"     => '',
	"controls" => ''
	), $atts));

    return '<audio src="' . esc_attr( $src ) . '" autoplay="' . esc_attr( $autoplay ) . '" preload="' . esc_attr( $preload ) . '" loop="' . esc_attr( $loop ) . '" controls="' . esc_attr( $controls ) . '" autobuffer ></audio>';
}
add_shortcode('audio5', 'gkp_html5_audio');
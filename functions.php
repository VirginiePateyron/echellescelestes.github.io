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

function echellescelestes_register_assets() {
    
    // Déclarer le JS
	wp_enqueue_script( 
        '', 
        get_template_directory_uri() . '', 
        array( ), 
        '1.0', 
        true
    );
    
    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'echellescelestes',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
  	
    // Déclarer un autre fichier CSS
    wp_enqueue_style( 
        'base', 
        get_template_directory_uri() . '/css/base.css',
        array(), 
        '1.0'
    );

    wp_enqueue_style( 
        'main', 
        get_template_directory_uri() . '/css/main.css',
        array('base'), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'echellescelestes_register_assets' );
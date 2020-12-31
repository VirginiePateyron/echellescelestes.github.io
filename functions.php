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
    
    // Déclarer la librairie AOS
	wp_enqueue_script( 
        'AOS', 
        'https://unpkg.com/aos@2.3.1/dist/aos.js',
        false,
        null,
        true
    );

    wp_enqueue_script( 
        'theme-js', 
        get_stylesheet_uri() . '/js/theme.js',
        null,
        true
    );

    wp_enqueue_script( 
        'script-js', 
        get_stylesheet_uri() . '/js/script.js',
        null,
        true
    );

    //Déclarer la feuille de style de la libraire AOS
    wp_enqueue_style( 
        'AOS-animate',
        'https://unpkg.com/aos@2.3.1/dist/aos.css',  
        false,
        null
    );
    
    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'echellescelestes',
        get_stylesheet_uri(), 
        array(), 
        '1.0',
        'all'
    );
  	
    // Déclarer un autre fichier CSS
    wp_enqueue_style( 
        'base', 
        get_template_directory_uri() . '/css/base.css',
        array(), 
        '1.0',
        'all'
    );

    wp_enqueue_style(
        'normalize',
        get_template_directory_uri() . '/css/normalize.css',
        array('base'),
        '1.0',
        'all'
    );

    wp_enqueue_style( 
        'main', 
        get_template_directory_uri() . '/css/main.css',
        array('base', 'normalize'), 
        '1.0',
        'all'
    );

    // Déclarer les fonts Google

    wp_enqueue_style(
        'lato',
        'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,400;0,700;0,900;1,100;1,400;1,700;1,900&display=swap',
        array('base', 'normalize'),
        'all'
    );

    wp_enqueue_style(
        'nunito-sans',
        'https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,400;0,700;0,900;1,200;1,400;1,700;1,900&display=swap',
        array('base', 'normalize', 'lato'),
        'all'
    );


}
add_action( 'wp_enqueue_scripts', 'echellescelestes_register_assets' );
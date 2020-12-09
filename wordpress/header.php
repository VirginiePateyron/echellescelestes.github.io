<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Echelles Celestes</title>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
<?php wp_body_open(); ?>

<div class="background">
    <div id="home" class="container">
        <header class="main-header">
            
            <h1><a href="#" class="logo">Echelles Célestes</a></h1>

            <nav class="header-nav">
                <ul>
                    <li><a href="#first">Installation</a></li>
                    <li><a href="#second">Inspirations</a></li>
                    <li><a href="#third">Portraits</a></li>
                    <li><a href="#fourth">Jeu</a></li>
                    <li><a href="#fifth">Ressources</a></li>
                    <li><a href="#sixth">L'équipe</a></li>
                    <li><a href="#seventh">Contact</a></li>
                </ul>
            </nav>
        </header>

            <!-- Afficher la lune ou plusieurs étoiles, au survol, la lune grossit et au clic, le texte apparaît. Les lunes ou étoiles peuvent être déplacés par l'utilisateur -->
            <?php 
            $image = get_field('hero_img');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if( $image ) {
                echo wp_get_attachment_image( $image, $size ); 
            } else { ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noimg.png" alt="Image par défault">
            <?php }; ?>
        
    </div>
       
    

    
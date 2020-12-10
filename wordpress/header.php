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

            <details>
                <p>« Un observatoire astronomique est un lieu où on reçoit de l’information. Cette information est généralement donnée par de la lumière »</p>
                <summary><img src="/echellescelestes-web/img/moon-light.svg" alt="icone de lune au format svg dessinée"></summary>
            </details>

            <nav id="navbar">
                <ul>
                    <li class="menu-item"><a href="#first" href="javascript:void(0)">Installation</a></li>
                    <li class="menu-item"><a href="#second" href="javascript:void(0)">Inspirations</a></li>
                    <li class="menu-item"><a href="#third" href="javascript:void(0)">Portraits</a></li>
                    <li class="menu-item"><a href="#fourth" href="javascript:void(0)">Jeu</a></li>
                    <li class="menu-item"><a href="#fifth" href="javascript:void(0)">Ressources</a></li>
                    <li class="menu-item"><a href="#sixth" href="javascript:void(0)">L'équipe</a></li>
                    <li class="menu-item"><a href="#seventh" href="javascript:void(0)">Contact</a></li>
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
       
    

    
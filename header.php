<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <title>Echelles Celestes</title>
    <link rel="stylesheet" href="<?php echo THEME_DIR_CSS; ?>/base.css">
    <link rel="stylesheet" href="<?php echo THEME_DIR_CSS; ?>/main.css">
    <link rel="stylesheet" href="<?php echo THEME_DIR_CSS; ?>/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"> 

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>

    <header class="main-header">

        <h1 id="header"><a href="#" class="logo">Echelles Célestes</a></h1>

        <details>
            <p>« un planétarium c’est <span class="gradient">une salle de spectacle</span>, c’est le monde à l’envers »</p>
            <summary><img class="img-hero" src="<?php echo THEME_DIR_IMG; ?>/moon-light.svg"
                    alt="icone de lune au format svg dessinée"></summary>
        </details>

        <!-- <nav id="navbar">
            <ul>
                <li class="menu-item"><a href="#first" href="javascript:void(0)">l'installation</a></li>
                <li class="menu-item"><a href="#second" href="javascript:void(0)">inspirations</a></li>
                <li class="menu-item"><a href="#third" href="javascript:void(0)">galerie de portraits</a></li>
                <li class="menu-item"><a href="#fourth" href="javascript:void(0)">jouez du hasard</a></li>
                <li class="menu-item"><a href="#fifth" href="javascript:void(0)">ressources</a></li>
                <li class="menu-item"><a href="#sixth" href="javascript:void(0)">l'équipe</a></li>
                <li class="menu-item"><a href="#seventh" href="javascript:void(0)">contact</a></li>
            </ul>
        </nav> -->
        <div class="menu">
            <nav class="menu__nav" id= "navbar">
              <ul class="menu__list r-list">
                <li class="menu__group menu-item"><a href="#second" href="javascript:void(0)" class="menu__link r-link">inspirations</a></li>
                          <li class="menu-item menu__group "><a href="#third" href="javascript:void(0)" class="menu__link r-link">galerie de portraits</a></li>
                          <li class="menu-item menu__group "><a href="#fourth" href="javascript:void(0)" class="menu__link r-link">jouez du hasard</a></li>
                          <li class="menu-item menu__group "><a href="#fifth" href="javascript:void(0)" class="menu__link r-link">ressources</a></li>
                          <li class="menu-item menu__group "><a href="#sixth" href="javascript:void(0)" class="menu__link r-link">l'équipe</a></li>
                          <li class="menu-item menu__group "><a href="#seventh" href="javascript:void(0)" class="menu__link r-link">contact</a></li>
              </ul>
            </nav>
          </div>

        <div class="img-deco">
            <img src="<?php echo THEME_DIR_IMG; ?>/install-ech-celestes-sf-ws.png" alt="installation dessinée">
        </div>
    </header>
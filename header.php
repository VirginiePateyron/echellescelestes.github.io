<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <link rel="stylesheet" href="<?php echo THEME_DIR_CSS; ?>/base.css">
    <link rel="stylesheet" href="<?php echo THEME_DIR_CSS; ?>/main.css">
    <link rel="stylesheet" href="<?php echo THEME_DIR_CSS; ?>/header.css">
    <link rel="stylesheet" href="<?php echo THEME_DIR_CSS; ?>/installation.css"> <!-- first-section -->
    <link rel="stylesheet" href="<?php echo THEME_DIR_CSS; ?>/inspirations.css"> <!-- second-section -->
    <link rel="stylesheet" href="<?php echo THEME_DIR_CSS; ?>/portraits.css"> <!-- third-section -->
    <link rel="stylesheet" href="<?php echo THEME_DIR_CSS; ?>/jouez.css"> <!-- four-section -->
    <link rel="stylesheet" href="<?php echo THEME_DIR_CSS; ?>/ressources.css"> <!-- fifth-section -->
    <link rel="stylesheet" href="<?php echo THEME_DIR_CSS; ?>/equipe.css"> <!-- sixth-section -->
    <link rel="stylesheet" href="<?php echo THEME_DIR_CSS; ?>/contact.css"> <!-- seven-section -->
    <link rel="stylesheet" href="<?php echo THEME_DIR_CSS; ?>/partenaires.css"> <!-- eight-section -->
    
    <link rel="stylesheet" href="<?php echo THEME_DIR_CSS; ?>/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"> 


    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>

<div id="home">
    <header class="main-header">

        <h1 id="header"><a href="#" class="logo">Echelles Célestes</a></h1>

        <details>
            <p>« un planétarium c’est <span class="gradient">une salle de spectacle</span>, c’est le monde à l’envers »</p>
            <summary><img class="img-hero" src="<?php echo THEME_DIR_IMG; ?>/moon-light.svg"
                    alt="icone de lune au format svg dessinée"></summary>
        </details>

        <div class="menu">
            <nav class="menu__nav" id= "navbar">
              <ul class="menu__list r-list">
              <li class="menu__group menu-item">
                    <a href="#second" href="javascript:void(0)" class="menu__link r-link">installation</a>
                </li>
                <li class="menu__group menu-item">
                    <a href="#second" href="javascript:void(0)" class="menu__link r-link">inspirations</a>
                </li>
                <li class="menu-item menu__group ">
                    <a href="#third" href="javascript:void(0)" class="menu__link r-link">galerie de portraits</a>
                </li>
                <li class="menu-item menu__group ">
                    <a href="#fourth" href="javascript:void(0)" class="menu__link r-link">jouez du hasard</a>
                </li>
                <li class="menu-item menu__group ">
                    <a href="#fifth" href="javascript:void(0)" class="menu__link r-link">ressources</a>
                </li>
                <li class="menu-item menu__group ">
                    <a href="#sixth" href="javascript:void(0)" class="menu__link r-link">l'équipe</a>
                </li>
                <li class="menu-item menu__group ">
                    <a href="#seventh" href="javascript:void(0)" class="menu__link r-link">contact</a>
                </li>
              </ul>
            </nav>
          </div>

        <div class="img-deco">
            <img src="<?php echo THEME_DIR_IMG; ?>/install-ech-celestes-sf-ws.png" alt="installation dessinée">
        </div>
    </header>
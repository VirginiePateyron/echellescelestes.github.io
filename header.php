<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <meta name="description" content="<?php ?>">
    
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


    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>
<!-- Site web réalisé par <a href="www.vriessa.com">Virginie Pateyron</a> -->
<div id="home">
    <header class="main-header">
   
        <h1 id="header"><?php $mainTitle = the_field('header_main_title');
        if(!empty($mainTitle)) : ?><a href="#" class="logo"><?php echo $mainTitle; ?></a> <?php endif; ?></h1>
        <details>
            <p><?php the_field('header_moon_text');?></p>
            <summary><img loading="lazy" class="img-hero" src="<?php echo THEME_DIR_IMG; ?>/moon-light.svg"
                    alt="icone de lune au format svg dessinée"></summary>
        </details>

        <div class="menu">
            <nav class="menu__nav" id= "navbar">
              <ul class="menu__list r-list">
              <li class="menu__group menu-item">
                    <a href="#first" href="javascript:void(0)" class="menu__link r-link">l'installation</a>
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

        <!-- <div class="img-deco">
            <img loading="lazy" src="<?php echo THEME_DIR_IMG; ?>/install-ech-celestes-sf-ws.png" alt="installation dessinée">
        </div> -->

    </header>
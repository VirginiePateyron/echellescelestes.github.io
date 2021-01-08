<?php get_header();
    require_once('inc/installation.php'); //presentation de l'installation : planetarium et cloches
    require_once('inc/inspirations.php'); // presentation du livre et du documentaire
    require_once('inc/portraits.php'); // galerie des portraits
    require_once('inc/jouez.php'); //jeu interactif
    require_once('inc/ressources.php'); //ressources du padlet
    require_once('inc/equipe.php'); //presentation de l'equipe du projet
    require_once('inc/contact.php'); // section contact
    require_once('inc/partenaires.php'); //presentation des partenaires du projet
?> 
        

        <div class="scrolltop-wrap">
            <a href="#home" role="button" aria-label="Scroll to top">
                

                <img src="<?php echo THEME_DIR_IMG; ?>/astro/scrollTop.png" alt="dessin au trait d'une étoile suspendue par un ballon gonflable">
                <p>Retour en haut</p>
            </a>
            
        </div>

</div>


<?php get_footer(); ?>

</body>
</html>
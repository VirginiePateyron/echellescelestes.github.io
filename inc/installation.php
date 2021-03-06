

<main>
    <!--    Made by Erik Terwan    -->
    <!--   24th of November 2015   -->
    <!--        MIT License        -->
    <nav role="navigation">
    <div id="menuToggle">
        <!--
        A fake / hidden checkbox is used as click reciever,
        so you can use the :checked selector on it.
        -->
        <input type="checkbox" />
        
        <!--
        Some spans to act as a hamburger.
        
        They are acting like a real hamburger,
        not that McDonalds stuff.
        -->
        <span></span>
        <span></span>
        <span></span>
        
        <!--
        Too bad the menu has to be inside of the button
        but hey, it's pure CSS magic.
        -->
        <ul id="menu">
        <a href="#first"><li>l'installation</li></a>
        <a href="#second"><li>inspirations</li></a>
        <a href="#third"><li>galerie de portraits</li></a>
        <a href="#fourth"><li>jouez du hasard</li></a>
        <a href="#fifth"><li>ressources</li></a>
        <a href="#sixth"><li>l'équipe</li></a>
        <a href="#seventh"><li>contact</li></a>
        </ul>
    </div>
    </nav>

    <article class="first-section change-color" id="first">
        <div id="secondaryFirst">
        <h2 class="buttons gradient">
            <?php the_field('first_section_title') ?>
        </h2>
        
        <p class="h2-subtitle"><?php the_field('first_section_text'); ?>
            <!-- L’installation Echelles Célestes est un dispositif de --> <span class="gradient-text"><!-- réalité virtuelle à visée d’éducation artistique, culturelle et scientifique --></span><!-- , qui s’articule autour d’un planétarium et d’un cabinet de curiosité. --><br><br>
            <!-- Cette expérience immersive poétique a été conçue à partir d’une narration transmédia de  --><span class="title"><!-- " Ciel &nbsp;! Mon étoile " --></span> <!-- et de --> <span class="title"><!-- " Tours du monde, Tours du ciel&nbsp;" --></span><!-- &nbsp;. --></p>

        <div class="container">

        <div class="first-section-content">
            
            <section class="first-section-content-element" >
            <?php if(have_rows('first_section_first_area')):
                while(have_rows('first_section_first_area')): 
                    the_row();?>
                <div class="first-section-content-element-text">
                    <h3><?php the_sub_field('first_section_first_area_title');?></h3>
                    <p class="h3-subtitle"><?php the_sub_field('first_section_first_area_text');?></p>
                </div>
                
                <div class="first-section-content-element-img" data-aos="fade-down" data-aos-easing="linear"
                data-aos-duration="2000">
                    <img loading="lazy" src="<?php echo THEME_DIR_IMG; ?>/installation/dessin-instal.jpg"
                    alt="dessin de l'installation d'echelles celestes">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <?php endwhile; 
                endif; ?>
            </section>
            
            <section class="first-section-content-element">
            <?php if(have_rows('first_section_second_area')):
                while(have_rows('first_section_second_area')): 
                    the_row();?>
                <div class="first-section-content-element-text">
                    <h3><?php the_sub_field('first_section_second_area_title');?></h3>
                    <p class="h3-subtitle"><?php the_sub_field('first_section_second_area_text');?> </p>
                </div>
                <div class="first-section-content-element-items" data-aos="fade-down"
                    data-aos-easing="linear" data-aos-duration="1500">
                    <img loading="lazy" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="2000"
                        src="<?php echo THEME_DIR_IMG; ?>/installation/meudon.png" alt="">
                    <img loading="lazy" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="3000"
                        src="<?php echo THEME_DIR_IMG; ?>/installation/Brooke3.jpg" alt="">
                    <img loading="lazy" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="4000"
                        src="<?php echo THEME_DIR_IMG; ?>/installation/Lune.jpg" alt="">
                    <img loading="lazy" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="3000"
                        src="<?php echo THEME_DIR_IMG; ?>/installation/lagoon-nebula.png" alt="">
                    <img loading="lazy" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="2000"
                        src="<?php echo THEME_DIR_IMG; ?>/installation/thors-elmet.jpg" alt="">
                </div>
                <?php endwhile; 
                endif; ?>
            </section>
            

            <section class="first-section-content-element">
                <?php 
                $blockquote_group = get_field('first_section_blockquote_group');
                $blockquote_one = $blockquote_group['first_section_first_blockquote'];
                $blockquote_two = $blockquote_group['first_section_second_blockquote'];
                ?>
                <blockquote cite=""><?php echo $blockquote_one['first_section_first_blockquote_text'];?> </blockquote>
                <p class="blockquote-author"><?php echo $blockquote_one['first_section_first_blockquote_author'];?></p>
                

                <blockquote> <?php echo $blockquote_two['first_section_second_blockquote_text'];?> </blockquote>
                <p class="blockquote-author"><?php echo $blockquote_two['first_section_second_blockquote_author'];?></p>
                
            </section>
        </div>
    </div>
    </div>

</article>

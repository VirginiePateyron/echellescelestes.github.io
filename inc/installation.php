

<main>
    <article class="first-section change-color" id="first">
        <h2 class="buttons gradient">
            <button class="draw meet"><?php the_field('first_section_title') ?></button>
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
                    <img src="<?php echo THEME_DIR_IMG; ?>/installation/dessin-instal.jpg"
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
                    <img data-aos="fade-down" data-aos-easing="linear" data-aos-duration="2000"
                        src="<?php echo THEME_DIR_IMG; ?>/installation/meudon.png" alt="">
                    <img data-aos="fade-down" data-aos-easing="linear" data-aos-duration="3000"
                        src="<?php echo THEME_DIR_IMG; ?>/installation/Brooke3.jpg" alt="">
                    <img data-aos="fade-down" data-aos-easing="linear" data-aos-duration="4000"
                        src="<?php echo THEME_DIR_IMG; ?>/installation/Lune.jpg" alt="">
                    <img data-aos="fade-down" data-aos-easing="linear" data-aos-duration="3000"
                        src="<?php echo THEME_DIR_IMG; ?>/installation/lagoon-nebula.png" alt="">
                    <img data-aos="fade-down" data-aos-easing="linear" data-aos-duration="2000"
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

</article>

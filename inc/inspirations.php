

<article class="second-section change-color" id="second">
     <img loading="lazy" class="img-deco-bg" src="<?php echo THEME_DIR_IMG; ?>/astro/lowell_obs.jpg" alt="l'astronome Lowell observe l'espace avec une lunette astronomique" />
    <!-- <h2 class="gradient">inspirations</h2> -->
    <h2 class="buttons gradient">
        <?php the_field('second_section_title'); ?>
    </h2>

    <p class="h2-subtitle"> <?php the_field('second_section_text'); ?></p>

    <div class="container">

        <div class="second-section-content">
            <section class="second-section-content-element">
                <div class="second-section-content-element-col">
                <?php if(have_rows('second_section_first_area')):
                while(have_rows('second_section_first_area')): 
                    the_row();?>
                    <div class="second-section-content-element-col-child second-section-content-element-col-child-text">
                        <h3><?php the_sub_field('second_section_first_area_title'); ?></h3>
                        <p><?php the_sub_field('second_section_first_area_text'); ?></p>
                        <p class="second-section-content-element-col-child-item"><?php the_sub_field('second_section_first_area_text_author'); ?></p>
                    </div>
                    <div class="second-section-content-element-col-child second-section-content-element-col-child-img" data-aos="fade-left" data-aos-offset="300"
                    data-aos-easing="ease-in-sine" data-aos-duration="2000">
                        <img loading="lazy" src="<?php echo THEME_DIR_IMG; ?>/cielmonetoile.jpg"
                            alt="Image du livre Ciel mon étoile de Pierre Léna astrophysicien et Michel Serres philosophe">
                        <div class="second-section-content-element-col-child-btn">
                            <a href="https://www.lalibrairie.com/livres/ciel---mon-etoile--un-voyage-dans-les-observatoires_0-547806_9782356390271.html" target="_blank">Acquérir le livre</a>
                        </div>
                        <img loading="lazy" src="" alt="">
                    </div>
                    <?php endwhile; 
                endif; ?>
                </div>
            </section>
            <section class="second-section-content-element">
                <div class="second-section-content-element-col second-section-content-element-col-reverse">
                <?php if(have_rows('second_section_second_area')):
                while(have_rows('second_section_second_area')): 
                    the_row();?>
                    <div class="second-section-content-element-col-child second-section-content-element-col-child-text">
                        <h3><?php the_sub_field('second_section_second_area_title'); ?></h3>
                        <p><?php the_sub_field('second_section_second_area_text'); ?></p>
                        <p class="second-section-content-element-col-child-item"><?php the_sub_field('second_section_second_area_text_author'); ?></p>
                    </div>
                    <div class="second-section-content-element-col-child second-section-content-element-col-child-img" data-aos="fade-right" data-aos-offset="300"
                    data-aos-easing="ease-in-sine" data-aos-duration="2000">
                        <img loading="lazy" class="documentary" src="<?php echo THEME_DIR_IMG; ?>/reportage.jpg"
                            alt="Image du DVD Tours du monde , tours du ciel">
                        <div class="second-section-content-element-col-child-btn">
                            <a href="https://www.lalibrairie.com/livres/tours-du-monde-tours-du-ciel-2_0-576712_9782759804979.html?ctx=8dede6a1667b1196b8d08bbbc36680c1" target="_blank">Acquérir le documentaire</a>
                        </div>
                    </div>
                    <?php endwhile; 
                endif; ?>
                </div>
            </section>
        </div>
    </div>
</article>

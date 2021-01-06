

<article class="four-section change-color" id="fourth"><!-- background tableau d'école -->
         
    <!-- <h2 class="gradient">jouez du hasard</h2> -->
    <h2 class="buttons gradient">
        <button class="draw meet">jouez du hasard</button>
    </h2>  
        
        
    <p class="h2-subtitle">Immergez-vous dans la Voie Lactée et poursuivez votre exploration du ciel en choisissant le support qui vous correspond le mieux, et laissez le hasard faire le reste</p>

    <div class="container">
        <section class="four-section-content">
            <div class="four-section-content-element" id="container">
                <div class="four-section-content-element-card">
                <button class="front face" onclick="getPhrase()"><span class="gradient-text front-title"> La minute philo </span>envie de vous confronter à une grande question universelle ?</button>
                    <p class="back face" id="phrase"> </p>
                </div>
                <div class="four-section-content-element-card">
                    <button class="front face" onclick="getReading()"><span class="gradient-text front-title">La minute lecture </span>désireux de lire une citation poétique, scientifique ou mythologique ?</button>
                    <p class="back face" id="reading"> </p>
                </div>
                <div class="four-section-content-element-card">
                    <button class="front face" onclick="getPodcast()"><span class="gradient-text front-title">La minute podcast </span>tenté par l’écoute d’un extrait de « Tours du monde, tours du ciel » ?</button>
                    <p class="back face" id="podcast">
                        <audio controls src="<?php echo THEME_DIR_MEDIA; ?>/centre-philo.wav"> Your browser does not support the <code>audio</code> element.</audio> 
                        <audio controls src="<?php echo THEME_DIR_MEDIA; ?>/dico-ciel.wav"> Your browser does not support the <code>audio</code> element.</audio>
                        <audio controls src="<?php echo THEME_DIR_MEDIA; ?>/etoile.wav"> Your browser does not support the <code>audio</code> element.</audio> 
                        <audio controls src="<?php echo THEME_DIR_MEDIA; ?>/intro-gen.wav"> Your browser does not support the <code>audio</code> element.</audio>
                        <audio controls src="<?php echo THEME_DIR_MEDIA; ?>/questions.wav"> Your browser does not support the <code>audio</code> element.</audio>   
                        <audio controls autoplay src="<?php echo THEME_DIR_MEDIA; ?>/temps.wav"> Your browser does not support the <code>audio</code> element.</audio>    
                    </p>
                </div>
            </div>
           <!--  <iframe src="<?php echo THEME_DIR_IMG; ?>/astro/extra-music.svg">
                <img src="<?php echo THEME_DIR_IMG; ?>/astro/extra-music.png" alt="Un extraterrestre avec une table de musique DJ" />
            </iframe> -->
            
        </section>
    </div>
</article>


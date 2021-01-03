

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
                <p class="front face"><span class="gradient-text front-title"> La minute philo </span><button onclick="getPhrase()">envie de vous confronter à une grande question universelle ?</button></p>
                    <p class="back face" id="phrase"> </p>
                </div>
                <div class="four-section-content-element-card">
                    <p class="front face"><span class="gradient-text front-title">La minute lecture : </span><button onclick="getReading()">désireux de lire une citation poétique, scientifique ou mythologique ?</button>
                    </p>
                    <p class="back face" id="reading">« Contente-toi de savoir que tout est mystère
                        La création du monde et la tienne
                        La destinée du monde et la tienne »
                        <span class="gradient-text">Omar Khayam</span>
                    </p>
                </div>
                <div class="four-section-content-element-card">
                    <p class="front face"><span class="gradient-text front-title">La minute podcast : </span><button onclick="getPodcast()">tenté par l’écoute d’un extrait de « Tours du monde, tours du ciel » ?</button>
                    </p>
                    <p class="back face" id="podcast">
                        <audio
                            controls
                            src="media/A -MS intro gen sur l'observation - carte a son.wav">
                                Your browser does not support the
                                <code>audio</code> element.
                        </audio>
                    </p>
                </div>
            </div>
            <iframe src="<?php echo THEME_DIR_IMG; ?>/astro/extra-music.svg">
                <img src="<?php echo THEME_DIR_IMG; ?>/astro/extra-music.png" alt="Un extraterrestre avec une table de musique DJ" />
            </iframe>
            
        </section>
    </div>
</article>


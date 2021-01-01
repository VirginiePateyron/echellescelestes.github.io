<?php get_header(); ?>

<article class="third-section change-color" id="third"> <!-- background avec galaxie -->
            <div class="svg-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg">
                    <rect class="shape1"  />
                    <rect class="shape2"  />
                    <h2 class="gradient">galerie des portraits</h2>
                </svg>
            </div>
                
                <p class="h2-subtitle">Déambulez dans cette galerie et découvrez les grandes figures qui ont écrit une partie de l’histoire de l’astronomie en cliquant, à votre guise, sur les portraits.</p>

            <div class="container">

                <!-- <section class="third-section-content"> -->
                <!-- Ajout de la class js-modal pour activer le script van11y-accessible-modal-window-aria qui affiche une fenêtre modale accessible -->
                <ul class="third-section-content-element js-modal">
                    <li class="third-section-content-element-card">
                        <div class="third-section-content-element-card-one js-modal button" data-aos="fade-up"
                            data-aos-easing="linear" data-aos-duration="1500" data-modal-prefix-class="simple-animated"
                            data-modal-content-id="modal" data-modal-title="Claude Ptolémée"
                            data-modal-close-text="Close it" data-modal-close-title="Close it, really">
                            <div class="third-section-content-element-card-one-img">
                                <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/ptolemee_small.jpeg"
                                    alt="Portrait dessiné de Claude Ptolémée">
                            </div>
                            <h4>Claude Ptolémée</h4>
                        </div>

                        <div class="third-section-content-element-card-hover">
                            <p class="title text">« Je fus tantôt décris comme un génie et tantôt comme un simple
                                copieur. »</p>
                        </div>

                        <div class="hidden" id="modal">
                            <div class="third-section-content-element-card-clic">
                                <div class="third-section-content-element-card-clic-quote">
                                    <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/ptolemee_small.jpeg" alt="">
                                    <h5>Anecdote</h5>
                                    <p>Si certains le considéraient comme un génie, d’autres l’accusait de ne faire que
                                        transmettre des théories existantes. </p>
                                </div>
                                <div class="third-section-content-element-card-clic-bio">
                                    <h5>Biographie</h5>
                                    <p>Claude Ptolémée est né en 90 après JC.<br><br>

                                        C’est un astronome et astrologue grec à l’origine de nombreuses découvertes.
                                        <br><br>
                                        Son œuvre la plus connue est <span class="gradient-text">« Almageste » : un ouvrage d’astronomie de 13
                                        volumes qui rassemble presque 9 siècles d’observations astronomiques.</span>
                                        <br><br>
                                        On y trouve des informations sur la position des astres, un <span class="gradient-text">catalogue de plus de
                                        mille étoiles regroupées en constellations, les dates des éclipses et même des
                                        prévisions de phénomènes</span>.
                                        <br><br>
                                        Ptolémée reprend le modèle géocentrique d’Hipparque qui place une Terre fixe et
                                        ronde au milieu d’un univers en mouvement. Il meurt en 168 après JC. </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="third-section-content-element-card">
                        <div class="third-section-content-element-card-one js-modal button"
                            data-aos="fade-up" data-aos-easing="linear" data-aos-duration="2000">
                            <div class="third-section-content-element-card-one-img"><img
                                    src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/copernic_small.jpeg"
                                    alt="Portrait dessiné de Nicolas Copernic"></div>
                            <h4>Nicolas Copernic</h4>
                        </div>

                        <div class="third-section-content-element-card-hover">
                            <p class="title text">blah blah</p>
                        </div>
                        <div class="hidden" id="modal">
                            <div class="third-section-content-element-card-clic">
                                <div class="third-section-content-element-card-clic-quote">
                                    <img src="" alt="">
                                    <p></p>
                                </div>
                                <div class="third-section-content-element-card-clic-bio">
                                    <h5>Biographie</h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="third-section-content-element-card">
                        <div class="third-section-content-element-card-one js-modal button" data-aos="fade-up"
                            data-aos-easing="linear" data-aos-duration="1500">
                            <div class="third-section-content-element-card-one-img">
                                <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/brahe_small.jpeg"
                                    alt="Portrait dessiné de Tycho Brahé"></div>
                            <h4>Tycho Brahé</h4>
                        </div>

                        <div class="third-section-content-element-card-hover">
                            <p class="title text"></p>
                        </div>
                        <div class="hidden" id="modal">
                            <div class="third-section-content-element-card-clic">
                                <div class="third-section-content-element-card-clic-quote">
                                    <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/brahe_small.jpeg"
                                        alt="Portrait dessiné de Tycho Brahé">
                                    <p></p>
                                </div>
                                <div class="third-section-content-element-card-clic-bio">
                                    <h5>Biographie</h5>
                                    <p></p>
                                </div>
                                <button></button>
                            </div>
                        </div>
                    </li>
                    <li class="third-section-content-element-card">
                        <div class="third-section-content-element-card-one js-modal button" data-aos="fade-up"
                            data-aos-duration="2000">
                            <div class="third-section-content-element-card-one-img">
                                <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/galilee_small.jpeg" alt="Portrait dessiné de Galilée">
                            </div>
                                <h4>Galileo Galilei</h4>
                        </div>

                        <div class="third-section-content-element-card-hover">
                            <p class="title text"></p>
                        </div>
                        <div class="hidden" id="modal">
                            <div class="third-section-content-element-card-clic">
                                <div class="third-section-content-element-card-clic-quote">
                                    <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/galilee_small.jpeg"
                                        alt="Portrait dessiné de Galilée">
                                    <p></p>
                                </div>
                                <div class="third-section-content-element-card-clic-bio">
                                    <h5>Biographie</h5>
                                    <p></p>
                                </div>
                                <button></button>
                            </div>
                        </div>
                    </li>
                    <li class="third-section-content-element-card">
                            <div class="third-section-content-element-card-one js-modal button" data-aos="fade-up"
                                data-aos-duration="1500">
                                <div class="third-section-content-element-card-one-img">
                                    <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/kepler_small.jpeg" alt="Portrait dessiné de Johannes Kepler">
                                </div>
                                <h4>Johannes Kepler</h4>
                            </div>

                            <div class="third-section-content-element-card-hover">
                                <p class="title text"></p>
                            </div>
                            <div class="hidden" id="modal">
                                <div class="third-section-content-element-card-clic">
                                    <div class="third-section-content-element-card-clic-quote">
                                        <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/kepler_small.jpeg"
                                            alt="Portrait dessiné de Johannes Kepler">
                                        <p></p>
                                    </div>
                                    <div class="third-section-content-element-card-clic-bio">
                                        <h5>Biographie</h5>
                                        <p></p>
                                    </div>
                                    <button></button>
                                </div>
                            </div>
                        </li>
                    <li class="third-section-content-element-card">
                        <div class="third-section-content-element-card-one js-modal button" data-aos="fade-up"
                            data-aos-duration="1500">
                            <div class="third-section-content-element-card-one-img">
                                <img
                                    src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/pascal_small.jpeg"
                                    alt="Portrait dessiné de Blaise Pascal">
                            </div>
                            <h4>Blaise Pascal</h4>
                        </div>

                        <div class="third-section-content-element-card-hover">
                            <p class="title text"></p>
                        </div>
                        <div class="hidden" id="modal">
                            <div class="third-section-content-element-card-clic">
                                <div class="third-section-content-element-card-clic-quote">
                                    <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/pascal_small.jpeg" alt="">
                                    <p></p>
                                </div>
                                <div class="third-section-content-element-card-clic-bio">
                                    <h5>Biographie</h5>
                                    <p></p>
                                </div>
                                <button></button>
                            </div>
                        </div>
                    </li>
                    <li class="third-section-content-element-card">
                        <div class="third-section-content-element-card-one js-modal button" data-aos="fade-up"
                            data-aos-duration="3000">
                            <div class="third-section-content-element-card-one-img">
                                <img
                                    src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/newton.jpeg" alt="">
                            </div>
                            <h4>Isaac Newton</h4>
                        </div>

                        <div class="third-section-content-element-card-hover">
                            <p class="title text"></p>
                        </div>
                        <div class="hidden" id="modal">
                            <div class="third-section-content-element-card-clic">
                                <div class="third-section-content-element-card-clic-quote">
                                    <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/newton.jpeg" alt="">
                                    <p></p>
                                </div>
                                <div class="third-section-content-element-card-clic-bio">
                                    <h5>Biographie</h5>
                                    <p></p>
                                </div>
                                <button></button>
                            </div>
                        </div>
                    </li>
                    <li class="third-section-content-element-card">
                        <div class="third-section-content-element-card-one js-modal button" data-aos="fade-up"
                            data-aos-duration="2000">
                            <div class="third-section-content-element-card-one-img">
                                <img
                                    src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/romer_small.jpeg" alt="">
                            </div>
                            <h4>Ole Romer</h4>
                        </div>

                        <div class="third-section-content-element-card-hover">
                            <p class="title text"></p>
                        </div>
                        <div class="hidden" id="modal">
                            <div class="third-section-content-element-card-clic">
                                <div class="third-section-content-element-card-clic-quote">
                                    <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/romer_small.jpeg" alt="">
                                    <p></p>
                                </div>
                                <div class="third-section-content-element-card-clic-bio">
                                    <h5>Biographie</h5>
                                    <p></p>
                                </div>
                                <button></button>
                            </div>
                        </div>
                    </li>
                    <li class="third-section-content-element-card">
                            <div class="third-section-content-element-card-one js-modal button" data-aos="fade-up"
                                data-aos-duration="1500">
                                <div class="third-section-content-element-card-one-img">
                                    <img
                                        src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/herscher_small.jpeg" alt="">
                                </div>
                                <h4>William Herscher</h4>
                            </div>

                            <div class="third-section-content-element-card-hover">
                                <p class="title text"></p>
                            </div>
                            <div class="hidden" id="modal">
                                <div class="third-section-content-element-card-clic">
                                    <div class="third-section-content-element-card-clic-quote">
                                        <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/herscher_small.jpeg" alt="">
                                        <p></p>
                                    </div>
                                    <div class="third-section-content-element-card-clic-bio">
                                        <h5>Biographie</h5>
                                        <p></p>
                                    </div>
                                    <button></button>
                                </div>
                            </div>
                    </li>
                    <li class="third-section-content-element-card">
                        <div class="third-section-content-element-card-one js-modal button" data-aos="fade-up"
                            data-aos-duration="1000">
                            <div class="third-section-content-element-card-one-img">
                                <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/verne.jpeg" alt=""></div>
                                <h4>Jules Vernes</h4>
                            </div>

                            <div class="third-section-content-element-card-hover">
                                <p class="title text"></p>
                            </div>
                            <div class="hidden" id="modal">
                                <div class="third-section-content-element-card-clic">
                                    <div class="third-section-content-element-card-clic-quote">
                                        <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/verne.jpeg" alt="">
                                        <p></p>
                                    </div>
                                    <div class="third-section-content-element-card-clic-bio">
                                        <h5>Biographie</h5>
                                        <p></p>
                                    </div>
                                    <button></button>
                                </div>
                            </div>
                    </li>
                    <li class="third-section-content-element-card">
                        <div class="third-section-content-element-card-one js-modal button" data-aos="fade-up"
                            data-aos-duration="4000">
                            <div class="third-section-content-element-card-one-img">
                                <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/lowell_small.jpeg" alt=""></div>
                                <h4>Percival Lowell</h4>
                            </div>

                            <div class="third-section-content-element-card-hover">
                                <p class="title text"></p>
                            </div>
                            <div class="hidden" id="modal">
                                <div class="third-section-content-element-card-clic">
                                    <div class="third-section-content-element-card-clic-quote">
                                        <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/lowell_small.jpeg" alt="">
                                        <p></p>
                                    </div>
                                    <div class="third-section-content-element-card-clic-bio">
                                        <h5>Biographie</h5>
                                        <p></p>
                                    </div>
                                    <button></button>
                                </div>
                            </div>
                    </li>
                    <li class="third-section-content-element-card">
                        <div class="third-section-content-element-card-one js-modal button" data-aos="fade-up"
                            data-aos-duration="2000">
                            <div class="third-section-content-element-card-one-img">
                                <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/hubble_small.jpeg" alt=""></div>
                                <h4>Edwin Hubble</h4>
                            </div>

                            <div class="third-section-content-element-card-hover">
                                <p class="title text"></p>
                            </div>

                            <div class="hidden" id="modal">
                                class="third-section-content-element-card-clic">
                                <div class="third-section-content-element-card-clic-quote">
                                    <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/hubble_small.jpeg" alt="">
                                    <p></p>
                                </div>
                                <div class="third-section-content-element-card-clic-bio">
                                    <h5>Biographie</h5>
                                    <p></p>
                                </div>
                                <button></button>
                            </div>
                    </li>       
                    <li class="third-section-content-element-card">
                        <div class="third-section-content-element-card-one js-modal button" data-aos="fade-up" data-aos-duration="1500">
                            <div class="third-section-content-element-card-one-img">
                                <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/auger_small.jpeg" alt=""></div>
                                <h4>Pierre Auger</h4>
                            </div>

                            <div class="third-section-content-element-card-hover">
                                <p class="title text"></p>
                            </div>
                            <div class="hidden" id="modal">
                                class="third-section-content-element-card-clic">
                                <div class="third-section-content-element-card-clic-quote">
                                    <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/auger_small.jpeg" alt="">
                                    <p></p>
                                </div>
                                <div class="third-section-content-element-card-clic-bio">
                                    <h5>Biographie</h5>
                                    <p></p>
                                </div>
                                <button></button>
                            </div>
                    </li>
                    <li class="third-section-content-element-card">
                        <div class="third-section-content-element-card-one js-modal button" data-aos="fade-up" data-aos-duration="2500">
                            <div class="third-section-content-element-card-one-img">
                                <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/lovell_small.jpeg" alt=""></div>
                                <h4>Bernard Lovell</h4>
                            </div>

                            <div class="third-section-content-element-card-hover">
                                <p class="title text"></p>
                            </div>
                            <div class="hidden" id="modal">
                                class="third-section-content-element-card-clic">
                                <div class="third-section-content-element-card-clic-quote">
                                    <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/lovell_small.jpeg" alt="">
                                    <p></p>
                                </div>
                                <div class="third-section-content-element-card-clic-bio">
                                    <h5>Biographie</h5>
                                    <p></p>
                                </div>
                                <button></button>
                            </div>
                    </li>
                    <li class="third-section-content-element-card">
                        <div class="third-section-content-element-card-one js-modal button" data-aos="fade-up" data-aos-duration="4000">
                            <div class="third-section-content-element-card-one-img">
                                <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/leonov_small.png" alt=""></div>
                                <h4>Alexei Leonov</h4>
                            </div>

                            <div class="third-section-content-element-card-hover">
                                <p class="title text"></p>
                            </div>
                            <div class="hidden" id="modal">
                                <div class="third-section-content-element-card-clic">
                                    <div class="third-section-content-element-card-clic-quote">
                                        <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/leonov_small.png" alt="">
                                        <p></p>
                                    </div>
                                    <div class="third-section-content-element-card-clic-bio">
                                        <h5>Biographie</h5>
                                        <p></p>
                                    </div>
                                    <button></button>
                                </div>
                            </div>
                    </li>
                    <li class="third-section-content-element-card">
                        <div class="third-section-content-element-card-one js-modal button" data-aos="fade-up" data-aos-duration="2500">
                            <div class="third-section-content-element-card-one-img"><img
                                    src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/ham_small.jpeg" alt=""></div>
                                <h4>Ham</h4>
                            </div>

                            <div class="third-section-content-element-card-hover">
                                <p class="title text"></p>
                            </div>
                            <div class="hidden" id="modal">
                                <div class="third-section-content-element-card-clic">
                                    <div class="third-section-content-element-card-clic-quote">
                                        <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/ham_small.jpeg" alt="">
                                        <p></p>
                                    </div>
                                    <div class="third-section-content-element-card-clic-bio">
                                        <h5>Biographie</h5>
                                        <p></p>
                                    </div>
                                    <button></button>
                                </div>
                            </div>
                    </li>
                    <li class="third-section-content-element-card">
                        <div class="third-section-content-element-card-one js-modal button" data-aos="fade-up" data-aos-duration="1500">
                            <div class="third-section-content-element-card-one-img">
                                <img
                                    src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/clooney_small.jpeg" alt=""></div>
                                <h4>Georges Clooney</h4>
                            </div>

                            <div class="third-section-content-element-card-hover">
                                <p class="title text"></p>
                            </div>
                            <div class="hidden" id="modal">
                                <div class="third-section-content-element-card-clic">
                                    <div class="third-section-content-element-card-clic-quote">
                                        <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/clooney_small.jpeg" alt="">
                                        <p></p>
                                    </div>
                                    <div class="third-section-content-element-card-clic-bio">
                                        <h5>Biographie</h5>
                                        <p></p>
                                    </div>
                                    <button></button>
                                </div>
                            </div>
                    </li>
                    <li class="third-section-content-element-card">
                        <div class="third-section-content-element-card-one js-modal button" data-aos="fade-up" data-aos-duration="1000">
                            <div class="third-section-content-element-card-one-img">
                                <img
                                    src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/perry_small.jpeg" alt=""></div>
                                <h4>Katy Perry</h4>
                            </div>

                            <div class="third-section-content-element-card-hover">
                                <p class="title text"></p>
                            </div>
                            <div class="hidden" id="modal">
                                <div class="third-section-content-element-card-clic">
                                    <div class="third-section-content-element-card-clic-quote">
                                        <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/perry_small.jpeg" alt="">
                                        <p></p>
                                    </div>
                                    <div class="third-section-content-element-card-clic-bio">
                                        <h5>Biographie</h5>
                                        <p></p>
                                    </div>
                                    <button></button>
                                </div>
                            </div>
                    </li>
                    <li class="third-section-content-element-card">
                        <div class="third-section-content-element-card-one js-modal button" data-aos="fade-up" data-aos-duration="1500">
                            <div class="third-section-content-element-card-one-img">
                                <img
                                    src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/thorgall_small.png" alt=""></div>
                                <h4>Thorgal</h4>
                            </div>

                            <div class="third-section-content-element-card-hover">
                                <p class="title text"></p>
                            </div>
                            <div class="hidden" id="modal">
                                <div class="third-section-content-element-card-clic">
                                    <div class="third-section-content-element-card-clic-quote">
                                        <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/thorgall_small.png" alt="">
                                        <p></p>
                                    </div>
                                    <div class="third-section-content-element-card-clic-bio">
                                        <h5>Biographie</h5>
                                        <p></p>
                                    </div>
                                    <button></button>
                                </div>
                            </div>
                    </li>
                    <li class="third-section-content-element-card">
                        <div class="third-section-content-element-card-one js-modal button" data-aos="fade-up" data-aos-duration="1500">
                            <div class="third-section-content-element-card-one-img"><img
                                    src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/terechkova_small.jpeg" alt=""></div>
                            <h4>Valentina Terechkova</h4>
                        </div>

                        <div class="third-section-content-element-card-hover">
                            <p class="title text"></p>
                        </div>
                        <div class="hidden" id="modal">
                            <div class="third-section-content-element-card-clic">
                                <div class="third-section-content-element-card-clic-quote">
                                    <img src="<?php echo THEME_DIR_IMG; ?>/gallery-portrait/terechkova_small.jpeg" alt="">
                                    <p></p>
                                </div>
                                <div class="third-section-content-element-card-clic-bio">
                                    <h5>Biographie</h5>
                                    <p></p>
                                </div>
                                <button></button>
                            </div>
                        </div>
                    </li>
                </ul>
                <!--  </section> -->
            </div>
        </article>

<?php get_footer(); ?>
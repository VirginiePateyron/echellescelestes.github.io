/* création d'une fonction qui déplace le menu de navigation à droite au scroll une fois passé le héro */

window.onscroll = function() {myFunction()};

const navbar = document.getElementById("navbar");
const sticky = navbar.offsetTop;

const menuItem = document.getElementsByClassName("menu-item");

function myFunction() {
  /* largeur = $(window).width();
  if (largeur < 800) { */
    
    if (window.pageYOffset >= sticky) {
      
      navbar.classList.add("sticky"); // ajouter une classe à l'élément id = navbar
      document.getElementById("header").style.fontSize = "4rem";  // redimensionner le titre h1 au scroll
      document.getElementById("header").style.fontWeight = "lighter"; // changer la graisse de la police au scroll
      for(let i = 0; i < menuItem.length; i++){
        menuItem[i].classList.add("positionOff") //ajouter une classe à l'élement avec la classe menu-item qui est une liste donc appeler un tableau pour prendre en compte tous les éléments de liste avec cette classe
      }
    } else {
      navbar.classList.remove("sticky")
      document.getElementById("header").style.fontSize = "8rem"; // revenir aux propriétés définies sur le titre h1 dans le CSS en revenant en haut du site
      document.getElementById("header").style.fontWeight = "initial"; // revenir aux propriétés définies sur le titre h1 dans le CSS en revenant en haut du site
      for(let i = 0; i < menuItem.length; i++){
        menuItem[i].classList.remove("positionOff")
      }
    }
  }

  $(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
  
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 5000, function(){
  
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });



/* Créer une fonction qui retourne la carte au clic */
document.addEventListener('DOMContentLoaded', function () {
  [].forEach.call(document.querySelectorAll(".four-section-content-element-card"), function(card, i, cards){
    card.addEventListener("click", function(e){
      e.currentTarget.classList.toggle("flipped");
    });
  });
});

/* Créer un bouton qui affiche un résultat aléatoirement au clic */

function getPhrase() {
  var listePhrases = new Array(
    "D’après vous, qu’est-ce que le ciel nous a toujours raconté ?",
    "D’où venons-nous ?",
    "L’univers est-il fini ou infini ?",
    "Qu’est-ce que le rien ? C’est quoi le vide ?",
    "Et toi, quelle place as-tu dans l’univers ?",
    "L’espace fait-il partie du jour ou de la nuit ?",
    "Diriez-vous que connaître l’heure, c’est mesurer le temps ?",
    "A votre avis, observons-nous toujours le même objet ?"
  );

  document.getElementById("phrase").innerHTML =
    listePhrases[Math.floor(Math.random() * listePhrases.length)];
}

function getReading() {
  var listeReading = new Array(
    "Contente-toi de savoir que tout est mystère, La création du monde et la tienne, La destinée du monde et la tienne, Omar Khayam",
    "Je tâte dans la nuit ce mur, l’éternité. Et à voir les apparitions des comètes, on serait tenté de croire que le ciel lui-même a besoin d’acteurs en représentation. Victor Hugo",
    "Et j’aime la nuit écouter les étoiles. C’est comme cinq cent million de grelots… Antoine de St Exupery - Le petit prince",
    "Ce qui est admirable, ce n'est pas que le champ des étoiles soit si vaste, c'est que l'homme l'ait mesuré. Anatole-François Thibault, dit Anatole France",
    " ... tous les espaces du monde entier ne sont qu’un point, qu’un léger atome, comparés à son immensité. S’il est ainsi, comme je l’avance (car quelle proportion du fini à l’infini ?), je demande, qu’est-ce que le cours de la vie d’un homme ? qu’est-ce qu’un grain de poussière qu’on appelle la terre ? qu’est-ce qu’une petite portion de cette terre que l’homme possède et qu’il habite ? Pascal, « Pensées »",
    "La lumière émise par le gaz chaud de l’étoile Aldébaran met 65 années pour nous parvenir : cette lumière est donc partie quand vos grands parents avaient votre âge. Pierre Léna",
    "Dans l’espace qui nous entoure, où se trouvent les étoiles, il y a des nuages de gaz. Ces nuages contiennent aussi de la poussière, et parfois ils en contiennent tellement qu’ils font écran et cachent les étoiles qui sont derrière eux. Pour nous, observateurs depuis la Terre, on les perçoit comme une sorte de découpure noire, irrégulière sur le fond brillant rempli d’étoiles, que l’on nomme sac à charbon. Ces nuages intéressent beaucoup les astronomes, car ils sont le lieu où se forment les étoiles avant même que la nébuleuse devienne brillante quand elle est éclairée par des étoiles déjà formées. Là, dans le sac à charbon, il n’y a encore aucune étoile formée, il n’y a « juste » que la matière première de futures étoiles. Cette matière première ce sont des poussières, du sable, extrêmement fin, mélangé de gaz, qui un jour donnera des étoiles. Pierre Léna",
    "Ce que remarquaient les Incas dans la Voie lactée n’étaient pas les nuages faits d’une poussière d’étoiles brillantes, mais ces régions sombres, apparemment vides qui les séparent. (…) Ils ont donné des noms à ces formes que dessinent les nuages sombres de la Voie lactée. Leur ciel est donc dans le manque, l’absence et non dans l’éclat, la présence… » Pierre Léna / [Extrait p. 25 de Ciel ! Mon étoile]",
    "Les chinois estimaient que les évènements du ciel et de la Terre exerçaient une influence mutuelle. Par exemple, si un empereur faisait le bien, traitait bien son peuple, il pouvait émouvoir le ciel. Les phénomènes inhabituels tels que les éclipses étaient alors rares. Si cet empereur avait un mauvais comportement, il se produisait toutes sortes de phénomènes inhabituels : les éclipses, les nouvelles étoiles, les comètes, etc. apparaissaient afin de mettre l’empereur en garde. (...) Oui, dans la société féodale, on liait les phénomènes célestes et terrestres. L’empereur était semblable à l’étoile polaire, et tous les mandarins, et tout le peuple, tournaient autour de lui. [Extrait de Tours du monde, tours du ciel - XZ]",
    "L’astronome grec Ératosthène (celui qui le premier avait mesuré la dimension de la Terre) va mettre dans son catalogue de constellations la chevelure de Bérénice, elle y demeure pour nous autres aujourd’hui. Les archéologues et les historiens nous disent que Bérénice a vraiment existée. Elle est chanceuse car avec un prince polonais que son astronome voulait flatter, elle est le seul personnage de l’histoire humaine à posséder son nom dans une constellation. Point de Jules César, de Napoléon ou de Charles de Gaulle mais une Bérénice ! Et aujourd’hui, même en payant très très cher, il est impossible de donner son nom à une constellation… les astronomes y veillent ! Pierre Léna",
    "Lorsque j’étais petit, si je rencontrais un monsieur ou une dame avec une craie à la main en train de tracer des équations sur un tableau, je disais : “Tiens, voilà une mathématicienne”. Si je voyais un monsieur avec une blouse blanche tachée de vert, de rouge ou de bleu, je disais : “Tiens, voilà un chimiste”. Si je voyais un monsieur assis sur une chaise inconfortable en train de regarder le ciel, je disais : “Tiens, voilà un astronome” et ainsi de suite… C’est-à-dire que je pouvais faire une classification de la science par l’interprétation des gestes du corps. Aujourd’hui, où que je rentre, je vois quelqu’un regarder un écran d’ordinateur et là, je ne peux plus faire de classification car ce monsieur ou cette dame s’occupe de n’importe quoi. [Extrait p. 135 et 136 de Ciel ! Mon étoile - MS]",
    "Je regardais alternativement l’explication scientifique et l’explication mythique, je disais à mon voisin, en français et en riant : “L’explication mythique me paraît à la fois plus profonde et plus détaillée que l’explication scientifique”. Derrière moi se tenait un Américain : “Could you translate ?” me dit-il ; alors après que je lui aie traduit, il me répondit : “Je suis géologue et je suis d’accord avec vous !”. Je percevais une sorte d’accord entre les deux points de vue, alors qu’en général, on dit qu’il y a conflit entre le mythique et la science. Nous avons dans la tête l’idée d’un conflit entre l’archaïsme de certaines explications et la modernité ; il y avait ici, au contraire, une sorte d’accord plus ou moins secret entre les deux, comme si l’explication mythique prenait l’histoire dans sa globalité. [Extrait p. 24 de Ciel ! Mon étoile - MS]",
    "A partir du moment où Römer connaît la vitesse de la lumière, il peut en déduire que regarder le ciel, regarder les étoiles, c’est regarder dans le passé puisqu’il faut un certain temps à la lumière pour nous parvenir. [Extrait de Tours du monde, tours du ciel]"
  );

  document.getElementById("reading").innerHTML =
  listeReading[Math.floor(Math.random() * listeReading.length)];
}
/* 
function getPodcast() {
  let listePodcast = new Array(
    "/media/centre-philo.wav",
    "/media/dico-ciel.wav",
    "/media/etoile.wav",
    "/media/intro-gen.wav",
    "/media/questions.wav",
    "/media/temps.wav"
  );
  let templateAudio = 

  document.getElementById("podcast").innerHTML =
  listePodcast[Math.floor(Math.random() * listePodcast.length);
} */


/* Créer un menu responsive */




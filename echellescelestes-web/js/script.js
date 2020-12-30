/* création d'une fonction qui déplace le menu de navigation à droite au scroll une fois passé le héro */

window.onscroll = function() {myFunction()};

const navbar = document.getElementById("navbar");
const sticky = navbar.offsetTop;

const menuItem = document.getElementsByClassName("menu-item");

function myFunction() {
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

/* Créer une fonction qui retourne la carte au clic */
document.addEventListener('DOMContentLoaded', function () {
  [].forEach.call(document.querySelectorAll(".four-section-content-element-card"), function(card, i, cards){
    card.addEventListener("click", function(e){
      e.currentTarget.classList.toggle("flipped");
    });
  });
});



/* Créer des tailles aléatoires sur les cartes des portraits */


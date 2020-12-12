/* création d'une fonction qui déplace le menu de navigation à droite au scroll une fois passé le héro */

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

var menuItem = document.getElementsByClassName("menu-item");

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky"); // ajouter une classe à l'élément id = navbar
    document.getElementById("header").style.fontSize = "6rem";  // redimensionner le titre h1 au scroll
    document.getElementById("header").style.fontWeight = "lighter"; // changer la graisse de la police au scroll
    for(let i = 0; i < menuItem.length; i++){
      menuItem[i].classList.add("positionOff") //ajouter une classe à l'élement avec la classe menu-item qui est une liste donc appeler un tableau pour prendre en compte tous les éléments de liste avec cette classe
    }
  } else {
    navbar.classList.remove("sticky")
    document.getElementById("header").style.fontSize = "12rem"; // revenir aux propriétés définies sur le titre h1 dans le CSS en revenant en haut du site
    document.getElementById("header").style.fontWeight = "initial"; // revenir aux propriétés définies sur le titre h1 dans le CSS en revenant en haut du site
    for(let i = 0; i < menuItem.length; i++){
      menuItem[i].classList.remove("positionOff")
    }
  }
}



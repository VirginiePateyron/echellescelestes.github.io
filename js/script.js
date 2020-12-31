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




/* Créer une fonction qui retourne la carte au clic */
document.addEventListener('DOMContentLoaded', function () {
  [].forEach.call(document.querySelectorAll(".four-section-content-element-card"), function(card, i, cards){
    card.addEventListener("click", function(e){
      e.currentTarget.classList.toggle("flipped");
    });
  });
});



/* Créer un menu responsive */

/* (function(){
  'use strict';

  class Menu {
    constructor(settings) {
      this.menuNode = settings.menuNode;
      this.state = false;
      this.menuStateTextNode = settings.menuStateTextNode || this.menuNode.querySelector('.menu__screen-reader');
      this.menuOpenedText = settings.menuOpenedText || 'Open menu';
      this.menuClosedText = settings.menuClosedText || 'Close menu';
    }
    
    changeState(state) {
      return this.state = !state;
    }
    
    changeStateText(state, node) {
      let text = (state !== true) ? this.menuOpenedText : this.menuClosedText;
      
      node.textContent = text;
      return text; 
    }
           
    toggleMenuState(className) {   
      
      let state;
      
      if (typeof className !== 'string' || className.length === 0) {
        return console.log('you did not give the class for the toggleState function');
      } 
            
      state = this.changeState(this.state);
      
      this.changeStateText(state, this.menuStateTextNode);
      this.menuNode.classList.toggle(className);
      
      return state;  
    }
  }

  const jsMenuNode = document.querySelector('.menu');
  const demoMenu = new Menu ({
    menuNode: jsMenuNode
  });
  
  function callMenuToggle(event) {
    demoMenu.toggleMenuState('menu_activated');
  }
  
  jsMenuNode.querySelector('.menu__toggle').addEventListener('click', callMenuToggle);
})(); */


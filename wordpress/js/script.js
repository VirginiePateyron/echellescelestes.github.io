window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

var menuItem = document.getElementsByClassName("menu-item");

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
    for(let i = 0; i < menuItem.length; i++){
      menuItem[i].classList.add("positionOff")
    }
  } else {
    navbar.classList.remove("sticky")
    for(let i = 0; i < menuItem.length; i++){
      menuItem[i].classList.remove("positionOff")
    }
  }
}
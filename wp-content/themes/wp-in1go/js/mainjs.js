//!Toggle mobile menu -------------------------------------------------------------------------------------------------------------------------->
//!I suggest to leave this function for it might break the whole navigation menu
window.onload=function(){
  const toggle = document.querySelector('.toggle');
const menu = document.querySelector('.menu');
function toggleMenu() {
    if (menu.classList.contains('active')) {
        menu.classList.remove('active');
        //*adds the menu(burger)
        toggle.querySelector("a").innerHTML = "<i class='fa fa-bars'></i>";
        document.getElementById("div1").removeAttribute("onclick");
        document.on
        
    } else {
        menu.classList.add("active");
        //*adds the close(x) icon
        document.getElementById("div1").setAttribute("onclick", "return false;");
        toggle.querySelector("a").innerHTML = "<i class='fa fa-times'></i>";
    }
}
//*Event listener
toggle.addEventListener('click', toggleMenu, false);



  
//!Toggle Mobile Menu -------------------------------------------------------------------------------------------------------------------------->
//!Submenu ------------------------------------------------------------------------------------------->
// ? there ar two choices of navmenu hover properties its either this or the new one
// todo merge the two navigation menu to have thier combined properties
const items = document.querySelectorAll('.item');
// *Activate submenu --------------------------------------------------------------------------------------------------------------------------->
//!Toggle Mobile Menu -------------------------------------------------------------------------------------------------------------------------->

//!Submenu Toggle Effect Mobile Based ---------------------------------------------------------------------------------------------------------->
function toggleItem() {
  if (document.documentElement.clientWidth < 1100 && this.classList.contains("submenu-active")) {
      this.classList.remove("submenu-active");
  } else if (document.documentElement.clientWidth > 1000 && menu.querySelector(".submenu-active")) {
      menu.querySelector("submenu-active").classList.remove("submenu-active");
      this.classList.add("submenu-active");
  } else if (document.documentElement.clientWidth < 999 ) {
      this.classList.add("submenu-active");
  }
}
for (let item of items) {
  if (item.querySelector(".submenu")) {
      item.addEventListener("click", toggleItem, false);
      item.addEventListener("keypress", toggleItem, false);
  }
}
//*Activate submenu ---------------------------------------------------------------------------------------------------------------------------->
//*Close Submenu From Anywhere  ---------------------------------------------------------------------------------------------------------------->
function closeSubmenu(e) {
  let isClickInside = menu.contains(e.target);
  if (!isClickInside && menu.querySelector(".submenu-active")) {
      menu.querySelector(".submenu-active").classList.remove("submenu-active");
  }
}
//*Close Submenu From Anywhere  ---------------------------------------------------------------------------------------------------------------->
//*Event listener
document.addEventListener("click", closeSubmenu, false);
//!Submenu Toggle Effect Mobile Based ---------------------------------------------------------------------------------------------------------->

//!Submenu MouseHover Effect Web Based --------------------------------------------------------------------------------------------------------->
//?Menu Hover

jQuery(document).ready(function($) {
  // Code that uses jQuery's $ can follow here.
$('.item.has-submenu').on({
    mouseenter: function() {
      let self = $(this);
      setTimeout(function() {
        $('.item.has-submenu').addClass("submenu-active");
      }, 0);
    }
  });
 $('.submenu').on({
    mouseleave: function() {
      let self = $(this);
      setTimeout(function() {
        $('.item.has-submenu').removeClass('submenu-active');
      }, 300);
    }
  });
});


// function navhover() {

// }

// document.addEventListener('DOMContentLoaded',navhover, false);
  //!Submenu MouseHover Effect Web Based --------------------------------------------------------------------------------------------------------->
}
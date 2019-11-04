// Nav Bar js

window.onload = function() {
  let navIcon = document.getElementById("hamburger");
  let navMenu = document.querySelector(".nav-menu");
  let navButton = document.querySelector(".nav-button");

  function navClick() {
    navIcon.classList.toggle("active");
    navMenu.classList.toggle("nav-menu-items");
  }

  navButton.addEventListener("click", navClick);

  const subMenuIcon = document.querySelector(".sub-menu-toggle");
  const subMenu = document.querySelector(".sub-menu");

  function windowWidth(media) {
    if (media.matches) {
      navMenu.classList.remove("nav-menu-items");
    }
  }

  let media = window.matchMedia("(min-width: 992px)");
  windowWidth(media); // Call listener function at run time
  media.addListener(windowWidth); // Attach listener function on state changes

  subMenuIcon.addEventListener("click", () => {
    subMenu.classList.toggle("sub-flex");
  });
};

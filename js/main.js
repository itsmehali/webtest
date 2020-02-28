"use strict";

const sidebarUl = document.querySelector(".nav-sidebar");

const toggleNav = () => {
  sidebarUl.hidden = false;
  sidebarUl.classList.toggle("revealed");
};

document
  .querySelector(".btn-toggle-nav")
  .addEventListener("click", toggleNav, { passive: true });

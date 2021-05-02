// function for hamburger menu on small screens

function hamburger() {
    let x = document.getElementById("jj-nav");
    if (x.className === "jj-nav") {
        x.className += " responsive";
    } else {
        x.className = "jj-nav";
    }
} 

// sticky function for nav

window.onscroll = function() {stickyNav()};
const navbar = document.getElementById("jj-header");
const mainContent = document.getElementById("jj-header-page");
const offset = mainContent.offsetHeight - navbar.offsetHeight - 50;
const offsetStr = offset.toString().concat("px");

function stickyNav() {

    if (document.body.scrollTop > offset || document.documentElement.scrollTop > offset && window.innerWidth > 1200) {
        navbar.style.position = "absolute";
        navbar.style.top = offsetStr;
    } else if(document.documentElement.scrollTop > offset && window.innerWidth > 700) {
        navbar.style.position = "absolute";
        navbar.style.top = offsetStr;
    } else if (document.documentElement.scrollTop > offset && window.innerWidth < 700) {
        navbar.style.position = "absolute";
        navbar.style.top = offsetStr;
    } else {
        navbar.style.position = "fixed";
        navbar.style.top = "0";
    }
} 
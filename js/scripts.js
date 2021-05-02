function hamburger() {
    let x = document.getElementById("jj-nav");
    if (x.className === "jj-nav") {
        x.className += " responsive";
    } else {
        x.className = "jj-nav";
    }
} 

window.onscroll = function() {stickyNav()};
let navbar = document.getElementById("jj-header");

function stickyNav() {

    if (document.body.scrollTop > 1300 || document.documentElement.scrollTop > 1300 && window.innerWidth > 1200) {
        navbar.style.position = "absolute";
        navbar.style.top = "1300px";
    } else if(document.documentElement.scrollTop > 1000 && window.innerWidth < 1200 && window.innerWidth > 700) {
        navbar.style.position = "absolute";
        navbar.style.top = "1000px";
    } else if (document.documentElement.scrollTop > 1300 && window.innerWidth < 700) {
        navbar.style.position = "absolute";
        navbar.style.top = "1300px";
    } else {
        navbar.style.position = "fixed";
        navbar.style.top = "0";
    }
} 
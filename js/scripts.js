function hamburger() {
    let x = document.getElementById("jj-nav");
    if (x.className === "jj-nav") {
        x.className += " responsive";
    } else {
        x.className = "jj-nav";
    }
} 

// window.onscroll = function() {stickyNav()};
// let navbar = document.getElementById("jj-header");
// let sticky = navbar.offsetTop;

// function stickyNav() {

//     if (window.pageYOffset >= sticky) {
//         navbar.classList.add("sticky");
//     } else {
//         navbar.classList.remove("sticky");
//     }
// } 
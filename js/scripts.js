function hamburger() {
    let x = document.getElementById("jj-nav");
    if (x.className === "jj-nav") {
        x.className += " responsive";
    } else {
        x.className = "jj-nav";
    }
} 
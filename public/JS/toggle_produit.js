

// Cadre
let togg1 = document.getElementById("togg1");
// Taille
let togg2 = document.getElementById("togg2");
//Specification
let togg3 = document.getElementById("togg3");


// Dans cadre
let togg4 = document.getElementById("togg4");
let togg5 = document.getElementById("togg5");
let togg6 = document.getElementById("togg6");
let togg7 = document.getElementById("togg7");
let togg8 = document.getElementById("togg8");



let d1 = document.getElementById("produit_d1");
let d2 = document.getElementById("produit_d2");
let d3 = document.getElementById("produit_d3");
let d4 = document.getElementById("produit_d4");
let d5 = document.getElementById("produit_d5");
let d6 = document.getElementById("produit_d6");
let d7 = document.getElementById("produit_d7");
let d8 = document.getElementById("produit_d8");



d2.style.display = "none";
d3.style.display = "none";
d4.style.display = "none";
d5.style.display = "none";
d6.style.display = "none";
d7.style.display = "none";
d8.style.display = "none";



togg1.addEventListener("click", () => {
    if(getComputedStyle(d1).display !== "none"){



    } else {
        d1.style.display = "block";
        d2.style.display = "none";
        d3.style.display = "none";

    }
})

togg2.addEventListener("click", () => {
    if(getComputedStyle(d2).display !== "none"){

        d1.style.display = "none";
    } else {
        d2.style.display = "block";
        d1.style.display = "none";
        d3.style.display = "none";
        d4.style.display = "none";
        d5.style.display = "none";
        d6.style.display = "none";
        d7.style.display = "none";
        d8.style.display = "none";

    }
})






// Dans cadre

togg4.addEventListener("click", () => {
    if(getComputedStyle(d4).display !== "none"){


    } else {
        d4.style.display = "block";
        d5.style.display = "none";
        d6.style.display = "none";
        d7.style.display = "none";
        d8.style.display = "none";

    }
})

togg5.addEventListener("click", () => {
    if(getComputedStyle(d5).display !== "none"){


    } else {
        d5.style.display = "block";
        d4.style.display = "none";
        d6.style.display = "none";
        d7.style.display = "none";
        d8.style.display = "none";


    }
})

togg6.addEventListener("click", () => {
    if(getComputedStyle(d6).display !== "none"){

    } else {
        d6.style.display = "block";
        d4.style.display = "none";
        d5.style.display = "none";
        d7.style.display = "none";
        d8.style.display = "none";
    }
})

togg7.addEventListener("click", () => {
    if(getComputedStyle(d7).display !== "none"){

    } else {
        d7.style.display = "block";
        d4.style.display = "none";
        d5.style.display = "none";
        d6.style.display = "none";
        d8.style.display = "none";
    }
})

togg8.addEventListener("click", () => {
    if(getComputedStyle(d8).display !== "none"){

    } else {
        d8.style.display = "block";
        d4.style.display = "none";
        d5.style.display = "none";
        d6.style.display = "none";
        d7.style.display = "none";
    }
})

// Dans specification

togg3.addEventListener("click", () => {
    if(getComputedStyle(d3).display !== "none"){

    } else {
        d3.style.display = "flex";
        d1.style.display = "none";
        d2.style.display = "none";
        d4.style.display = "none";
        d5.style.display = "none";
        d6.style.display = "none";
        d7.style.display = "none";
        d8.style.display = "none";

    }
})
/* Route, Urbain et VTT */

let slide1 = document.getElementById("slide1");
let slide2 = document.getElementById("slide2");
let slide3 = document.getElementById("slide3");
let slide4 = document.getElementById("slide4");


/* VTT */

let vtt = document.getElementById("vtt");
let vtt2 = document.getElementById("vtt2");
let vtt3 = document.getElementById("vtt3");
let vtt4 = document.getElementById("vtt4");
let vtt5 = document.getElementById("vtt5");

/* Route */

let route = document.getElementById("route");
let route2 = document.getElementById("route2");
let route3 = document.getElementById("route3");
let route4 = document.getElementById("route4");
let route5 = document.getElementById("route5");

/* Urbain */

let ville = document.getElementById("ville");
let ville2 = document.getElementById("ville2");
let ville3 = document.getElementById("ville3");
let ville4 = document.getElementById("ville4");
let ville5 = document.getElementById("ville5");



slide1.addEventListener("click", () => {
    if (getComputedStyle(slide1).display === "none" || "block") {
        vtt.style.display = "block";
        vtt2.style.display = "block";
        vtt3.style.display = "block";
        vtt4.style.display = "block";
        vtt5.style.display = "block";

        route.style.display = "block";
        route2.style.display = "block";
        route3.style.display = "block";
        route4.style.display = "block";
        route5.style.display = "block";

        ville.style.display = "block";
        ville2.style.display = "block";
        ville3.style.display = "block";
        ville4.style.display = "block";
        ville5.style.display = "block";


    } else {


    }
})


slide2.addEventListener("click", () => {
    if (getComputedStyle(vtt).display === "none" || "block") {

        vtt.style.display = "block";
        vtt2.style.display = "block";
        vtt3.style.display = "block";
        vtt4.style.display = "block";
        vtt5.style.display = "block";

        route.style.display = "none";
        route2.style.display = "none";
        route3.style.display = "none";
        route4.style.display = "none";
        route5.style.display = "none";

        ville.style.display = "none";
        ville2.style.display = "none";
        ville3.style.display = "none";
        ville4.style.display = "none";
        ville5.style.display = "none";


    } else {


    }
})


slide3.addEventListener("click", () => {
    if (getComputedStyle(route).display === "none" || "block") {

        route.style.display = "block";
        route2.style.display = "block";
        route3.style.display = "block";
        route4.style.display = "block";
        route5.style.display = "block";

        vtt.style.display = "none";
        vtt2.style.display = "none";
        vtt3.style.display = "none";
        vtt4.style.display = "none";
        vtt5.style.display = "none";

        ville.style.display = "none";
        ville2.style.display = "none";
        ville3.style.display = "none";
        ville4.style.display = "none";
        ville5.style.display = "none";


    } else {




    }
})

slide4.addEventListener("click", () => {
    if (getComputedStyle(ville).display === "none" || "block" ) {
        ville.style.display = "block";
        ville2.style.display = "block";
        ville3.style.display = "block";
        ville4.style.display = "block";
        ville5.style.display = "block";

        vtt.style.display = "none";
        vtt2.style.display = "none";
        vtt3.style.display = "none";
        vtt4.style.display = "none";
        vtt5.style.display = "none";

        route.style.display = "none";
        route2.style.display = "none";
        route3.style.display = "none";
        route4.style.display = "none";
        route5.style.display = "none";


    } else {




    }
})




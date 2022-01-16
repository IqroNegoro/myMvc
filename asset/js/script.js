let menu = document.getElementsByClassName("menu");
let sidenav = document.getElementsByClassName("sidenav")[0];
if (localStorage.getItem("nav")) {
    sidenav.classList.add(localStorage.getItem("nav"))
}
menu[0].addEventListener("click", e => {
    if (localStorage.getItem("nav")) {
        localStorage.removeItem("nav");
    } else {
        localStorage.setItem("nav", "active")
    }
}) 

menu[0].addEventListener("click", function () {
    sidenav.classList.toggle("active")
})

// for (let i = 0; i < ul.length; i++) {
//     ul[i].addEventListener("click", function () {
//         let active = document.getElementsByClassName("actives");
//         active[0].className = active[0].className.replace("actives", "")
//         ul[i].className += "actives";
//     })
// }


let locationNow = window.location.href;
let links = document.querySelectorAll("a[href]")
if (locationNow === "http://localhost/myMvc/") {
    links[0].classList.add("actives");
} else if (/http:\/\/localhost\/myMvc\/dashboard/.test(locationNow)) {
    links[1].classList.add("actives");
} else if (/http:\/\/localhost\/myMvc\/pendaftar/.test(locationNow)) {
    links[2].classList.add("actives");
} else {
    links[0].classList.add("actives");
}

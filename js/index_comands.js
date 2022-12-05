 //animacion barra navegacion
 window.addEventListener("scroll", function () {
    var header = document.querySelector("header");
    menu_nav.classList.toggle("abajo2", window.scrollY > 500)
    header.classList.toggle("abajo", window.scrollY > 500);
})
//mostrar pop up
let showpop_btn = document.getElementById("inicio");
let pop = document.getElementById("pop");
showpop_btn.onclick = function () {
    pop.classList.add("active");
}
//ocultar pop up
let hidepop_btn = document.getElementById("hidepop");
let _pop = document.getElementById("pop");
hidepop_btn.onclick = function () {
    _pop.classList.remove("active");
}
//ver más y ver menos
let show_text_btn = document.getElementById("show_text_btn");
let hidetext = document.getElementById("hidetext");
let hide_text_btn = document.getElementById("hide_text_btn");

show_text_btn.addEventListener("click", toggleText);
function toggleText() {
    hidetext.classList.add("show");
    show_text_btn.classList.add("hidebtn");
    hide_text_btn.classList.remove("hidebtn");
}
hide_text_btn.addEventListener("click",toggleText2);
function toggleText2(){
    hidetext.classList.remove("show");
    show_text_btn.classList.remove("hidebtn");
    hide_text_btn.classList.add("hidebtn");
}

//hamburguer
let hamburguer = document.getElementById("hamburguer");
let menu_nav = document.getElementById("menu_nav");
let opmenu = document.getElementById("opnav");
hamburguer.addEventListener("click",togglemenu);
function togglemenu(){
    menu_nav.classList.toggle("showmenu");
    setTimeout(function(){
        opmenu.classList.toggle("hidemenu");
    },0);
}

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
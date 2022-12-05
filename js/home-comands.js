/* modo oscuro */
let btn_sun = document.querySelector("#sun");
let btn_moon = document.querySelector("#moon");
let iconmoon=document.querySelector("#moonicon");
let iconuser=document.querySelector("#usericon");
let saludo=document.querySelector("#saludo");
let header=document.querySelector("#header2");
let background=document.querySelector("#body");
btn_sun.onclick = function(){
    header.classList.add("darkmode_header");
    background.classList.add("darkmode_back");
    btn_sun.classList.toggle("hide");
    btn_moon.classList.toggle("hide");
    iconmoon.classList.toggle("white");
    iconuser.classList.toggle("white");
    saludo.classList.toggle("white");
}
/* Modo claro */
btn_moon.onclick = function(){
    header.classList.remove("darkmode_header");
    background.classList.remove("darkmode_back");
    btn_sun.classList.toggle("hide");
    btn_moon.classList.toggle("hide");
    iconuser.classList.toggle("white");
    iconmoon.classList.toggle("white");
    saludo.classList.toggle("white");/* 
    
var body = document.querySelector("body")
var hasclass = body.classList.contains('darkmode_back');
console.log(hasclass); */
}

/* Barra navegacion */
let btn_menu = document.querySelector("#menu_btn");
let sidebar = document.querySelector("#sidebar");
let logo = document.querySelector(".logo");
let inicio = document.querySelector("#inicio");
let calendario = document.querySelector("#calendario");
let estudiantes = document.querySelector("#estudiantes");
let docentes = document.querySelector("#docentes");
let secciones = document.querySelector("#secciones");
let transporte = document.querySelector("#transporte");
let comedor = document.querySelector("#comedor");
let cerrar = document.querySelector("#cerrar");
btn_menu.onclick = function(){
    btn_menu.classList.toggle("hide_btn");
    logo.classList.toggle("hide_logo");
    sidebar.classList.toggle("show_menu");
    inicio.classList.toggle("hide_logo");
    calendario.classList.toggle("hide_logo");
    estudiantes.classList.toggle("hide_logo");
    docentes.classList.toggle("hide_logo");
    secciones.classList.toggle("hide_logo");
    transporte.classList.toggle("hide_logo");
    comedor.classList.toggle("hide_logo");
    cerrar.classList.toggle("hide_logo");
}

/* Cambiar texto */
let time = new Date();
time=time.getHours();
if(time>5 && 12>time){
    document.getElementById("saludo").innerHTML="Buenos días &#127781";
}
else if(time>=12 && 18>time){
    document.getElementById("saludo").innerHTML="Buenas tardes &#127780";
}
else{
    document.getElementById("saludo").innerHTML="Buenas noches &#127769";
}
let grades = ["7", "8", "9", "10", "11", "12"]
let especialidad10 = ["Contabilidad","Ejecutivo Comercial y Servicio al Cliente", "Informatica Empresarial", "Reparación de los Sistemas de Vehiculos Livianos","Secretariado Ejecutivo","Turismo en Alimentos y Bebidas" ," Refrigeración y Aires Acondicionados","Gestión de la Producción"]
let especialidad11 = ["Contabilidad","Ejecutivo Comercial y Servicio al Cliente", "Informatica Empresarial", "Reparación de los Sistemas de Vehiculos Livianos","Secretariado Ejecutivo","Turismo en Alimentos y Bebidas" ," Refrigeración y Aires Acondicionados"]
let especialidad12 = ["Informatica Empresarial","Secretariado Ejecutivo","Turismo Hotelería y Eventos Especiales" ," Refrigeración y Aires Acondicionados","Billingual Secretary", "Mecanica General", "Productividad y Calidad","Bancas y Finanzas", "Electronida en Mantenimiento de Equipo de Computo"]
let combobox12 = document.getElementById("grade");
let combobox22 = document.getElementById("Especialidad");
let text1 = document.getElementById("Especialidad2");

function Recorrer2(combobox, valores) {
    combobox.innerHTML= '<option value=""></option>';
    for (let index of valores) {
        combobox.innerHTML += '<option value="'+index+'">' + index + '</option>';
    }
}
function llenarnivel() {
    Recorrer2(combobox12, grades);
    console.log("hide");
}
llenarnivel();

combobox12.addEventListener('change', (e) => {
    let dato = e.target.value
    
    switch(dato){
        
        case "10":
            combobox22.classList.remove("hide2");
    text1.classList.remove("hide2");console.log("hide");
    Recorrer2(combobox22, especialidad10.slice())
        break;
        case "11":
            combobox22.classList.remove("hide2");
    text1.classList.remove("hide2");
    Recorrer2(combobox22, especialidad11.slice())
        break;
        case "12":
            combobox22.classList.remove("hide2");
    text1.classList.remove("hide2");
    Recorrer2(combobox22, especialidad12.slice())
        break;
    }
})
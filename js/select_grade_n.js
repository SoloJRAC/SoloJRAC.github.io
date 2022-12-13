let grades = ["10", "11", "12"]
let especialidad10 = ["Contabilidad","Ejecutivo Comercial y Servicio al Cliente", "Informatica Empresarial", "Reparación de los Sistemas de Vehiculos Livianos","Secretariado Ejecutivo"," Refrigeración y Aires Acondicionados","Operaciones en Emprezas de Alojamiento" ]
let especialidad11 = ["Contabilidad","Ejecutivo Comercial y Servicio al Cliente", "Informatica Empresarial", "Reparación de los Sistemas de Vehiculos Livianos","Secretariado Ejecutivo","Turismo en Alimentos y Bebidas" ,"Operaciones en Empresas de Alojamiento", "Productividad y Calidad"]
let especialidad12 = ["Informatica Empresarial","Secretariado Ejecutivo","Turismo en Alimentos y Bebidas" ," Refrigeración y Aires Acondicionados","Reparación de los Sistemas de Vehiculos Livianos", "Electronida en Mantenimiento de Equipo de Computo", "Informatica en Redes", "Contabilidad"]
let combobox12 = document.getElementById("grade");
let combobox22 = document.getElementById("Especialidad");
let text1 = document.getElementById("Especialidad2");

function Recorrer2(combobox, valores) {
    combobox22.innerHTML = ""
    for (let index of valores) {
        combobox.innerHTML += '<option value="'+index+'">' + index + '</option>';
    }
}
function llenarnivel() {
    Recorrer2(combobox12, grades);
}
llenarnivel();

combobox12.addEventListener('change', (e) => {

    let dato = e.target.value

    switch(dato){
        case "10":
            combobox22.classList.remove("hide2");
    text1.classList.remove("hide2");
    combobox22.innerHTML = ""
    Recorrer2(combobox22, especialidad10.slice())
        break
        case "11":
            combobox22.classList.remove("hide2");
    text1.classList.remove("hide2");
    combobox22.innerHTML = ""
    Recorrer2(combobox22, especialidad11.slice())
        break
        case "12":
            combobox22.classList.remove("hide2");
    text1.classList.remove("hide2");
    combobox22.innerHTML = ""
    Recorrer2(combobox22, especialidad12.slice())
        break
    }
})
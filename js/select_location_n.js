
let cantones = ["Abangares", "Acosta", "Alajuela", "Alajuelita", "Alvarado", "Aserrí", "Atenas",
"Bagaces", "Barva", "Belén", "Buenos Aires", "Cañas", "Carrillo", "Cartago", "Corredores", "Coto Brus",
"Curridabat", "Desamparados", "Dota", "El Guarco", "Escazú", "Esparza", "Flores", "Garabito", "Goicoechea",
"Golfito", "Grecia", "Guácimo", "Guatuso", "Heredia", "Hojancha", "Jiménez", "La Cruz", "La Unión", "León Cortés Castro",
"Liberia", "Limón", "Los Chiles", "Matina", "Montes de Oca", "Montes de Oro", "Mora", "Moravia", "Nandayure", "Naranjo",
"Nicoya", "Oreamuno", "Orotina", "Osa", "Palmares", "Paraíso", "Parrita", "Pérez Zeledón", "Poás", "Pococí", "Puntarenas",
"Puriscal","Puerto Jiménez", "Quepos", "Río Cuarto", "San Carlos", "San Isidro", "San José", "San Mateo", "San Pablo", "San Rafael",
"San Ramón", "Santa Ana", "Santa Bárbara", "Santa Cruz", "Santo Domingo", "Sarapiquí", "Sarchí", "Siquirres",
"Talamanca", "Tarrazú", "Tibás", "Tilarán", "Turrialba", "Turrubares", "Upala", "Vázquez de Coronado", "Zarcero"]

let distritos = [
    /* Abangares 1,4*/
    "Las Juntas", "Sierra", "San Juan", "Colorado",
    /* Acosta 5,9*/
    "San Ignacio", "Guaitil", "Palmichal", "Cangrejal", "Sabanillas",
    /* Alajuela 10,23*/
    "Alajuela", "San José", "Carrizal", "San Antonio", "Guácima", "San Isidro", "Sabanilla", "San Rafael", "Río Segundo", "Desamparados", "Turrúcares", "Tambor", "La Garita", "Sarapiquí",
    /* Alajuelita 23,27*/
    "Alajuelita", "San Josecito", "San Antonio", "Concepción", "San Felipe",
    /* Alvarado 28,30*/
    "Pacayas", "Cervantes", "Capellades",
    /* Aserrí 31,37*/
    "Aserrí", "Tarbaca", "Vuelta de Jorco", "San Gabriel", "Legua", "Monterrey", "Salitrillos",
    /* Atenas 38,45 */
    "Atenas", "Jesús", "Mercedes", "San Isidro", "Concepción", "San José", "Santa Eulalia", "Escobal",
    /* Bagaces 46,49 */
    "Bagaces", "La Fortuna", "Mogote", "Río Naranjo",
    /* Cañas 50,54*/
    "Cañas", "Palmira", "San Miguel", "Bebedero", "Porozal",
    /* Carrillo 55,58*/
    "Filadelfia", "Palmira", "Sardinal", "Belén",
    /* Hojancha 59,63*/
    "Hojancha", "Monte Romo", "Puerto Carrillo", "Huacas", "Matambú",
    /* La cruz 64,67*/
    "La Cruz", "Santa Cecilia", "La Garita", "Santa Elena",
    /* Liberia 68,72*/
    "Liberia", "Cañas Dulces", "Mayorga", "Nacascolo", "Curubandé",
    /* Nandayure 73,78*/
    "Carmona", "Santa Rita", "Zapotal", "San Pablo", "Porvenir", "Bejuco",
    /* Nicoya79,86 */
    "Nicoya", "Mansión", "San Antonio", "Quebrada", "Honda", "Sámara", "Nosara", "Belén de Nosarita",
    /* Santa Cruz 87,95*/
    "Santa Cruz", "Bolsón", "Veintisiete de Abri", "Tempate", "Cartagena", "Cuajiniqui", "Dirlá", "Cabo Velas", "Tamarindo",
    /* Tilarán 96,105*/
    "Tilarán", "Quebrada", "Grande", "Tronadora", "Santa Rosa", "Líbano", "Tierras", "Morenas", "Arenal", "Cabeceras",
    /* Grecia 112,119*/
    "Grecia", "San Isidro", "San José", "San Roque", "Tacares", "Puente de Piedra", "Bolívar",

    /* Guatuso 120,123*/
    "San Rafael", "Buenavista", "Cote", "Katira",
    /* Los chiles 124,127*/
    "Los Chiles", "Caño Negro", "El Amparo", "San Jorge",
    /* Naranjo128,135 */
    "Naranjo", "San Miguel", "San José", "Cirrí Sur", "San Jerónimo", "San Juan", "El Rosario", "Palmitos",
    /* Orotina 136,140*/
    "Orotina", "El Mastate", "Hacienda Vieja", "Coyolar", "La Ceiba",
    /* Palmares 141,147*/
    "Palmares", "Zaragoza", "Buenos Aires", "Santiago", "Candelaria", "Esquipulas", "La Granja",
    /* Poas 148,152*/
    "San Pedro", "San Juan", "San Rafael", "Carrillos", "Sabana Redonda",
    /* Rio Cuarto 153,155*/
    "Río Cuarto", "Santa Rita", "Santa Isabel",
    /* San Carlos 156,168*/
    "Quesada", "Florencia", "Buenavista", "Aguas Zarcas", "Venecia", "Pital", "La Fortuna", "La Tigra", "La Palmera", "Venado", "Cutris", "Monterrey", "Pocosol",
    /* San Mateo 169,172*/
    "San Mateo", "Desmonte", "Jesús María", "Labrador",
    /* San Ramón 173,186*/
    "San Ramón", "Santiago", "San Juan", "Piedades Norte", "Piedades Sur", "San Rafael", "San Isidro", "Ángeles", "Alfaro", "Volio", "Concepción", "Zapotal", "Peñas Blancas", "San Lorenzo",
    /* Sarchí 187,191*/
    "Sarchí Norte", "Sarchí Sur", "Toro Amarillo", "San Pedro", "Rodríguez",
    /* Upala 192,199*/
    "Upala", "Aguas Claras", "San José (Pizote)", "Bijagua", "Delicias", "Dos Ríos", "Yolillal", "Canalete",
    /* Zarcero 200,206*/
    "Zarcero", "Laguna", "Tapesco", "Guadalupe", "Palmira", "Zapote", "Brisas",
    /* Curridabat 207,210*/
    "Curridabat", "Granadilla", "Sánchez", "Tirrases",
    /* Desamparados 211,223*/
    "Desamparados", "San Miguel", "San Juan de Dios", "San Rafael Arriba", "San Antonio", "Frailes", "Patarrá", "San Cristóbal", "Rosario", "Damas", "San Rafael Abajo", "Gravilias", "Los Guido",
    /* Dota 224,226*/
    "Santa María", "Jardín", "Copey",
    /* Escazú 227,229*/
    "Escazú", "San Antonio", "San Rafael",
    /* Goicochea 230,236*/
    "Guadalupe", "San Francisco", "Calle Blancos", "Mata de Plátano", "Ipís", "Rancho Redondo", "Purral",
    /* León Cortés Castro 237,242*/
    "San Pablo", "San Andrés", "Llano Bonito", "San Isidro", "Santa Cruz", "San Antonio",
    /* Montes de Oca 243,246*/
    "San Pedro", "Sabanilla", "Mercedes", "San Rafael",
    /* Mora 247,253*/
    "Colón", "Guayabo", "Tabarcia", "Piedras Negras", "Picagres", "Jaris", "Quitirrisí",

    /* Moravia 254,256*/
    "San Vicente", "San Jerónimo", "La Trinidad",
    /* Perez Zeledón 257,268*/
    "San Isidro de El General", "El General", "Daniel Flores", "Rivas", "San Pedro", "Platanares", "Pejibaye", "Cajón", "Barú", "Río Nuevo", "Páramo", "La Amistad",
    /* Puriscal 269,277*/
    "Santiago", "Mercedes Sur", "Barbacoas", "Grifo Alto", "San Rafael", "Candelarita", "Desamparaditos", "San Antonio", "Chires",
    /* Tarrazú 278,280*/
    "San Marcos", "San Lorenzo", "San Carlos",
    /* San José 281,291*/
    "Carmen", "Merced", "Hospital", "Catedral", "Zapote", "San Francisco de Dos Ríos", "La Uruca", "Mata Redonda", "Pavas", "Hatillo", "San Sebastián",
    /* Santa Ana 292,297*/
    "Santa Ana", "Salitral", "Pozos", "Uruca", "Piedades", "Brasil",
    /* Tibas 298,302*/
    "San Juan", "Cinco Esquinas", "Anselmo llorente", "León XIII", "Colima",
    /* Turrubares 303,307*/
    "San Pablo", "San Pedro", "San Juan de Mata", "San Luis", "Carara",
    /* Vazques de Coronado 308,312*/
    "San Isidro", "San Rafael", "Dulce Nombre de Jesús", "Patalillo", "Cascajal",
    /* Cartago 313,323*/
    "Oriental", "Occidental", "Carmen", "San Nicolás", "Aguacaliente", "Guadalupe", "Corralillo", "Tierra Blanca", "Dulce Nombre", "Llano Grande", "Quebradilla",
    /* El Guarco 324,327*/
    "El Tejar", "San Isidro", "Tobosi", "Patio de Agua",
    /* Jimenez 328,331*/
    "Juan Viñas", "Tucurrique", "Pejibaye", "La Victoria",
    /* La Union 332,339*/
    "Tres Ríos", "San Diego", "San Juan", "San Rafael", "Concepción", "Dulce Nombre", "San Ramón", "Río Azul",
    /* Oreamuno 340,344*/
    "San Rafael", "Cot", "Potrero Cerrado", "Cipreses", "Santa Rosa",
    /* Paraiso 345,349*/
    "Paraíso", "Santiago", "Orosi", "Cachí", "Llanos de Santa Lucía",
    /* Turrialba 350,361*/
    "Turrialba", "La Suiza", "Peralta", "Santa Cruz", "Santa Teresita", "Pavones", "Tuis", "Tayutic", "Santa Rosa", "Tres Equis", "La Isabel", "Chirripó",
    /* Barva 362,367*/
    "Barva", "San Pedro", "San Pablo", "San Roque", "Santa Lucía", "San José de la Montaña",
    /* Belén 368,370*/
    "San Antonio", "La Ribera", "La Asunción",
    /* Flores 371,373*/
    "San Joaquín", "Barrantes", "Llorente",
    /* Heredia 374,378*/
    "Heredia", "Mercedes", "San Francisco", "Ulloa", "Varablanca",
    /* San Isidro 379,382*/
    "San Isidro", "San José", "Concepción", "San Francisco",
    /* San Pablo 383,384*/
    "San Pablo", "Rincón de Sabanilla",
    /* San Rafael 385,389*/
    "San Rafael", "San Josecito", "Santiago", "Ángeles", "Concepción",
    /* Santa Barbara 390,395*/
    "Santa Bárbara", "San Pedro", "San Juan", "Jesús", "Santo Domingo", "Purabá",
    /* Santo Domingo 396,403*/
    "Santo Domingo", "San Vicente", "San Miguel", "Paracito", "Santo Tomás", "Santa Rosa", "Tures", "Pará",
    /* Sarapiquí 404,408*/
    "Puerto Viejo", "La Virgen", "Horquetas", "Llanuras del Gaspar", "Cureña",
    /* Buenos Aires 409,417*/
    "Buenos Aires", "Volcán", "Potrero Grande", "Boruca", "Pilas", "Colinas", "Chánguena", "Biolley", "Brunka",
    /* Corredores 418,421*/
    "Corredor", "La Cuesta", "Canoas", "Laurel",
    /* Coto Brus 422,426*/
    "San Vito", "Sabalito", "Aguabuena", "Limoncito", "Pittier", "Gutiérrez Braun",
    /* Esparza 427,432*/
    "Espíritu Santo", "San Juan Grande", "Macacona", "San Rafael", "San Jerónimo", "Caldera",
    /* Garabito 433,435*/
    "Jacó", "Tárcoles", "Lagunillas",
    /* Golfito 436,438*/
    "Golfito", "Guaycará", "Pavón",
    /* Montes de Oro 439,441*/
    "Miramar", "La Unión", "San Isidro",
    /* Osa 442,447*/
    "Puerto Cortés", "Palmar", "Sierpe", "Bahía Ballena", "Piedras Blancas", "Bahía Drake",
    /* Parrita 448*/
    "Parrita",
    /* Puntarenas 449,463*/
    "Puntarenas", "Pitahaya", "Chomes", "Lepanto", "Paquera", "Manzanillo", "Guacimal", "Barranca", "Isla del Coco", "Cóbano", "Chacarita", "Chira", "Acapulco", "El Roble", "Arancibia",
    /* Quepos 464,466*/
    "Quepos", "Savegre", "Naranjito",
    /* Monteverde 467*/
    "Monteverde",
    /* Puerto Jimenez 468*/
    "Puerto Jiménez",
    /* Guacimo 469,473*/
    "Guácimo", "Mercedes", "Pocora", "Río Jiménez", "Duacarí",
    /* Limón 474,477*/
    "Limón", "Valle La Estrella", "Río Blanco", "Matama",
    /* Matina 478,480*/
    "Matina", "Batán", "Carrandi",
    /* Pococi 481,487*/
    "Guápiles", "Jiménez", "La Rita", "Roxana", "Cariari", "Colorado", "La Colonia",
    /* Siquirres 488,494*/
    "Siquirres", "Pacuarito", "Florida", "Germania", "El Cairo", "Alegría", "Reventazón",
    /* Talamanca 495,498*/
    "Bratsi", "Sixaola", "Cahuita", "Telire",
    ]

let combobox1 = document.getElementById("combobox1");
let combobox2 = document.getElementById("combobox2");

function Recorrer(combobox, valores) {
    combobox2.innerHTML = '<option value=""></option>';
    for (let index of valores) {
        combobox.innerHTML += '<option value="'+index+'">' + index + '</option>';
    }
}

function llenarcanton() {
    Recorrer(combobox1, cantones);
}

llenarcanton();

combobox1.addEventListener('change', (e) => {

    let text_combobox2=document.getElementById("text_combobox2").classList.remove("hide2");
    function llenardistritos(){
        let dato = e.target.value

        combobox2.innerHTML = '<option value=""></option>';
        combobox2.classList.remove("hide2");
        switch (dato) {
            default:
                let text_combobox2=document.getElementById("text_combobox2").classList.add("hide2");
                combobox2.classList.add("hide2");
            break;
            case 'Abangares':
                Recorrer(combobox2, distritos.slice(0, 4))
                break;
            case 'Acosta':
                Recorrer(combobox2, distritos.slice(4, 9))
                break;
            case 'Alajuela':
                Recorrer(combobox2, distritos.slice(9, 23))
                break;
            case 'Alajuelita':
                Recorrer(combobox2, distritos.slice(23, 28))
                break;
            case 'Alvarado':
                Recorrer(combobox2, distritos.slice(28, 31))
                break;
            case 'Aserrí':
                Recorrer(combobox2, distritos.slice(31, 38))
                break;
            case 'Atenas':
                Recorrer(combobox2, distritos.slice(38, 46))
                break;
            case 'Bagaces':
                Recorrer(combobox2, distritos.slice(46, 50))
                break;
            case 'Cañas':
                Recorrer(combobox2, distritos.slice(50, 55))
                break;
            case 'Carrillo':
                Recorrer(combobox2, distritos.slice(55, 59))
                break;
            case 'Hojancha':
                Recorrer(combobox2, distritos.slice(59, 64))
                break;
            case 'La Cruz':
                Recorrer(combobox2, distritos.slice(64, 68))
                break;
            case 'Liberia':
                Recorrer(combobox2, distritos.slice(68, 73))
                break;
            case 'Nandayure':
                Recorrer(combobox2, distritos.slice(73, 79))
                break;
            case 'Nicoya':
                Recorrer(combobox2, distritos.slice(79, 87))
                break;
            case 'Santa Cruz':
                Recorrer(combobox2, distritos.slice(87, 96))
                break
            case 'Tilarán':
                Recorrer(combobox2, distritos.slice(96, 106))
                break;
            case 'Grecia':
                Recorrer(combobox2, distritos.slice(106, 113))
                break;

            case 'Guatuso':
                Recorrer(combobox2, distritos.slice(113, 117))
                break;
            case 'Los Chiles':
                Recorrer(combobox2, distritos.slice(117, 121))
                break;
            case 'Naranjo':
                Recorrer(combobox2, distritos.slice(121, 129))
                break;
            case 'Orotina':
                Recorrer(combobox2, distritos.slice(129, 134))
                break;
            case 'Palmares':
                Recorrer(combobox2, distritos.slice(134, 141))
                break;
            case 'Poás':
                Recorrer(combobox2, distritos.slice(141, 146))
                break;
            case 'Río Cuarto':
                Recorrer(combobox2, distritos.slice(146, 149))
                break;
            case 'San Carlos':
                Recorrer(combobox2, distritos.slice(149, 162))
                break;
            case 'San Mateo':
                Recorrer(combobox2, distritos.slice(162, 166))
                break;
            case 'San Ramón':
                Recorrer(combobox2, distritos.slice(166, 180))
                break;
            case 'Sarchí':
                Recorrer(combobox2, distritos.slice(180, 185))
                break;
            case 'Upala':
                Recorrer(combobox2, distritos.slice(185, 193))
                break;
            case 'Zarcero':
                Recorrer(combobox2, distritos.slice(193, 200))
                break;
            case 'Curridabat':
                Recorrer(combobox2, distritos.slice(200, 204))
                break;
            case 'Desamparados':
                Recorrer(combobox2, distritos.slice(204, 217))
                break;
            case 'Dota':
                Recorrer(combobox2, distritos.slice(217, 220))
                break;
            case 'Escazú':
                Recorrer(combobox2, distritos.slice(220, 223))
                break;
            case 'Goicochea':
                Recorrer(combobox2, distritos.slice(223,230))
                break;
            case 'León Cortés Castro':
                Recorrer(combobox2, distritos.slice(230,236))
                break;
            case 'Montes de Oca':
                Recorrer(combobox2, distritos.slice( 236,240))
                break;
            case 'Mora':
                Recorrer(combobox2, distritos.slice(240,247))
                break;
            case 'Moravia':
                Recorrer(combobox2, distritos.slice(247,250))
                break;
            case 'Pérez Zeledón':
                Recorrer(combobox2, distritos.slice(250,262))
                break;
            case 'Puriscal':
                Recorrer(combobox2, distritos.slice(262,271))
                break;
            case 'Tarrazú':
                Recorrer(combobox2, distritos.slice(271,274))
                break;
            case 'San José':
                Recorrer(combobox2, distritos.slice(274,285))
                break;
            case 'Santa Ana':
                Recorrer(combobox2, distritos.slice(285,291))
                break;
            case 'Tibás':
                Recorrer(combobox2, distritos.slice( 291,296))
                break;
            case 'Turrubares':
                Recorrer(combobox2, distritos.slice( 296,301))
                break;
            case 'Vázquez de Coronado':
                Recorrer(combobox2, distritos.slice(301,306))
                break;
            case 'Cartago':
                Recorrer(combobox2, distritos.slice(306,317))
                break;
            case 'El Guarco':
                Recorrer(combobox2, distritos.slice(317,321))
                break;
            case 'Jiménez':
                Recorrer(combobox2, distritos.slice(321,325))
                break;
            case 'La Unión':
                Recorrer(combobox2, distritos.slice(325,333))
                break;
            case 'Oreamuno':
                Recorrer(combobox2, distritos.slice( 333,338))
                break;
            case 'Paraíso':
                Recorrer(combobox2, distritos.slice(338,343))
                break;
            case 'Turrialba':
                Recorrer(combobox2, distritos.slice(343,354))
                break;
            case 'Barva':
                Recorrer(combobox2, distritos.slice(354,361))
                break;
            case 'Belén':
                Recorrer(combobox2, distritos.slice(361,364))
                break;
            case 'Flores':
                Recorrer(combobox2, distritos.slice(364,367))
                break;
            case 'Heredia':
                Recorrer(combobox2, distritos.slice(367,372))
                break;
            case 'San Isidro':
                Recorrer(combobox2, distritos.slice(372,376))
                break;
            case 'San Pablo':
                Recorrer(combobox2, distritos.slice(376,378))
                break;
            case 'San Rafael':
                Recorrer(combobox2, distritos.slice(378,383))
                break;
            case 'Santa Bárbara':
                Recorrer(combobox2, distritos.slice(383,389))
                break;
            case 'Santo Domingo':
                Recorrer(combobox2, distritos.slice(389,397))
                break;
            case 'Sarapiquí':
                Recorrer(combobox2, distritos.slice(397,402))
                break;
            case 'Buenos Aires':
                Recorrer(combobox2, distritos.slice(402,411))
                break;
            case 'Corredores':
                Recorrer(combobox2, distritos.slice(411,415))
                break;
            case 'Coto Brus':
                Recorrer(combobox2, distritos.slice(415,421))
                break;
            case 'Esparza':
                Recorrer(combobox2, distritos.slice(421,427))
                break;
            case 'Garabito':
                Recorrer(combobox2, distritos.slice(427,430))
                break;
            case 'Golfito':
                Recorrer(combobox2, distritos.slice( 430,433))
                break;
            case 'Montes de Oro':
                Recorrer(combobox2, distritos.slice(433,436))
                break;
            case 'Osa':
                Recorrer(combobox2, distritos.slice(436,442))
                break;
            case 'Parrita':
                Recorrer(combobox2, distritos.slice(442, 443))
                break;
            case 'Puntarenas':
                Recorrer(combobox2, distritos.slice(443,458))
                break;
            case 'Quepos':
                Recorrer(combobox2, distritos.slice(458,461))
                break;
            case 'Monteverde':
                Recorrer(combobox2, distritos.slice(461,462))
                break;
            case 'Puerto Jiménez':
                Recorrer(combobox2, distritos.slice(462,  463))
                break;
            case 'Guácimo':
                Recorrer(combobox2, distritos.slice(463,468))
                break;
            case 'Limón':
                Recorrer(combobox2, distritos.slice( 468,472))
                break;
            case 'Matina':
                Recorrer(combobox2, distritos.slice(472,475))
                break;
            case 'Pococí':
                Recorrer(combobox2, distritos.slice(475,482))
                break;
            case 'Siquirres':
                Recorrer(combobox2, distritos.slice(482,489))
                break;
            case 'Talamanca':
                Recorrer(combobox2, distritos.slice(489,493))
                break;
    }
    }
    llenardistritos();
})

<?php 
$password = $_POST["password"];

if ($password == null) {
    ?><script>
        window.location.href = "index.html"
    </script>
    
    <?php
 } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home-style.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="resources/ctpplogo.ico" type="favicon/ico" />
    <!-- Bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper (Libreria del pop up pues)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/82d23b5a3b.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>CTP Parrita</title>
</head>
<body id="body">


    <div class="sidebar" id="sidebar">
        <div class="logo_content" >
            <div class="logo">
                <img src="resources/ctpplogo.ico" alt="CTTP" id="CTP_logo">  
                <div class="logo_name">
                    Colegio 
                    Técnico 
                    Profesional 
                    de Parrita
                </div>
            </div>
            <div>
                <i class="fa-solid fa-bars" id="menu_btn"></i>
            </div>
        </div>
    <ul class="nav_list">
        <li>
            <span class="tooltip">Inicio</span>
            <a href="#">
                <i class="fa-solid fa-house-chimney" id="home_btn"></i>
                <span class="links_name" id="start">Inicio</span><!-- cuidadou con estou -->
            </a>
            
        </li>
        <li>
            <span class="tooltip">Calendario</span>
            <a href="#">
                <i class="fa-solid fa-calendar-week" id="calendar_btn"></i>
                <span class="links_name" id="calendario">Calendario</span>
            </a>
            
        </li>
        <li>
            <span class="tooltip">Estudiantes</span>
            <a href="#">
                <i class="fa-solid fa-graduation-cap" id="student_btn"></i>
                <span class="links_name" id="estudiantes">Estudiantes</span>
            </a>
        </li>
        <li>
            <span class="tooltip">Especialidades</span>
            <a href="#">
                <i class="fa-solid fa-screwdriver-wrench" id="quirk_btn"></i>
                <span class="links_name" id="especialidad">Especialidades</span>
            </a>
        </li>
        <li>
            <span class="tooltip">Docentes</span>
            <a href="#">
                <i class="fa-solid fa-chalkboard-user" id="teacher_btn"></i>
                <span class="links_name" id="docentes">Docentes</span>
            </a>
            
        </li>
        <li>
            <span class="tooltip">Secciones</span>
            <a href="#">
                <i class="fa-solid fa-people-group" id="groups_btn"></i>
                <span class="links_name" id="secciones">Secciones</span>
            </a>
             
        </li>
        <li>
            <span class="tooltip">Transporte</span>
            <a href="#">
                <i class="fa-solid fa-bus" id="bus_btn"></i>
                <span class="links_name" id="transporte">Transporte</span>
            </a>
            
        </li>
        <li>
            <span class="tooltip">Comedor</span>
            <a href="#">
                <i class="fa-solid fa-utensils" id="dining_btn"></i>
                <span class="links_name" id="comedor">Comedor</span>
            </a>
        </li>
        <!-- Parte de cerrar sesión -->
        <li id="log_out">
            <span class="tooltip">Cerrar sesión</span>
            <a href="index.html">
                <i class="fa-solid fa-right-from-bracket" id="logout_btn"></i>
                <span class="links_name" id="cerrar">Cerrar sesión</span>
            </a>
            
        </li>
    </ul>     
<!-- Parte del cerrar sesión -->
</div>

<main class="Page_Content">
    <header class="HeaderComponent">
        <div class="HeaderComponent_Container" id="header2">
                <div class="search_box">
                    <input type="text" placeholder="¿Qué desea buscar?">
                    <div class="search_icon">
                        <span>
                                <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                    </div>
                </div>
            <nav class="menu_bar" method="POST">
                <ul class="navigation">
                    <li id="sun">
                        <a href="#">
                            <i class="fa-solid fa-sun "  id="sunicon"></i>
                        </a>
                    </li>
                    <li id="moon" class="hide">
                        <a href="#">
                            <i class="fa-solid fa-moon" id="moonicon"></i>
                        </a>
                    </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-user" id="usericon"></i>
                    </a>
                </li>
            </ul>
            </nav>
        </div>
    </header>

    

    <!-- Tabla de estudiantes -->
    <div class="mt-5 container table-responsive students-table">
        <header class="p-3 table-header">
            <h3 class="text-center">
                Tabla de estudiantes
            </h3>
            <div class="row">
                    <div class="offset-3 col-9 text-end">
                        <li>
                           <a id="inicio">
                                <i class="fa-solid fa-user-plus add-user-diurno" data-bs-toggle="modal" data-bs-target="#popup-add" ></i>
                            </a>
                           <a id="search">
                                <i class="fa-solid fa-magnifying-glass add-user-diurno" ></i>
                           </a>
                        </li>
                    </div> 
            </div>
        </header>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr >
                    <th scope="col">#</th>
                    <th scope="col">Cédula</th>
                    <th scope="col">Primer Apellido</th>
                    <th scope="col">Segundo Apellido</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha de Matricula</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php 
$servidor ="localhost";
$usuario="vdhkgimy_admin";
$contraseña="Aarce0908";
$BD="vdhkgimy_Matricula";

$conection = mysqli_connect($servidor, $usuario, $contraseña, $BD);
            $sql="SELECT info_academica.Cedula_est, info_academica.Grado, info_personal_est.Nom1,  info_personal_est.Nom2,info_personal_est.Ap1, info_personal_est.Ap2, info_personal_est.Fecha_Nacimiento, conect_matricula.Tipo_matricula, conect_matricula.Fecha, especialidades.Especialidad FROM info_academica
            INNER JOIN info_personal_est ON info_personal_est.Cedula_est=info_academica.Cedula_est INNER JOIN conect_matricula ON conect_matricula.Cedula_est=info_academica.Cedula_est INNER JOIN especialidades ON info_academica.Cedula_est=especialidades.Cedula_est WHERE Tipo_matricula='Diurno' /* AND Especialidad='Informatica Empresarial' */";
		$result=mysqli_query($conection,$sql);
        $mostrar = mysqli_fetch_array($result);
            $cont = 1;
        while( $mostrar=mysqli_fetch_array($result)){
            ?>

		<tr>
            <td><?php echo $cont ?></td>
			<td><?php echo $mostrar['Cedula_est'] ?></td>
			<td><?php echo $mostrar['Ap1'] ?></td>
			<td><?php echo $mostrar['Ap2'] ?></td>
                <td><?php echo $mostrar['Nom1']." ".$mostrar['Nom2'] ?></td>
			<td><?php echo $mostrar['Fecha'] ?></td>
			<td class="text-center"><a data-bs-toggle="modal" data-bs-target="#popup-edit" ><i class="fa-solid fa-pen-to-square"></i></a></td>
		</tr>
	<?php
                    $cont++;
	}
	 ?>
            </tbody>
        </table>
    </div>

      
    <!-- Modal o pop up CSS -->
<div class="modal fade" id="popup-add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Elija el area en el que quiere realizar su matricula</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body row">
            <div class="form_popup col-12 text-center mb-3">
                <a id="diurna" class="btn btn-primary d-block">Sección Técnica diurna</a>
            </div>
            <div class="form_popup col-12 text-center mb-3">
                <a id="pn" class="btn btn-primary d-block">Plan Nacional</a>
            </div> 
            <div class="form_popup col-12 text-center mb-3">
                <a id="nocturna" class="btn btn-primary d-block">Sección Técnica nocturna</a>
            </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Scrollable modal para editar los registros -->
<div class="modal fade" id="popup-edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar datos del estudiante</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <!--Information (Student)-->
			<form action="matricula_diurno.php" method="post">
                <div class="information-students justify-content-center">
                        <section class="Student-Data">
                            <!--Personal Information (Student)-->
                            <legend class="mb-5 text-center" id="subtitle_text">Información Personal del Estudiante</legend>
    
                            <!-- Fisrst row -->
                            <div class="row mb-5">
    
                                <!--Identification Number (Student)-->
                                    <div class="col-12 col-lg-3" >
                                        <label for="studentID" class="binding">Cédula</label>
                                        <input class="form-control" type="text" id="IDstudent" name="studentID" autocomplete="off" spellcheck="false"
                                        tabindex="0" autocapitalize="none" aria-label="Cédula" required>
                                    </div>
                                <!--Country-->
                                    <div class="col-12 col-lg-3">
                                        <label for="country" class="binding">Nacionalidad</label>
                                        <select class="form-select country_option" name="country" tabindex="0" aria-label="País"  required>
                                            <option value=""></option>
                                            <option value="Costa Rica" id="CR">Costa Rica</option>								
                                            <option value="Afganistán" id="AF">Afganistán</option>
                                            <option value="Albania" id="AL">Albania</option>
                                            <option value="Alemania" id="DE">Alemania</option>
                                            <option value="Andorra" id="AD">Andorra</option>
                                            <option value="Angola" id="AO">Angola</option>
                                            <option value="Anguila" id="AI">Anguila</option>
                                            <option value="Antártida" id="AQ">Antártida</option>
                                            <option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
                                            <option value="Antillas holandesas" id="AN">Antillas holandesas</option>
                                            <option value="Arabia Saudí" id="SA">Arabia Saudí</option>
                                            <option value="Argelia" id="DZ">Argelia</option>
                                            <option value="Argentina" id="AR">Argentina</option>
                                            <option value="Armenia" id="AM">Armenia</option>
                                            <option value="Aruba" id="AW">Aruba</option>
                                            <option value="Australia" id="AU">Australia</option>
                                            <option value="Austria" id="AT">Austria</option>
                                            <option value="Azerbaiyán" id="AZ">Azerbaiyán</option>
                                            <option value="Bahamas" id="BS">Bahamas</option>
                                            <option value="Bahrein" id="BH">Bahrein</option>
                                            <option value="Bangladesh" id="BD">Bangladesh</option>
                                            <option value="Barbados" id="BB">Barbados</option>
                                            <option value="Bélgica" id="BE">Bélgica</option>
                                            <option value="Belice" id="BZ">Belice</option>
                                            <option value="Benín" id="BJ">Benín</option>
                                            <option value="Bermudas" id="BM">Bermudas</option>
                                            <option value="Bhután" id="BT">Bhután</option>
                                            <option value="Bielorrusia" id="BY">Bielorrusia</option>
                                            <option value="Birmania" id="MM">Birmania</option>
                                            <option value="Bolivia" id="BO">Bolivia</option>
                                            <option value="Bosnia y Herzegovina" id="BA">Bosnia y Herzegovina</option>
                                            <option value="Botsuana" id="BW">Botsuana</option>
                                            <option value="Brasil" id="BR">Brasil</option>
                                            <option value="Brunei" id="BN">Brunei</option>
                                            <option value="Bulgaria" id="BG">Bulgaria</option>
                                            <option value="Burkina Faso" id="BF">Burkina Faso</option>
                                            <option value="Burundi" id="BI">Burundi</option>
                                            <option value="Cabo Verde" id="CV">Cabo Verde</option>
                                            <option value="Camboya" id="KH">Camboya</option>
                                            <option value="Camerún" id="CM">Camerún</option>
                                            <option value="Canadá" id="CA">Canadá</option>
                                            <option value="Chad" id="TD">Chad</option>
                                            <option value="Chile" id="CL">Chile</option>
                                            <option value="China" id="CN">China</option>
                                            <option value="Chipre" id="CY">Chipre</option>
                                            <option value="Ciudad estado del Vaticano" id="VA">Ciudad estado del Vaticano</option>
                                            <option value="Colombia" id="CO">Colombia</option>
                                            <option value="Comores" id="KM">Comores</option>
                                            <option value="Congo" id="CG">Congo</option>
                                            <option value="Corea" id="KR">Corea</option>
                                            <option value="Corea del Norte" id="KP">Corea del Norte</option>
                                            <option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
                                            <option value="Croacia" id="HR">Croacia</option>
                                            <option value="Cuba" id="CU">Cuba</option>
                                            <option value="Dinamarca" id="DK">Dinamarca</option>
                                            <option value="Djibouri" id="DJ">Djibouri</option>
                                            <option value="Dominica" id="DM">Dominica</option>
                                            <option value="Ecuador" id="EC">Ecuador</option>
                                            <option value="Egipto" id="EG">Egipto</option>
                                            <option value="El Salvador" id="SV">El Salvador</option>
                                            <option value="Emiratos Arabes Unidos" id="AE">Emiratos Arabes Unidos</option>
                                            <option value="Eritrea" id="ER">Eritrea</option>
                                            <option value="Eslovaquia" id="SK">Eslovaquia</option>
                                            <option value="Eslovenia" id="SI">Eslovenia</option>
                                            <option value="España" id="ES">España</option>
                                            <option value="Estados Unidos" id="US">Estados Unidos</option>
                                            <option value="Estonia" id="EE">Estonia</option>
                                            <option value="c" id="ET">Etiopía</option>
                                            <option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República Yugoslava de Macedonia</option>
                                            <option value="Filipinas" id="PH">Filipinas</option>
                                            <option value="Finlandia" id="FI">Finlandia</option>
                                            <option value="Francia" id="FR">Francia</option>
                                            <option value="Gabón" id="GA">Gabón</option>
                                            <option value="Gambia" id="GM">Gambia</option>
                                            <option value="Georgia" id="GE">Georgia</option>
                                            <option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">Georgia del Sur y las islas Sandwich del Sur</option>
                                            <option value="Ghana" id="GH">Ghana</option>
                                            <option value="Gibraltar" id="GI">Gibraltar</option>
                                            <option value="Granada" id="GD">Granada</option>
                                            <option value="Grecia" id="GR">Grecia</option>
                                            <option value="Groenlandia" id="GL">Groenlandia</option>
                                            <option value="Guadalupe" id="GP">Guadalupe</option>
                                            <option value="Guam" id="GU">Guam</option>
                                            <option value="Guatemala" id="GT">Guatemala</option>
                                            <option value="Guayana" id="GY">Guayana</option>
                                            <option value="Guayana francesa" id="GF">Guayana francesa</option>
                                            <option value="Guinea" id="GN">Guinea</option>
                                            <option value="Guinea Ecuatorial" id="GQ">Guinea Ecuatorial</option>
                                            <option value="Guinea-Bissau" id="GW">Guinea-Bissau</option>
                                            <option value="Haití" id="HT">Haití</option>
                                            <option value="Holanda" id="NL">Holanda</option>
                                            <option value="Honduras" id="HN">Honduras</option>
                                            <option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
                                            <option value="Hungría" id="HU">Hungría</option>
                                            <option value="India" id="IN">India</option>
                                            <option value="Indonesia" id="ID">Indonesia</option>
                                            <option value="Irak" id="IQ">Irak</option>
                                            <option value="Irán" id="IR">Irán</option>
                                            <option value="Irlanda" id="IE">Irlanda</option>
                                            <option value="Isla Bouvet" id="BV">Isla Bouvet</option>
                                            <option value="Isla Christmas" id="CX">Isla Christmas</option>
                                            <option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald</option>
                                            <option value="Islandia" id="IS">Islandia</option>
                                            <option value="Islas Caimán" id="KY">Islas Caimán</option>
                                            <option value="Islas Cook" id="CK">Islas Cook</option>
                                            <option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
                                            <option value="Islas Faroe" id="FO">Islas Faroe</option>
                                            <option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
                                            <option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland</option>
                                            <option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
                                            <option value="Islas Marshall" id="MH">Islas Marshall</option>
                                            <option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados Unidos</option>
                                            <option value="Islas Palau" id="PW">Islas Palau</option>
                                            <option value="Islas Salomón" d="SB">Islas Salomón</option>
                                            <option value="Islas Tokelau" id="TK">Islas Tokelau</option>
                                            <option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
                                            <option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
                                            <option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino Unido</option>
                                            <option value="Israel" id="IL">Israel</option>
                                            <option value="Italia" id="IT">Italia</option>
                                            <option value="Jamaica" id="JM">Jamaica</option>
                                            <option value="Japón" id="JP">Japón</option>
                                            <option value="Jordania" id="JO">Jordania</option>
                                            <option value="Kazajistán" id="KZ">Kazajistán</option>
                                            <option value="Kenia" id="KE">Kenia</option>
                                            <option value="Kirguizistán" id="KG">Kirguizistán</option>
                                            <option value="Kiribati" id="KI">Kiribati</option>
                                            <option value="Kuwait" id="KW">Kuwait</option>
                                            <option value="Laos" id="LA">Laos</option>
                                            <option value="Lesoto" id="LS">Lesoto</option>
                                            <option value="Letonia" id="LV">Letonia</option>
                                            <option value="Líbano" id="LB">Líbano</option>
                                            <option value="Liberia" id="LR">Liberia</option>
                                            <option value="Libia" id="LY">Libia</option>
                                            <option value="Liechtenstein" id="LI">Liechtenstein</option>
                                            <option value="Lituania" id="LT">Lituania</option>
                                            <option value="Luxemburgo" id="LU">Luxemburgo</option>
                                            <option value="Macao R. A. E" id="MO">Macao R. A. E</option>
                                            <option value="Madagascar" id="MG">Madagascar</option>
                                            <option value="Malasia" id="MY">Malasia</option>
                                            <option value="Malawi" id="MW">Malawi</option>
                                            <option value="Maldivas" id="MV">Maldivas</option>
                                            <option value="Malí" id="ML">Malí</option>
                                            <option value="Malta" id="MT">Malta</option>
                                            <option value="Marruecos" id="MA">Marruecos</option>
                                            <option value="Martinica" id="MQ">Martinica</option>
                                            <option value="Mauricio" id="MU">Mauricio</option>
                                            <option value="Mauritania" id="MR">Mauritania</option>
                                            <option value="Mayotte" id="YT">Mayotte</option>
                                            <option value="México" id="MX">México</option>
                                            <option value="Micronesia" id="FM">Micronesia</option>
                                            <option value="Moldavia" id="MD">Moldavia</option>
                                            <option value="Mónaco" id="MC">Mónaco</option>
                                            <option value="Mongolia" id="MN">Mongolia</option>
                                            <option value="Montserrat" id="MS">Montserrat</option>
                                            <option value="Mozambique" id="MZ">Mozambique</option>
                                            <option value="Namibia" id="NA">Namibia</option>
                                            <option value="Nauru" id="NR">Nauru</option>
                                            <option value="Nepal" id="NP">Nepal</option>
                                            <option value="Nicaragua" id="NI">Nicaragua</option>
                                            <option value="Níger" id="NE">Níger</option>
                                            <option value="Nigeria" id="NG">Nigeria</option>
                                            <option value="Niue" id="NU">Niue</option>
                                            <option value="Norfolk" id="NF">Norfolk</option>
                                            <option value="Noruega" id="NO">Noruega</option>
                                            <option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
                                            <option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
                                            <option value="Omán" id="OM">Omán</option>
                                            <option value="Panamá" id="PA">Panamá</option>
                                            <option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
                                            <option value="Paquistán" id="PK">Paquistán</option>
                                            <option value="Paraguay" id="PY">Paraguay</option>
                                            <option value="Perú" id="PE">Perú</option>
                                            <option value="Pitcairn" id="PN">Pitcairn</option>
                                            <option value="Polinesia francesa" id="PF">Polinesia francesa</option>
                                            <option value="Polonia" id="PL">Polonia</option>
                                            <option value="Portugal" id="PT">Portugal</option>
                                            <option value="Puerto Rico" id="PR">Puerto Rico</option>
                                            <option value="Qatar" id="QA">Qatar</option>
                                            <option value="Reino Unido" id="UK">Reino Unido</option>
                                            <option value="República Centroafricana" id="CF">República Centroafricana</option>
                                            <option value="República Checa" id="CZ">República Checa</option>
                                            <option value="República de Sudáfrica" id="ZA">República de Sudáfrica</option>
                                            <option value="República Democrática del Congo Zaire" id="CD">República Democrática del Congo Zaire</option>
                                            <option value="República Dominicana" id="DO">República Dominicana</option>
                                            <option value="Reunión" id="RE">Reunión</option>
                                            <option value="Ruanda" id="RW">Ruanda</option>
                                            <option value="Rumania" id="RO">Rumania</option>
                                            <option value="Rusia" id="RU">Rusia</option>
                                            <option value="Samoa" id="WS">Samoa</option>
                                            <option value="Samoa occidental" id="AS">Samoa occidental</option>
                                            <option value="San Kitts y Nevis" id="KN">San Kitts y Nevis</option>
                                            <option value="San Marino" id="SM">San Marino</option>
                                            <option value="San Pierre y Miquelon" id="PM">San Pierre y Miquelon</option>
                                            <option value="San Vicente e Islas Granadinas" id="VC">San Vicente e Islas Granadinas</option>
                                            <option value="Santa Helena" id="SH">Santa Helena</option>
                                            <option value="Santa Lucía" id="LC">Santa Lucía</option>
                                            <option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
                                            <option value="Senegal" id="SN">Senegal</option>
                                            <option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
                                            <option value="Sychelles" id="SC">Seychelles</option>
                                            <option value="Sierra Leona" id="SL">Sierra Leona</option>
                                            <option value="Singapur" id="SG">Singapur</option>
                                            <option value="Siria" id="SY">Siria</option>
                                            <option value="Somalia" id="SO">Somalia</option>
                                            <option value="Sri Lanka" id="LK">Sri Lanka</option>
                                            <option value="Suazilandia" id="SZ">Suazilandia</option>
                                            <option value="Sudán" id="SD">Sudán</option>
                                            <option value="Suecia" id="SE">Suecia</option>
                                            <option value="Suiza" id="CH">Suiza</option>
                                            <option value="Surinam" id="SR">Surinam</option>
                                            <option value="Svalbard" id="SJ">Svalbard</option>
                                            <option value="Tailandia" id="TH">Tailandia</option>
                                            <option value="Taiwán" id="TW">Taiwán</option>
                                            <option value="Tanzania" id="TZ">Tanzania</option>
                                            <option value="Tayikistán" id="TJ">Tayikistán</option>
                                            <option value="Territorios británicos del océano Indico" id="IO">Territorios británicos del océano Indico</option>
                                            <option value="Territorios franceses del sur" id="TF">Territorios franceses del sur</option>
                                            <option value="Timor Oriental" id="TP">Timor Oriental</option>
                                            <option value="Togo" id="TG">Togo</option>
                                            <option value="Tonga" id="TO">Tonga</option>
                                            <option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
                                            <option value="Túnez" id="TN">Túnez</option>
                                            <option value="Turkmenistán" id="TM">Turkmenistán</option>
                                            <option value="Turquía" id="TR">Turquía</option>
                                            <option value="Tuvalu" id="TV">Tuvalu</option>
                                            <option value="Ucrania" id="UA">Ucrania</option>
                                            <option value="Uganda" id="UG">Uganda</option>
                                            <option value="Uruguay" id="UY">Uruguay</option>
                                            <option value="Uzbekistán" id="UZ">Uzbekistán</option>
                                            <option value="Vanuatu" id="VU">Vanuatu</option>
                                            <option value="Venezuela" id="VE">Venezuela</option>
                                            <option value="Vietnam" id="VN">Vietnam</option>
                                            <option value="Wallis y Futuna" id="WF">Wallis y Futuna</option>
                                            <option value="Yemen" id="YE">Yemen</option>
                                            <option value="Zambia" id="ZM">Zambia</option>
                                            <option value="Zimbabue" id="ZW">Zimbabue</option>
    </select>
                                    </div>	  
                                    	
                            <!--Gender-->
                                <div class="col-12 col-lg-3">
									<label for="sex" class="binding">Sexo</label>
                                    <select class=" form-select sex_option" name="sex" tabindex="0" aria-label="Sexo" required>
										<option value=""></option>
                                        <option value="F" id="Femenino">Femenino</option>
                                        <option value="M" id="Masculino">Masculino</option>
                                       <!--  <option value="P" id="PrefNoSpef">Prefiero no especificar</option> -->
                                    </select>
                                </div>
                            <!--Birthday-->
                                <div class="col-12 col-lg-3">
									<label for="birthday" class="binding">Fecha de Nacimiento</label>
                                    <input class="form-control" type="date" id="birthdayDate" name="birthday" tabindex="0" aria-label="Fecha de Nacimiento" required>
                                </div>
                        </div>   
                <!-- First row -->

                
						<!-- Second row -->
                        <div class="row mb-5">
                            <!--First LastName (Student)-->
                                <div class="col-12 col-lg-3">
									<label for="sLastName1" class="binding">Primer Apellido</label>
                                    <input class="form-control" type="text" id="studentLastName1" name="sLastName1" autocomplete="off" spellcheck="false"
                                    tabindex="0" autocapitalize="sentences" aria-label="Primer Apellido"required>
                                </div>
                            <!--Second LastName (Student)-->
                                <div class="col-12 col-lg-3">
									<label for="sLastName2" class="binding">Segundo Apellido</label>
                                    <input class="form-control" type="text" id="studentLastNamew" name="sLastName2" autocomplete="off" spellcheck="false"
                                    tabindex="0" autocapitalize="sentences" aria-label="Segundo Apellido">
                                </div>
                            <!--First Name (Student)-->
                                <div class="col-12 col-lg-3">
									<label for="sName1" class="binding">Primer Nombre</label>
                                    <input class="form-control" type="text" id="studentName1" name="sName1" autocomplete="off" spellcheck="false"
                                    tabindex="0" autocapitalize="sentences" aria-label="Primer Nombre"required>
                                </div>
                            <!--Second Name (Student)-->
                                <div class="col-12 col-lg-3">
									<label for="sName2" class="binding">Segundo Nombre</label>
                                    <input class="form-control" type="text" id="studentName2" name="sName2" autocomplete="off" spellcheck="false"
                                    tabindex="0" autocapitalize="sentences" aria-label="Segundo Nombre">
                                </div>
                        </div>
						<!-- Second row -->

                        
						<!-- Third row -->
                        <div class="row mb-5">
							<!--Medical Comments-->
							<div class="col-12 col-lg-6">
								<label for="medicalComments" class="binding">Comentarios Médicos</label>
								<textarea class="form-control" rows="3" cols="50" type="text" id="medComments" name="medicalComments" autocomplete="off" spellcheck="false"
								tabindex="0" autocapitalize="sentences" aria-label="Comentarios Médicos"></textarea>
							</div>
						<!--Student Comments-->
							<div class="col-12 col-lg-6">
								<label for="studentComments" class="binding">Comentarios del Estudiante</del></label>
								<textarea class="form-control" rows="3" cols="50" type="text" id="stdComments" name="studentComments" autocomplete="off" spellcheck="false"
								tabindex="0" autocapitalize="sentences" aria-label="Comentarios del Estudiante"></textarea>
							</div>
						</div>
                            <!-- Third row -->
                        

                        <!--General Information (Student)-->
                        <legend class="mb-5 text-center subtitle_text">Información General del Estudiante</legend>
						<!-- First general row -->
                        <div class="row mb-5">
                            <!--Student Email MEP-->
                                <div class="col-12 col-lg-3">
									<label for="sEmailMEP" class="binding">Correo MEP</label>
                                    <input class="form-control" type="email" id="studentEmailMEP" name="sEmailMEP" autocomplete="off" spellcheck="false"
                                    tabindex="0" autocapitalize="none" aria-label="Correo Electrónico MEP">
                                    
                                </div>
                            <!--Student Email-->
                                <div class="col-12 col-lg-3">
                                    <label for="sEmail" class="binding">Correo Personal</label>
                                    <input class="form-control" type="email" id="studentEmail" name="sEmail" autocomplete="off" spellcheck="false"
                                    tabindex="0" autocapitalize="none" aria-label="Correo Electrónico">
                                </div>
                            <!--Student Phone Number-->
                                <div class="col-12 col-lg-3">
                                    <label for="sPhone" class="binding">Número Celular</label>
                                    <input class="form-control" type="text" id="studentPhone" name="sPhone" autocomplete="off" spellcheck="false"
                                    tabindex="0" autocapitalize="none" aria-label="Número Celular">
                                </div>
						<!-- First general row -->

                            <!--Student Canton-->
							<div class="col-12 col-lg-3 ">
								<label for="canton" class="binding">Cantón</label>
								<select id="combobox1" class="form-select canton_option" name="canton" tabindex="0" aria-label="Cantón" ng-model="form.canton"required>
									<option value=""></option>
								</select>
							</div>
						<!--Student District-->
							<div class="col-12 col-lg-3">
								<label  id="text_combobox2" for="district" class="binding hide2">Distrito</label>
								<select id="combobox2" class=" form-select district_option hide2" name="district" tabindex="0" aria-label="Distrito"required>
									<option value=""></option>
								</select>
							</div>
                            <!--Student Route-->
                                <div class="col-12 col-lg-3">
									<label for="route" class=" binding">Ruta del Estudiante</label>
                                    <select class=" form-select route_option" name="route" tabindex="0" aria-label="Ruta">
                                        <option value=""></option>
                                        <option value="--Ninguna--" id="Ruta1">--Ninguna--</option>
                                        <option value="La Loma-6402" id="Ruta2">La Loma-6402</option>
                                        <option value="Quepos-6403" id="Ruta3">Quepos-6403</option>
                                        <option value="Playon-6404" id="Ruta4">Playon-6404</option>
                                        <option value="Bijagual-1116464" id="Ruta5">Bijagual-1116464</option>
                                        <option value="La Bandera-6465" id="Ruta5">La Bandera-6465</option>
                                        <option value="Esterillos-6477" id="Ruta5">Esterillos-6477</option>
                                        <option value="Parcelas y Río Seco-42300" id="Ruta5">Parcelas y Río Seco-42300</option>
                                        <option value="Pueblo Nuevo-423002" id="Ruta5">Pueblo Nuevo-423002</option>
                                    </select>
                                </div>
                           <!--Student Level-->
						   <div class="col-12 col-lg-3">
							<label for="level" class="binding">Grado Académico</label>
							<select id="grade" class="form-select level_option" name="level" tabindex="0" aria-label="Grado"required>
								<option value=""></option>
							</select>
						</div>
					<!--Technical Specialty-->
						<div class="col-12 col-lg-3">
							<label  id="Especialidad2"for="technical" class="binding hide2">Especialidad Técnica</label>
							<select id="Especialidad"class=" form-select technical_option hide2"  name="technical" tabindex="0" aria-label="Especialidad Técnica">
								<option value=""></option>
							</select>
						 </div>
								 <!--Student Address-->
							<div class="col-12 col-lg-9 align-self-end">
								<label for="studentAddress" class="binding">Dirección del Estudiante</del></label>
								<textarea rows="5" cols="50" class="form-control" type="text" id="stdAddress" name="studentAddress" autocomplete="off" spellcheck="false"
								tabindex="0" autocapitalize="sentences" aria-label="Dirección del Estudiante"required></textarea>
							</div>
					</div>
					<!-- First general row -->

                    
                    <div class="row mb-5">
                        <!--Student Condition-->
                            <div class="col-12 col-lg-3">
                                <label for="studentCondition" class="binding">Estado</label>
                                <select class=" form-select condition_option" name="studentCondition" tabindex="0" aria-label="Estado del Estudiante"required>
                                    <option value=""></option>
                                    <option value="Inactivo" id="Inactivo">Inactivo</option>
                                    <option value="Activo" id="Activo">Activo</option>
                                    <option value="Suspendido" id="Suspendido">Suspendido</option>
                                    <option value="Trasladado" id="Trasladado">Trasladado</option>
                                    <option value="Egresado Académico" id="EgresadoAca">Egresado Académico</option>
                                    <option value="Egresado Técnico" id="EgresadoTec">Egresado Técnico</option>
                                    <option value="Graduado" id="Graduado">Graduado</option>
                                </select>
                            </div>
                        <!--Student Adequacy-->
                            <div class="col-12 col-lg-3">
                                <label for="adequacy" class="binding">Adecuación</label>
                                <select class=" form-select adequacy_option" name="adequacy" tabindex="0" aria-label="Adecuación"required>
                                    <option value=""></option>
                                    <option value="No Requiere" id="No-Requiere">No Requiere</option>
                                    <option value="Significatica" id="Significatica">Significativa</option>
                                    <option value="No Significativa" id="No-Significatica">No Significativa</option>
                                    <option value="Acceso" id="Acceso">Acceso</option>
                                </select>
                            </div>
                        <!--Academy Year-->
                            <div class="col-12 col-lg-3">
                                <label for="yearAcademy" class="binding">Año Académico</label>
                                <select class="form-select year_option" name="yearAcademy" tabindex="0" aria-label="Año Académico"required>
                                    <option value=""></option>
                                    <option value="2022" id="Current-Year">2022</option>
                                    <option value="2023" id="Next-Year">2023</option>
                                </select>
                            </div>
                        <!--Insurances Policy-->
                        <div class="col-12 col-lg-3">
                            <label for="sPolicy" class="binding">Poliza de Seguros</label>
                            <input class="form-control" type="text" id="studentPolicy" name="sPolicy" autocomplete="off" spellcheck="false"
                            tabindex="0" autocapitalize="none" aria-label="Poliza de Seguros">
                        </div>
                                <!--Scholarship IMAS-->
                                
                            </div>
                    </div>


                    <div class="row mb-4">
                        <div class="col-12 col-lg-3 mb-5">
                            <!--Student Scholarships-->
                            <span id="becas">BECAS</span>
                            <div class="colum">
                                <!--Scholarship IMAS-->
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="scholarshipIMAS" name="sIMAS" value="1" 
                                    tabindex="0" aria-label="IMAS">
                                    <label for="sIMAS" class="binding">IMAS</label>
                                </div>
                                <!--Scholarship TRANSPORTE-->
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="scholarshipTRANS" name="sTRANSPORTE" value="1"
                                    tabindex="0" aria-label="TRANSPORTE">
                                    <label for="sTRANSPORTE" class="binding">TRANSPORTE</label>
                                </div>
                                <!--Scholarship COMEDOR-->
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="scholarshipCOM" name="sCOMEDOR" value="1"
                                    tabindex="0" aria-label="COMEDOR">
                                    <label for="sCOMEDOR" class="binding">COMEDOR</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <!--Student Permits-->
                            <span id="permisos">PERMISOS</span>
                            <div class="colum">
                                <!--Image Usage-->
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="imageUSAG" name="iUSAGE" value="1"
                                    tabindex="0" aria-label="USO DE IMAGEN">
                                    <label for="iUSAGE" class="binding">USO DE IMAGEN</label>
                                </div>
                                <!--Leaving Institution-->
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="leavingINST" name="lINSTITUTION" value="1"
                                    tabindex="0" aria-label="SALIDA DE LA INSTITUCIÓN">
                                    <label for="lINSTITUTION" class="binding">SALIDA DE LA INSTITUCIÓN</label>
                                </div>
                                <!-- Religion -->
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="actReligion" name="Religion" value="1"
                                    tabindex="0" aria-label="Religión">
                                    <label for="actReligion" class="binding">RELIGION</label>
                                </div>
                            </div>
                        </div>        
                    </div>

                    
            <!--Information (Manager)-->
            <div class="container information_manager">
                <section class="Manager-Data">
                    <!--Personal Information (Legal Manager)-->
                    <legend class="text-center mb-5 subtitle_text">Información Personal del Encargado/a Legal</legend>
                    <d  iv class="row mb-5 justify-content-center">
                        <!--Identification Number (Student)-->
                            <div class="col-12 col-lg-3">
                                <label for="managerID" class="binding">Cédula</label>
                                <input class="form-control" type="text" id="IDmanager" name="managerID" autocomplete="off" spellcheck="false"
                                tabindex="0" autocapitalize="none" aria-label="Cédula"required>
                            </div>
                         <!--Country-->
                            <div class="col-12 col-lg-3">
                                <label for="managerCountry" class="binding">Nacionalidad</label>
                                <select class="form-select Mcountry_option" name="managerCountry" tabindex="0" aria-label="País"required>
                                    <option value=""></option>
                                    <option value="Costa Rica" id="CR">Costa Rica</option>								
                                    <option value="Afganistán" id="AF">Afganistán</option>
                                    <option value="Albania" id="AL">Albania</option>
                                    <option value="Alemania" id="DE">Alemania</option>
                                    <option value="Andorra" id="AD">Andorra</option>
                                    <option value="Angola" id="AO">Angola</option>
                                    <option value="Anguila" id="AI">Anguila</option>
                                    <option value="Antártida" id="AQ">Antártida</option>
                                    <option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
                                    <option value="Antillas holandesas" id="AN">Antillas holandesas</option>
                                    <option value="Arabia Saudí" id="SA">Arabia Saudí</option>
                                    <option value="Argelia" id="DZ">Argelia</option>
                                    <option value="Argentina" id="AR">Argentina</option>
                                    <option value="Armenia" id="AM">Armenia</option>
                                    <option value="Aruba" id="AW">Aruba</option>
                                    <option value="Australia" id="AU">Australia</option>
                                    <option value="Austria" id="AT">Austria</option>
                                    <option value="Azerbaiyán" id="AZ">Azerbaiyán</option>
                                    <option value="Bahamas" id="BS">Bahamas</option>
                                    <option value="Bahrein" id="BH">Bahrein</option>
                                    <option value="Bangladesh" id="BD">Bangladesh</option>
                                    <option value="Barbados" id="BB">Barbados</option>
                                    <option value="Bélgica" id="BE">Bélgica</option>
                                    <option value="Belice" id="BZ">Belice</option>
                                    <option value="Benín" id="BJ">Benín</option>
                                    <option value="Bermudas" id="BM">Bermudas</option>
                                    <option value="Bhután" id="BT">Bhután</option>
                                    <option value="Bielorrusia" id="BY">Bielorrusia</option>
                                    <option value="Birmania" id="MM">Birmania</option>
                                    <option value="Bolivia" id="BO">Bolivia</option>
                                    <option value="Bosnia y Herzegovina" id="BA">Bosnia y Herzegovina</option>
                                    <option value="Botsuana" id="BW">Botsuana</option>
                                    <option value="Brasil" id="BR">Brasil</option>
                                    <option value="Brunei" id="BN">Brunei</option>
                                    <option value="Bulgaria" id="BG">Bulgaria</option>
                                    <option value="Burkina Faso" id="BF">Burkina Faso</option>
                                    <option value="Burundi" id="BI">Burundi</option>
                                    <option value="Cabo Verde" id="CV">Cabo Verde</option>
                                    <option value="Camboya" id="KH">Camboya</option>
                                    <option value="Camerún" id="CM">Camerún</option>
                                    <option value="Canadá" id="CA">Canadá</option>
                                    <option value="Chad" id="TD">Chad</option>
                                    <option value="Chile" id="CL">Chile</option>
                                    <option value="China" id="CN">China</option>
                                    <option value="Chipre" id="CY">Chipre</option>
                                    <option value="Ciudad estado del Vaticano" id="VA">Ciudad estado del Vaticano</option>
                                    <option value="Colombia" id="CO">Colombia</option>
                                    <option value="Comores" id="KM">Comores</option>
                                    <option value="Congo" id="CG">Congo</option>
                                    <option value="Corea" id="KR">Corea</option>
                                    <option value="Corea del Norte" id="KP">Corea del Norte</option>
                                    <option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
                                    <option value="Croacia" id="HR">Croacia</option>
                                    <option value="Cuba" id="CU">Cuba</option>
                                    <option value="Dinamarca" id="DK">Dinamarca</option>
                                    <option value="Djibouri" id="DJ">Djibouri</option>
                                    <option value="Dominica" id="DM">Dominica</option>
                                    <option value="Ecuador" id="EC">Ecuador</option>
                                    <option value="Egipto" id="EG">Egipto</option>
                                    <option value="El Salvador" id="SV">El Salvador</option>
                                    <option value="Emiratos Arabes Unidos" id="AE">Emiratos Arabes Unidos</option>
                                    <option value="Eritrea" id="ER">Eritrea</option>
                                    <option value="Eslovaquia" id="SK">Eslovaquia</option>
                                    <option value="Eslovenia" id="SI">Eslovenia</option>
                                    <option value="España" id="ES">España</option>
                                    <option value="Estados Unidos" id="US">Estados Unidos</option>
                                    <option value="Estonia" id="EE">Estonia</option>
                                    <option value="c" id="ET">Etiopía</option>
                                    <option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República Yugoslava de Macedonia</option>
                                    <option value="Filipinas" id="PH">Filipinas</option>
                                    <option value="Finlandia" id="FI">Finlandia</option>
                                    <option value="Francia" id="FR">Francia</option>
                                    <option value="Gabón" id="GA">Gabón</option>
                                    <option value="Gambia" id="GM">Gambia</option>
                                    <option value="Georgia" id="GE">Georgia</option>
                                    <option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">Georgia del Sur y las islas Sandwich del Sur</option>
                                    <option value="Ghana" id="GH">Ghana</option>
                                    <option value="Gibraltar" id="GI">Gibraltar</option>
                                    <option value="Granada" id="GD">Granada</option>
                                    <option value="Grecia" id="GR">Grecia</option>
                                    <option value="Groenlandia" id="GL">Groenlandia</option>
                                    <option value="Guadalupe" id="GP">Guadalupe</option>
                                    <option value="Guam" id="GU">Guam</option>
                                    <option value="Guatemala" id="GT">Guatemala</option>
                                    <option value="Guayana" id="GY">Guayana</option>
                                    <option value="Guayana francesa" id="GF">Guayana francesa</option>
                                    <option value="Guinea" id="GN">Guinea</option>
                                    <option value="Guinea Ecuatorial" id="GQ">Guinea Ecuatorial</option>
                                    <option value="Guinea-Bissau" id="GW">Guinea-Bissau</option>
                                    <option value="Haití" id="HT">Haití</option>
                                    <option value="Holanda" id="NL">Holanda</option>
                                    <option value="Honduras" id="HN">Honduras</option>
                                    <option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
                                    <option value="Hungría" id="HU">Hungría</option>
                                    <option value="India" id="IN">India</option>
                                    <option value="Indonesia" id="ID">Indonesia</option>
                                    <option value="Irak" id="IQ">Irak</option>
                                    <option value="Irán" id="IR">Irán</option>
                                    <option value="Irlanda" id="IE">Irlanda</option>
                                    <option value="Isla Bouvet" id="BV">Isla Bouvet</option>
                                    <option value="Isla Christmas" id="CX">Isla Christmas</option>
                                    <option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald</option>
                                    <option value="Islandia" id="IS">Islandia</option>
                                    <option value="Islas Caimán" id="KY">Islas Caimán</option>
                                    <option value="Islas Cook" id="CK">Islas Cook</option>
                                    <option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
                                    <option value="Islas Faroe" id="FO">Islas Faroe</option>
                                    <option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
                                    <option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland</option>
                                    <option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
                                    <option value="Islas Marshall" id="MH">Islas Marshall</option>
                                    <option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados Unidos</option>
                                    <option value="Islas Palau" id="PW">Islas Palau</option>
                                    <option value="Islas Salomón" d="SB">Islas Salomón</option>
                                    <option value="Islas Tokelau" id="TK">Islas Tokelau</option>
                                    <option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
                                    <option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
                                    <option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino Unido</option>
                                    <option value="Israel" id="IL">Israel</option>
                                    <option value="Italia" id="IT">Italia</option>
                                    <option value="Jamaica" id="JM">Jamaica</option>
                                    <option value="Japón" id="JP">Japón</option>
                                    <option value="Jordania" id="JO">Jordania</option>
                                    <option value="Kazajistán" id="KZ">Kazajistán</option>
                                    <option value="Kenia" id="KE">Kenia</option>
                                    <option value="Kirguizistán" id="KG">Kirguizistán</option>
                                    <option value="Kiribati" id="KI">Kiribati</option>
                                    <option value="Kuwait" id="KW">Kuwait</option>
                                    <option value="Laos" id="LA">Laos</option>
                                    <option value="Lesoto" id="LS">Lesoto</option>
                                    <option value="Letonia" id="LV">Letonia</option>
                                    <option value="Líbano" id="LB">Líbano</option>
                                    <option value="Liberia" id="LR">Liberia</option>
                                    <option value="Libia" id="LY">Libia</option>
                                    <option value="Liechtenstein" id="LI">Liechtenstein</option>
                                    <option value="Lituania" id="LT">Lituania</option>
                                    <option value="Luxemburgo" id="LU">Luxemburgo</option>
                                    <option value="Macao R. A. E" id="MO">Macao R. A. E</option>
                                    <option value="Madagascar" id="MG">Madagascar</option>
                                    <option value="Malasia" id="MY">Malasia</option>
                                    <option value="Malawi" id="MW">Malawi</option>
                                    <option value="Maldivas" id="MV">Maldivas</option>
                                    <option value="Malí" id="ML">Malí</option>
                                    <option value="Malta" id="MT">Malta</option>
                                    <option value="Marruecos" id="MA">Marruecos</option>
                                    <option value="Martinica" id="MQ">Martinica</option>
                                    <option value="Mauricio" id="MU">Mauricio</option>
                                    <option value="Mauritania" id="MR">Mauritania</option>
                                    <option value="Mayotte" id="YT">Mayotte</option>
                                    <option value="México" id="MX">México</option>
                                    <option value="Micronesia" id="FM">Micronesia</option>
                                    <option value="Moldavia" id="MD">Moldavia</option>
                                    <option value="Mónaco" id="MC">Mónaco</option>
                                    <option value="Mongolia" id="MN">Mongolia</option>
                                    <option value="Montserrat" id="MS">Montserrat</option>
                                    <option value="Mozambique" id="MZ">Mozambique</option>
                                    <option value="Namibia" id="NA">Namibia</option>
                                    <option value="Nauru" id="NR">Nauru</option>
                                    <option value="Nepal" id="NP">Nepal</option>
                                    <option value="Nicaragua" id="NI">Nicaragua</option>
                                    <option value="Níger" id="NE">Níger</option>
                                    <option value="Nigeria" id="NG">Nigeria</option>
                                    <option value="Niue" id="NU">Niue</option>
                                    <option value="Norfolk" id="NF">Norfolk</option>
                                    <option value="Noruega" id="NO">Noruega</option>
                                    <option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
                                    <option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
                                    <option value="Omán" id="OM">Omán</option>
                                    <option value="Panamá" id="PA">Panamá</option>
                                    <option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
                                    <option value="Paquistán" id="PK">Paquistán</option>
                                    <option value="Paraguay" id="PY">Paraguay</option>
                                    <option value="Perú" id="PE">Perú</option>
                                    <option value="Pitcairn" id="PN">Pitcairn</option>
                                    <option value="Polinesia francesa" id="PF">Polinesia francesa</option>
                                    <option value="Polonia" id="PL">Polonia</option>
                                    <option value="Portugal" id="PT">Portugal</option>
                                    <option value="Puerto Rico" id="PR">Puerto Rico</option>
                                    <option value="Qatar" id="QA">Qatar</option>
                                    <option value="Reino Unido" id="UK">Reino Unido</option>
                                    <option value="República Centroafricana" id="CF">República Centroafricana</option>
                                    <option value="República Checa" id="CZ">República Checa</option>
                                    <option value="República de Sudáfrica" id="ZA">República de Sudáfrica</option>
                                    <option value="República Democrática del Congo Zaire" id="CD">República Democrática del Congo Zaire</option>
                                    <option value="República Dominicana" id="DO">República Dominicana</option>
                                    <option value="Reunión" id="RE">Reunión</option>
                                    <option value="Ruanda" id="RW">Ruanda</option>
                                    <option value="Rumania" id="RO">Rumania</option>
                                    <option value="Rusia" id="RU">Rusia</option>
                                    <option value="Samoa" id="WS">Samoa</option>
                                    <option value="Samoa occidental" id="AS">Samoa occidental</option>
                                    <option value="San Kitts y Nevis" id="KN">San Kitts y Nevis</option>
                                    <option value="San Marino" id="SM">San Marino</option>
                                    <option value="San Pierre y Miquelon" id="PM">San Pierre y Miquelon</option>
                                    <option value="San Vicente e Islas Granadinas" id="VC">San Vicente e Islas Granadinas</option>
                                    <option value="Santa Helena" id="SH">Santa Helena</option>
                                    <option value="Santa Lucía" id="LC">Santa Lucía</option>
                                    <option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
                                    <option value="Senegal" id="SN">Senegal</option>
                                    <option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
                                    <option value="Sychelles" id="SC">Seychelles</option>
                                    <option value="Sierra Leona" id="SL">Sierra Leona</option>
                                    <option value="Singapur" id="SG">Singapur</option>
                                    <option value="Siria" id="SY">Siria</option>
                                    <option value="Somalia" id="SO">Somalia</option>
                                    <option value="Sri Lanka" id="LK">Sri Lanka</option>
                                    <option value="Suazilandia" id="SZ">Suazilandia</option>
                                    <option value="Sudán" id="SD">Sudán</option>
                                    <option value="Suecia" id="SE">Suecia</option>
                                    <option value="Suiza" id="CH">Suiza</option>
                                    <option value="Surinam" id="SR">Surinam</option>
                                    <option value="Svalbard" id="SJ">Svalbard</option>
                                    <option value="Tailandia" id="TH">Tailandia</option>
                                    <option value="Taiwán" id="TW">Taiwán</option>
                                    <option value="Tanzania" id="TZ">Tanzania</option>
                                    <option value="Tayikistán" id="TJ">Tayikistán</option>
                                    <option value="Territorios británicos del océano Indico" id="IO">Territorios británicos del océano Indico</option>
                                    <option value="Territorios franceses del sur" id="TF">Territorios franceses del sur</option>
                                    <option value="Timor Oriental" id="TP">Timor Oriental</option>
                                    <option value="Togo" id="TG">Togo</option>
                                    <option value="Tonga" id="TO">Tonga</option>
                                    <option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
                                    <option value="Túnez" id="TN">Túnez</option>
                                    <option value="Turkmenistán" id="TM">Turkmenistán</option>
                                    <option value="Turquía" id="TR">Turquía</option>
                                    <option value="Tuvalu" id="TV">Tuvalu</option>
                                    <option value="Ucrania" id="UA">Ucrania</option>
                                    <option value="Uganda" id="UG">Uganda</option>
                                    <option value="Uruguay" id="UY">Uruguay</option>
                                    <option value="Uzbekistán" id="UZ">Uzbekistán</option>
                                    <option value="Vanuatu" id="VU">Vanuatu</option>
                                    <option value="Venezuela" id="VE">Venezuela</option>
                                    <option value="Vietnam" id="VN">Vietnam</option>
                                    <option value="Wallis y Futuna" id="WF">Wallis y Futuna</option>
                                    <option value="Yemen" id="YE">Yemen</option>
                                    <option value="Zambia" id="ZM">Zambia</option>
                                    <option value="Zimbabue" id="ZW">Zimbabue</option>
                            </select>
                            </div>

                            
                            <!--Gender-->
                            <div class="col-12 col-lg-3">
                                <label for="managerGender" class="binding">Sexo</label>
                                <select class="form-select Mgender_option" name="managerGender" tabindex="0" aria-label="Género"required>
                                    <option value=""></option>
                                    <option value="F" id="Femenino">Femenino</option>
                                    <option value="M" id="Masculino">Masculino</option>
                                    <option value="P" id="PrefNoSpef">Prefiero no especificar</option>
                                </select>
                            </div>
                        </div>

                            
						<!-- First manager row -->

                        <div class="row mb-5">
                            <!--First LastName (Manager)-->
                                <div class="col-12 col-lg-3">
									<label for="mLast Name1" class="binding">Primer Apellido</label>
                                    <input class="form-control" type="text" id="managertLastName1" name="mLastName1" autocomplete="off" spellcheck="false"
                                    tabindex="0" autocapitalize="sentences" aria-label="Primer Apellido"required>
                                </div>
                            <!--Second LastName (Manager)-->
                                <div class="col-12 col-lg-3">
									<label for="mLastName2" class="binding">Segundo Apellido</label>
                                    <input class="form-control" type="text" id="managerLastNamew" name="mLastName2" autocomplete="off" spellcheck="false"
                                    tabindex="0" autocapitalize="sentences" aria-label="Segundo Apellido">
                                </div>
                            <!--First Name (Manager)-->
                                <div class="col-12 col-lg-3">
									<label for="mName1" class="binding">Primer Nombre</label>
                                    <input class="form-control" type="text" id="managerName1" name="mName1" autocomplete="off" spellcheck="false"
                                    tabindex="0" autocapitalize="sentences" aria-label="Primer Nombre"required>
                            	</div>
                            <!--Second Name (Manager)-->
                                <div class="col-12 col-lg-3">
									<label for="mName2" class="binding">Segundo Nombre</label>
                                    <input class="form-control" type="text" id="managerName2" name="mName2" autocomplete="off" spellcheck="false"
                                    tabindex="0" autocapitalize="sentences" aria-label="Segundo Nombre">
                                </div>
                        </div>

                        
						<!-- First enrollment admin row -->
                        <legend class="mb-5 text-center subtitle_text">Información General de la Matricula</legend>
                        <div class="row justify-content-center mb-5">
                           
								 <!-- First name--><!-- Second name-->
								 <div class="col-12 col-lg-3">
									<label for="AsistentName" class="binding">Nombre del Asistente</label>
                                    <input class="form-control" type="text" id="managerEmail" name="AsistentName" autocomplete="off" spellcheck="false"
                                    tabindex="0" autocapitalize="none" aria-label="Número Celular"required>
                                </div>
                            <!-- Second name-->
                                <div class="col-12 col-lg-3">
									<label for="AsistentLastName" class="binding">Apellido del Asistente</label>
                                    <input class="form-control" type="text" id="managerPhone" name="AsistentLastName" autocomplete="off" spellcheck="false"
                                    tabindex="0" autocapitalize="none" aria-label="Número Celular"required>
                                </div>
                        </div>
                    </section>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>
  
  
    <style>
#form{
  opacity: 0;
  position: absolute;
}
  </style>
   <form action="matricula.php" method="POST" id="form">
<input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
<button id="click" class="click" type="submit" ></button>
</form>
<form action="matricula_nocturno_1.php" method="POST" id="form">
<input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
<button id="click2" class="click2" type="submit" ></button>
</form>
<form action="matricula_pn_1.php" method="POST" id="form">
<input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
<button id="click3" class="click3" type="submit" ></button>
</form>
<form action="tabla-estudiantes.php" method="POST" id="form">
<input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
<button id="click4" class="click" type="submit" ></button>
</form>
<form action="tabla-estudiantes_pn.php" method="POST" id="form">
<input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
<button id="click5" class="click" type="submit" ></button>
</form>
<form action="tabla-estudiantes_noc.php" method="POST" id="form">
<input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
<button id="click6" class="click" type="submit" ></button>
</form>
<form action="Home.php" method="POST" id="form">
<input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
<button id="click7" class="click" type="submit" ></button>
</form>
<!-- Niveles -->
<form action="tabla-estudiantes_7.php" method="POST" id="form">
<input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
<button id="click_7" class="click" type="submit" ></button>
</form>
<form action="tabla-estudiantes_8.php" method="POST" id="form">
<input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
<button id="click_8" class="click" type="submit" ></button>
</form>
<form action="tabla-estudiantes_9.php" method="POST" id="form">
<input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
<button id="click_9" class="click" type="submit" ></button>
</form>
<form action="tabla-estudiantes_10.php" method="POST" id="form">
<input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
<button id="click_10" class="click" type="submit" ></button>
</form>
<form action="tabla-estudiantes_11.php" method="POST" id="form">
<input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
<button id="click_11" class="click" type="submit" ></button>
</form>
<form action="tabla-estudiantes_12.php" method="POST" id="form">
<input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
<button id="click_12" class="click" type="submit" ></button>
</form>
    <script>
    home_btn.onclick=function(){
        click7.click();
    }
    student_btn.onclick=function(){
    swal({
        buttons: {
          Diurno: {
            text:"Diurno",
            value: "Diurno",
          },
          Nocturno: {
            text:"Nocturno",
            value: "Nocturno",
        },
         pn:{
            text:"Plan Nacional",
            value: "Plan Nacional",
         },
        },
      })
      .then((value) => {
  switch (value) {

    case "Diurno":
      click4.click();
      break;
      case "Nocturno":
      click6.click();
      break;
      case "Plan Nacional":
      click5.click();
      break;
 
    default:
  }
});
};</script>
    <script>
    diurna.onclick=function(){
        click.click();
    }
    pn.onclick=function(){
        click3.click();
    }
    nocturna.onclick=function(){
        click2.click();
    }
    let search2=document.getElementById("search");
    search2.addEventListener("click",buscar);
    function buscar(){
        swal({
        buttons: {
            Septimo: {
            text:"Septimo",
            value: "7",
          },
          Octavo: {
            text:"Octavo",
            value: "8",
        },
         Noveno:{
            text:"Noveno",
            value: "9",
         },
         Decimo: {
            text:"Decimo",
            value: "10",
          },
          Undecimo: {
            text:"Undecimo",
            value: "11",
        },
         Duodecimo:{
            text:"Duodecimo",
            value: "12",
         }, 
        },
      }).then((value) => {
  switch (value) {

    case "7":
        click_7.click();
      break;
      case "8":
        click_8.click();
      break;
      case "9":
        click_9.click();
      break;
 
      case "10":
        click_10.click();
      break;
      case "11":
        click_11.click();
      break;
      case "12":
        click_12.click();
      break;
    default:
      }
    });
    }
</script>
    <script src="js/home-comands.js"></script>
    <script src="js/popup.js"></script>
    <script src="js/select_grade.js"></script>
</main>
</body>
</html>
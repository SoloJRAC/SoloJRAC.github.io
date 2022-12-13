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
                    
                    <div class="offset-3 col-6 text-end align-self-end">
                        <li>
                            <a id="inicio">
                                <i class="fa-solid fa-user-plus add-user-diurno " ></i>
                            </a>
                            <a id="search">
                                <i class="fa-solid fa-magnifying-glass add-user-diurno" ></i>
                            </li>
                            <a id="edit">
                            <i class="fa-solid fa-user-pen"></i>
                            </a>
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
                    <th scope="col">Fecha Matricula</th>
                </tr>
            </thead>
            <tbody>
            <?php 
$servidor ="localhost";
$usuario="vdhkgimy_admin";
$contraseña="Aarce0908";
$BD="vdhkgimy_Matricula";

$conection = mysqli_connect($servidor, $usuario, $contraseña, $BD);
            $sql="SELECT info_academica.Cedula_est, info_academica.Grado, info_personal_est.Nom1, info_personal_est.Nom2, info_personal_est.Ap1, info_personal_est.Ap2, info_personal_est.Fecha_Nacimiento FROM info_academica
            INNER JOIN info_personal_est ON info_personal_est.Cedula_est=info_academica.Cedula_est INNER JOIN conect_matricula ON conect_matricula.Cedula_est=info_academica.Cedula_est WHERE Tipo_matricula='Plan Nacional' AND Grado=7";
		$result=mysqli_query($conection,$sql);
        $mostrar = mysqli_fetch_array($result);
            $cont = 1;
            do {
                ?>
    
            <tr>
                <td><?php echo $cont ?></td>
                <td><?php echo $mostrar['Cedula_est'] ?></td>
                <td><?php echo $mostrar['Ap1'] ?></td>
                <td><?php echo $mostrar['Ap2'] ?></td>
                <td><?php echo $mostrar['Nom1']." ".$mostrar['Nom2'] ?></td>
                <td><?php echo $mostrar['Fecha_Nacimiento'] ?></td>
            </tr>
        <?php
                    $cont++;
                } while ($mostrar = mysqli_fetch_array($result));
         ?>
            </tbody>
        </table>
    </div>

      
    
    <div id=pop class="popup-home">
        <button id=hidepop , class="close-btn">X</button>
        <div class="form">
            <h5 class="text-center">
                Elija el area en el que desea añadir al estudiante
            </h5>
        <div class="form_element">
        <a ><button id="diurna">Sección Técnica diurna</button></a>
            
            </div>
            <div class="form_element">
                <a ><button id="pn">Plan Nacional</button></a>
            </div> 
                <div class="form_element">
                    <a ><button id="nocturna">Sección Técnica nocturna</button></a>
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
<form action="tabla-estudiantes_noc_10.php" method="POST" id="form">
<input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
<button id="click_10" class="click" type="submit" ></button>
</form>
<form action="tabla-estudiantes_noc_11.php" method="POST" id="form">
<input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
<button id="click_11" class="click" type="submit" ></button>
</form>
<form action="tabla-estudiantes_noc_12.php" method="POST" id="form">
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
    };
</script>
    <script src="js/home-comands.js"></script>
    <script src="js/popup.js"></script>
</main>
</body>
</html>
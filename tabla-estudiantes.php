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
        <div class="logo_content">
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
                <a href="Home.php">
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
                <nav class="menu_bar" method="POST">
                    <ul class="navigation">
                        <li id="sun">
                            <a href="#">
                                <i class="fa-solid fa-sun " id="sunicon"></i>
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
                                <i class="fa-solid fa-user-plus add-user-diurno" data-bs-toggle="modal" data-bs-target="#popup-add"></i>
                            </a>
                            <a id="search">
                                <i class="fa-solid fa-magnifying-glass add-user-diurno"></i>
                            </a>
                        </li>
                    </div>
                </div>
            </header>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col">Cédula</th>
                        <th scope="col">Primer Apellido</th>
                        <th scope="col">Segundo Apellido</th>
                        <th scope="col">Nombre</th>
                        <th scope="col" class="text-center">Grado</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("conexion.php");
                    $sql = "SELECT info_academica.Cedula_est, info_academica.Grado, info_personal_est.Nom1,  info_personal_est.Nom2,info_personal_est.Ap1, info_personal_est.Ap2, info_personal_est.Fecha_Nacimiento, conect_matricula.Tipo_matricula, conect_matricula.Fecha FROM info_academica
            INNER JOIN info_personal_est ON info_personal_est.Cedula_est=info_academica.Cedula_est INNER JOIN conect_matricula ON conect_matricula.Cedula_est=info_academica.Cedula_est ORDER BY `info_personal_est`.`Nom1` ASC /* AND Especialidad='Informatica Empresarial' */";
                    $result = mysqli_query($conection, $sql);
                    /* $mostrar = mysqli_fetch_array($result); Nota: Esto hace que no se muestre la primer fila de la base*/
                    $cont = 1;
                    $cedula;
                    while ($mostrar = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td class='text-center'>" . $cont . "</td>";
                        echo "<td>" . $mostrar['Cedula_est'] . "</td>";
                        echo "<td>" . $mostrar['Ap1'] . "</td>";
                        echo "<td>" . $mostrar['Ap2'] . "</td>";
                        echo "<td>" . $mostrar['Nom1'] . "</td>";
                        echo "<td class='text-center'>" . $mostrar['Grado'] . "</td>";
                        echo "<td class='text-center'>";
                        echo "<a href='editar.php?Cedula_est=" . $mostrar['Cedula_est'] . "'  class='me-2' id='edit_icon'value='Edit'><li class='fa-solid fa-pen-to-square'></li></a>";
                        echo "<a href='confirmacion_eliminar.php?Cedula_est=" . $mostrar['Cedula_est'] . "' id='edit_icon'value='Delete'><i class='fa-solid fa-trash'></i></a>";
                        echo "</td>";
                        echo "</tr>";
                        $cont++;
                    }
                    ?>
                </tbody>
            </table>
            <!-- <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav> -->
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


        <style>
            #form {
                opacity: 0;
                position: absolute;
            }
        </style>
        <form action="matricula.php" method="POST" id="form">
            <input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
            <button id="click" class="click" type="submit"></button>
        </form>
        <form action="matricula_nocturno_1.php" method="POST" id="form">
            <input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
            <button id="click2" class="click2" type="submit"></button>
        </form>
        <form action="matricula_pn_1.php" method="POST" id="form">
            <input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
            <button id="click3" class="click3" type="submit"></button>
        </form>
        <form action="tabla-estudiantes.php" method="POST" id="form">
            <input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
            <button id="click4" class="click" type="submit"></button>
        </form>
        <form action="tabla-estudiantes_pn.php" method="POST" id="form">
            <input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
            <button id="click5" class="click" type="submit"></button>
        </form>
        <form action="tabla-estudiantes_noc.php" method="POST" id="form">
            <input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
            <button id="click6" class="click" type="submit"></button>
        </form>
        <form action="Home.php" method="POST" id="form">
            <input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
            <button id="click7" class="click" type="submit"></button>
        </form>
        <!-- Niveles -->
        <form action="tabla-estudiantes_7.php" method="POST" id="form">
            <input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
            <button id="click_7" class="click" type="submit"></button>
        </form>
        <form action="tabla-estudiantes_8.php" method="POST" id="form">
            <input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
            <button id="click_8" class="click" type="submit"></button>
        </form>
        <form action="tabla-estudiantes_9.php" method="POST" id="form">
            <input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
            <button id="click_9" class="click" type="submit"></button>
        </form>
        <form action="tabla-estudiantes_10.php" method="POST" id="form">
            <input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
            <button id="click_10" class="click" type="submit"></button>
        </form>
        <form action="tabla-estudiantes_11.php" method="POST" id="form">
            <input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
            <button id="click_11" class="click" type="submit"></button>
        </form>
        <form action="tabla-estudiantes_12.php" method="POST" id="form">
            <input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
            <button id="click_12" class="click" type="submit"></button>
        </form>


        <script>
            home_btn.onclick = function() {
                click7.click();
            }
            student_btn.onclick = function() {
                swal({
                        buttons: {
                            Diurno: {
                                text: "Diurno",
                                value: "Diurno",
                            },
                            Nocturno: {
                                text: "Nocturno",
                                value: "Nocturno",
                            },
                            pn: {
                                text: "Plan Nacional",
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
            };
        </script>
        <script>
            diurna.onclick = function() {
                click.click();
            }
            pn.onclick = function() {
                click3.click();
            }
            nocturna.onclick = function() {
                click2.click();
            }
            let search2 = document.getElementById("search");
            search2.addEventListener("click", buscar);

            function buscar() {
                swal({
                    buttons: {
                        Septimo: {
                            text: "Septimo",
                            value: "7",
                        },
                        Octavo: {
                            text: "Octavo",
                            value: "8",
                        },
                        Noveno: {
                            text: "Noveno",
                            value: "9",
                        },
                        Decimo: {
                            text: "Decimo",
                            value: "10",
                        },
                        Undecimo: {
                            text: "Undecimo",
                            value: "11",
                        },
                        Duodecimo: {
                            text: "Duodecimo",
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
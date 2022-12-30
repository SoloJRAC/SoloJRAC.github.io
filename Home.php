
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
        <nav>
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
        </nav>
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

        <!-- Inicio del saludo al usuario -->
        <section id="Home" class="m-3 Greeting">
            <ul class="row text-center list-unstyled">
                <li class="col-12 col-lg-6">
                    <h2 class="mb-3 mb-lg-0 text-lg-center" id="saludo">Buenos días</h2>
                </li>
                <li class="col-6 offset-lg-2 col-lg-2" role="button">
                    <a class="btn btn-primary btn-lg" id=inicio>Matrículas</a>
                </li>

                <li class="col-6 col-lg-2" role="button">
                    <a class="btn btn-primary btn-lg" id=reportes>Reportes</a>
                </li>
            </ul>
        </section>



        <div id=pop class="popup-home">
            <button id=hidepop , class="close-btn">X</button>
            <div class="form">
                <h5 class="text-center">
                    Elija el area en el que quiere realizar su matricula.
                </h5>
                <div class="form_element">
                    <a><button id="diurna">Sección Técnica diurna</button></a>

                </div>
                <div class="form_element">
                    <a><button id="pn">Plan Nacional</button></a>
                </div>
                <div class="form_element">
                    <a><button id="nocturna">Sección Técnica nocturna</button></a>
                </div>
            </div>
        </div>
        <!-- Fin del inicio del saludo al usuario -->
        <div class="Welcome_image">
            <img src="resources/pexels-jacob-colvin-1757363.jpg" alt="Colegio">
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
        <form action="select_pdf.php" method="POST" id="form">
            <input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
            <input type="text" name="caja_valor" id="caja_valor2">
            <button id="click7" class="click" type="submit"></button>
        </form>
        <form action="Home.php" method="POST" id="form">
            <input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
            <button id="click8" class="click" type="submit"></button>
        </form>

        <script>
            home_btn.onclick = function() {
                click8.click();
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

            reportes.onclick = function() {
                swal("Ingrese la cedula del estudiante:", {
                        content: "input",
                    })
                    .then((value) => {
                        var cedula = `${value}`;
                        if (cedula != "null") {
                            var caja_valor2 = document.getElementById("caja_valor2").value = cedula;
                            console.log("if");
                            window.location.href = "index.html"
                            click7.click();
                        }


                    });
            }
        </script>

        <script src="js/home-comands.js"></script>
        <script src="js/popup.js"></script>
    </main>
</body>

</html>
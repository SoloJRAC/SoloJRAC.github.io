<?php
$password = $_POST["password"];

if ($password == null) {
    ?><script>
        window.location.href = "index.html"
    </script>
    <?php
 } 
$cedula = $_POST['caja_valor'];

/* Conexion */
$servidor ="localhost";
$usuario="root";
$contraseña="";
$BD="vdhkgimy_matricula";

$conection = mysqli_connect($servidor, $usuario, $contraseña, $BD);

/* Llamado datos */
$tipo_matricula = mysqli_query($conection, "SELECT Tipo_matricula FROM conect_matricula WHERE Cedula_est='".$cedula."'");
$tipo_matricula = mysqli_fetch_column($tipo_matricula);

switch($tipo_matricula){
    case "Diurno":

        include('pdf.php');
    break;
    case "Plan Nacional":
        include('pdf.php');
    break;
    case "Nocturno":
        include('pdf_n.php');
    break;
    }
?>
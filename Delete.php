<?php
include("conexion.php");
$cedula = $_GET['Cedula_est'];
$sql = mysqli_query($conection, "DELETE FROM `info_personal_est` WHERE Cedula_est = $cedula");
?>
<script>
    window.location= "tabla-estudiantes.php";
</script>
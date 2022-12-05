<?php

$servidor ="localhost";
$usuario="root";
$contraseña="";
$BD="matricula";

$conection = mysqli_connect($servidor, $usuario, $contraseña, $BD);
if(!$conection){
    echo "fallo en la conection";
    die("conection failed: ".mysqli_connect_error());
}
else{
    echo "conexion exitosa";
}

$prueba =mysqli_query($conection,"SELECT `Nom1` FROM `info_personal_est` WHERE `Cedula_est`=402680825");
$prueba = mysqli_fetch_column($prueba);
echo $prueba;
$prueba2 =mysqli_query($conection,"SELECT  `Nom2` FROM `info_personal_est` WHERE `Cedula_est`=402680825");
$prueba2 = mysqli_fetch_column($prueba2);
echo $prueba2;
$prueba3 =mysqli_query($conection,"SELECT  `Ap1` FROM `info_personal_est` WHERE `Cedula_est`=402680825");
$prueba3 = mysqli_fetch_column($prueba3);
echo $prueba3;
$prueba4 =mysqli_query($conection,"SELECT `Ap2` FROM `info_personal_est` WHERE `Cedula_est`=402680825");
$prueba4 = mysqli_fetch_column($prueba4);
echo $prueba4;
$prueba5 =mysqli_query($conection,"SELECT `Fecha_Nacimiento` FROM `info_personal_est` WHERE `Cedula_est`=402680825");
$prueba5 = mysqli_fetch_column($prueba5);
echo $prueba5;
$prueba6 =mysqli_query($conection,"SELECT `Sexo` FROM `info_personal_est` WHERE `Cedula_est`=402680825");
$prueba6 = mysqli_fetch_column($prueba6);
echo $prueba6;
?>
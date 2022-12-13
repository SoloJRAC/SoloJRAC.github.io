<?php

$servidor ="localhost";
$usuario="vdhkgimy_admin";
$contraseña="Aarce0908";
$BD="vdhkgimy_Matricula";

$conection = mysqli_connect($servidor, $usuario, $contraseña, $BD);
if(!$conection){
    echo "fallo en la conection";
    die("conection failed: ".mysqli_connect_error());
}
else{
    echo "conexion exitosa";
}
?>
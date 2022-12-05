<?php
/* Verificacion de datos */
$studentID=$_POST['studentID'];
if (null == $studentID) {
    include("location:matricula.html"); 
}
$country_est=$_POST['country'];
if (null == $country_est) {
    include("location:matricula.html"); 
}
$sex= $_POST['sex'];
if (null == $sex) {
    include("location:matricula.html");
}
$birthday=$_POST['birthday'];
if (null == $birthday) {
    include("location:matricula.html");
}
$sLastName1= $_POST['sLastName1'];
if (null == $sLastName1) {
    include("location:matricula.html");
}
$sLastName2=$_POST['sLastName2'];
if (null == $sLastName2) {
    $sLastName2 = " ---";
}
$sName1= $_POST['sName1'];
if (null == $sName1) {
    include("location:matricula.html"); 
}
$sName2=$_POST['sName2'];
if (null == $sName2) {
    $sName2 = " ---";
}
$medicalComments= $_POST['medicalComments'];
if (null == $medicalComments) {
    $medicalComments = "--- ";
}
$studentComments=$_POST['studentComments'];
if (null == $studentComments) {
    $studentComments = "--- ";
}
$sEmailMEP= $_POST['sEmailMEP'];
if (null == $sEmailMEP) {
    $sEmailMEP = "--- ";
}
$sEmail=$_POST['sEmail'];
if (null == $sEmail) {
    $sEmail = "--- ";
}
$sPhone= $_POST['sPhone'];
if (null == $sPhone) {
    $sPhone = "--- ";
}
$canton=$_POST['canton'];
if (null == $canton) {
    include("location:matricula.html"); 
}
$district= $_POST['district'];
if (null == $district) {
    include("location:matricula.html");
}
$route= $_POST['route'];
if (null == $route) {
    $route = "--- ";
}
$level= $_POST['level'];
if (null == $level) {
    include("location:matricula.html");
}

$studentAddress=$_POST['studentAddress'];
if (null == $studentAddress) {
    include("location:matricula.html");
}
$studentCondition= $_POST['studentCondition'];
if (null == $studentCondition) {
    $studentCondition = " ---";
}
$adequacy=$_POST['adequacy'];
if (null == $adequacy) {
    include("location:matricula.html"); 
}
echo $yearAcademy= $_POST['yearAcademy'];
if (null == $yearAcademy) {
    include("location:matricula.html");
}
$sIMAS=$_POST['sIMAS'];
if (null == $sIMAS) {
    $sIMAS = 0;
}
$sPOLIZA= $_POST['sPOLIZA'];
if (null == $sPOLIZA) {
    $sPOLIZA = "---";
}
$sTRANSPORTE=$_POST['sTRANSPORTE'];
if (null == $sTRANSPORTE) {
    $sTRANSPORTE = 0;
}
$sCOMEDOR= $_POST['sCOMEDOR'];
if (null == $sCOMEDOR) {
    $sCOMEDOR =0;
}
$iUSAGE=$_POST['iUSAGE'];
if (null == $iUSAGE) {
    $iUSAGE = 0;
}
$lINSTITUTION= $_POST['lINSTITUTION'];
if (null == $lINSTITUTION) {
    $lINSTITUTION = 0;
}
$managerID=$_POST['managerID'];
if (null == $managerID) {
    include("location:matricula.html");
}
$managerCountry= $_POST['managerCountry'];
if (null == $managerCountry) {
    include("location:matricula.html");
}
$managerGender=$_POST['managerGender'];
if (null == $managerGender) {
    include("location:matricula.html");
    echo"se vuelve al inicio";
}
$mLastName1= $_POST['mLastName1'];
if (null == $mLastName1) {
    include("location:matricula.html"); 
}
$mLastName2=$_POST['mLastName2'];
if (null == $mLastName2) {
    $mLastName2 = "--- ";
}
$mName1= $_POST['mName1'];
if (null == $mName1) {
    include("location:matricula.html"); 
}
$mName2=$_POST['mName2'];
if (null == $mName2) {
    $mName2 = " --- ";
}
$mEmail= $_POST['mEmail'];
if (null == $mEmail) {
    $mEmail = "--- ";
}
$mPhone=$_POST['mPhone'];
if (null == $mPhone) {
    include("location:matricula.html");
}
$mPhone2=$_POST['mPhone2'];
if (null == $mPhone2) {
    $mPhone2 = "--- ";
}
$AsistentID= $_POST['AsistentID'];
if (null == $AsistentID) {
    include("location:matricula.html"); 
}
$AsistentName= $_POST['AsistentName'];
if (null == $AsistentName) {
    include("location:matricula.html"); 
}
$AsistentLastName= $_POST['AsistentLastName'];
if (null == $AsistentLastName) {
    include("location:matricula.html"); 
}
/* Registro de datos */
/* Conexion */
$servidor ="localhost";
$usuario="root";
$contraseña="";
$BD="matricula2";

$conection = mysqli_connect($servidor, $usuario, $contraseña, $BD);
if(!$conection){
    echo "fallo en la conection";
    die("conection failed: ".mysqli_connect_error());
}
else{
    echo "conexion exitosa";
}$fechaActual = date('y/m/d');;
/* Datos personales estudiante */
 $consulta2= "INSERT INTO info_personal_est (Cedula_est, Nom1, Nom2, Ap1, Ap2, Nacionalidad, Fecha_Nacimiento, Sexo) VALUES ('$studentID','$sName1','$sName2','$sLastName1','$sLastName2','$country_est','$birthday','$sex')";
mysqli_query($conection,$consulta2); 
/* Datos Generales */
/* info_contacto_est */
$consulta3= "INSERT INTO  info_contacto_est (Cedula_est, Corre_mep,Correo,Num_telefono) VALUES ('$studentID','$sEmailMEP','$sEmail','$sPhone')";
mysqli_query($conection,$consulta3); 
/* info_ubicacion */
 $consulta4= "INSERT INTO info_ubicacion (Cedula_est, Canton, Distrito, Ruta) VALUES ('$studentID','$canton','$district','$route')";
mysqli_query($conection,$consulta4); 
/* permisos */
 $consulta5= "INSERT INTO permisos (Cedula_est, Uso_imagen, Salida) VALUES ('$studentID',$iUSAGE,$lINSTITUTION)";
mysqli_query($conection,$consulta5); 
/* becas */
$consulta6= "INSERT INTO becas (Cedula_est, IMAS, Transporte, Comedor) VALUES ('$studentID',$sIMAS,$sTRANSPORTE,$sCOMEDOR)";
mysqli_query($conection,$consulta6); 
/* comentarios_est */
$consulta7= "INSERT INTO comentarios_est (Cedula_est,comentarios_medicos, mentarios_personales) VALUES ('$studentID','$medicalComments','$studentComments')";
mysqli_query($conection,$consulta7); 
/* conect matricula */

$consulta8= "INSERT INTO conect_matricula (Cedula_est,Tipo_matricula, Fecha) VALUES ('$studentID','Plan Nacional','$fechaActual')";
mysqli_query($conection,$consulta8); 
/* info_academica */
$consulta9= "INSERT INTO info_academica (Cedula_est,Grado,Estado,Adecuacion,Año,Poliza) VALUES ('$studentID',$level,'$studentCondition','$adequacy',$yearAcademy,'$sPOLIZA')";
mysqli_query($conection,$consulta9);

/* Datos encargado */
/* Informacion personal */
$consulta10= "INSERT INTO info_personal_encargado (Cedula_est,Cedula_encargado,Nom1,Nom2,Ap1,Ap2,Nacionalidad,Sexo) VALUES ('$studentID','$managerID','$mName1','$mName2','$mLastName1','$mLastName2','$managerCountry','$managerGender')";
mysqli_query($conection,$consulta10);
/* info_contacto_encargado */
$consulta11= "INSERT INTO info_contacto_encargado (Cedula_encargado,Correo,Tel1,Tel2) VALUES ('$managerID','$mEmail','$mPhone','$mPhone2')";
mysqli_query($conection,$consulta11);

/* Datos Asistente */
$consulta12= "INSERT INTO info_asistente (Cedula_est,Cedula_asistente,	Nombre,Apellido) VALUES ('$studentID','$AsistentID','$AsistentName','$AsistentLastName')";
mysqli_query($conection,$consulta12);

header("location:confirmacion_matricula.php");

?>
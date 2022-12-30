<?php 

/* Verificacion de datos */
$Cedula_est=$_POST['Cedula_est'];

$studentID=$_POST['studentID'];
if (null == $studentID) {
    header("location:editar.php"); 
}else {
    $studentID = strtoupper($studentID);
}
$country_est=$_POST['country'];
if (null == $country_est) {
    include("location:editar.php"); 
}
$sex= $_POST['sex'];
if (null == $sex) {
    include("location:editar.php");
}
$birthday=$_POST['birthday'];
if (null == $birthday) {
    include("location:editar.php");
}
$sLastName1= $_POST['sLastName1'];
if (null == $sLastName1) {
    include("location:editar.php");
} else {
    $sLastName1 = strtoupper($sLastName1);
}
$sLastName2=$_POST['sLastName2'];
if (null == $sLastName2) {
    $sLastName2 = " ";
}else {
    $sLastName2 = strtoupper($sLastName2);
}
$sName1= $_POST['sName1'];
if (null == $sName1) {
    include("location:editar.php"); 
}else {
    $sName1 = strtoupper($sName1);
}
$sName2=$_POST['sName2'];
if (null == $sName2) {
    $sName2 = " ";
}else {
    $sName2 = strtoupper($sName2);
}
$medicalComments= $_POST['medicalComments'];
if (null == $medicalComments) {
    $medicalComments = " ";
}
$studentComments=$_POST['studentComments'];
if (null == $studentComments) {
    $studentComments = " ";
}
$sEmailMEP= $_POST['sEmailMEP'];
if (null == $sEmailMEP) {
    $sEmailMEP = " ";
}
$sEmail=$_POST['sEmail'];
if (null == $sEmail) {
    $sEmail = " ";
}
$sPhone= $_POST['sPhone'];
if (null == $sPhone) {
    $sPhone = "";
}
$canton=$_POST['canton'];
if (null == $canton) {
    include("location:editar.php"); 
}
$district= $_POST['district'];
if (null == $district) {
    include("location:editar.php");
}
$route= $_POST['route'];
if (null == $route) {
    $route = " ";
}
$level= $_POST['level'];
if (null == $level) {
    include("location:editar.php");
}

$studentAddress=$_POST['studentAddress'];
if (null == $studentAddress) {
    include("location:editar.php");
}
$studentCondition= $_POST['studentCondition'];
if (null == $studentCondition) {
    $studentCondition = " ";
}
$adequacy=$_POST['adequacy'];
if (null == $adequacy) {
    include("location:editar.php"); 
}
$yearAcademy= $_POST['yearAcademy'];
if (null == $yearAcademy) {
    include("location:editar.php");
}
$sIMAS=$_POST['sIMAS'];
if (null == $sIMAS) {
    $sIMAS = 0;
}
$sPOLIZA= $_POST['sPOLIZA'];
if (null == $sPOLIZA) {
    $sPOLIZA = " ";
}
$sTRANSPORTE=$_POST['sTRANSPORTE'];
if (null == $sTRANSPORTE) {
    $sTRANSPORTE = 0;
}
$sCOMEDOR= $_POST['sCOMEDOR'];
if (null == $sCOMEDOR) {
    $sCOMEDOR = 0;
}
$iUSAGE=$_POST['iUSAGE'];
if (null == $iUSAGE) {
    $iUSAGE = 0;
}
$lINSTITUTION= $_POST['lINSTITUTION'];
if (null == $lINSTITUTION) {
    $lINSTITUTION = 0;
}
$Religion=$_POST['Religion'];
if (null == $Religion) {
    $Religion = 0;
}
$managerID=$_POST['managerID'];
if (null == $managerID) {
    include("location:editar.php");
}else {
    $managerID = strtoupper($managerID);
}
$managerCountry= $_POST['managerCountry'];
if (null == $managerCountry) {
    include("location:editar.php");
}
$managerGender=$_POST['managerGender'];
if (null == $managerGender) {
    include("location:editar.php");
    echo"se vuelve al inicio";
}
$mLastName1= $_POST['mLastName1'];
if (null == $mLastName1) {
    include("location:editar.php"); 
}else {
    $mLastName1 = strtoupper($mLastName1);
}
$mLastName2=$_POST['mLastName2'];
if (null == $mLastName2) {
    $mLastName2 = " ";
}else {
    $mLastName2 = strtoupper($mLastName2);
}
$mName1= $_POST['mName1'];
if (null == $mName1) {
    include("location:editar.php"); 
}else {
    $mName1 = strtoupper($mName1);
}
$mName2=$_POST['mName2'];
if (null == $mName2) {
    $mName2 = " ";
}else {
    $mName2 = strtoupper($mName2);
}
$mEmail= $_POST['mEmail'];
if (null == $mEmail) {
    $mEmail = " ";
}
$mPhone=$_POST['mPhone'];
if (null == $mPhone) {
    include("location:editar.php");
}
$mPhone2=$_POST['mPhone2'];
if (null == $mPhone2) {
    $mPhone2 = " ";
}

/* Registro de datos */
/* Conexion */
$servidor ="localhost";
$usuario="root";
$contraseña="";
$BD="vdhkgimy_matricula";

$conection = mysqli_connect($servidor, $usuario, $contraseña, $BD);
if(!$conection){
    echo "fallo en la conection";
    die("conection failed: ".mysqli_connect_error());
}
else{
/* Datos personales estudiante */
 $consulta2= "UPDATE `info_personal_est` SET `Cedula_est`='$studentID',`Nom1`='$sName1',`Nom2`='$sName2',`Ap1`='$sLastName1',`Ap2`='$sLastName2',`Nacionalidad`='$country_est',`Fecha_Nacimiento`='$birthday',`Sexo`='$sex' WHERE `Cedula_est`='$Cedula_est'";
mysqli_query($conection,$consulta2); 
/* Datos Generales */
/* info_contacto_est */
$consulta3= "UPDATE `info_contacto_est` SET `Corre_mep`='$sEmailMEP',`Correo`='$sEmail',`Num_telefono`='$sPhone'WHERE `Cedula_est`='$Cedula_est'";
mysqli_query($conection,$consulta3); 
/* info_ubicacion */
 $consulta4= "UPDATE `info_ubicacion` SET `Canton`='$canton',`Distrito`='$district',`Direccion_est`='$studentAddress',`Ruta`='$route' WHERE `Cedula_est`='$Cedula_est'";
mysqli_query($conection,$consulta4); 
/* permisos */
 $consulta5= "UPDATE `permisos` SET `Uso_imagen`='$iUSAGE',`Salida`='$lINSTITUTION',`Religion`='$Religion' WHERE `Cedula_est`='$Cedula_est'";
mysqli_query($conection,$consulta5); 
/* becas */
$consulta6= "UPDATE `becas` SET `IMAS`='$sIMAS',`Transporte`='$sTRANSPORTE',`Comedor`='$sCOMEDOR' WHERE `Cedula_est`='$Cedula_est'";
mysqli_query($conection,$consulta6); 
/* comentarios_est */
$consulta7= "UPDATE `comentarios_est` SET `comentarios_medicos`='$medicalComments',`comentarios_personales`='$studentComments' WHERE `Cedula_est`='$Cedula_est'";
mysqli_query($conection,$consulta7); 
/* conect matricula */
/* $consulta8= "UPDATE `conect_matricula` SET `Cedula_est`='$studentID' WHERE `Cedula_est`='$studentID'";//Dar la posibilidad de cambiar de diurno a nocturno
mysqli_query($conection,$consulta8); */
/* info_academica */
$consulta9= "UPDATE `info_academica` SET `Grado`='$level',`Estado`='$studentCondition',`Adecuacion`='$adequacy',`Año`='$yearAcademy',`Poliza`='$sPOLIZA' WHERE `Cedula_est`='$Cedula_est'";
mysqli_query($conection,$consulta9);

/* Datos encargado */
/* Informacion personal */
$consulta10= "UPDATE `info_personal_encargado` SET `Cedula_encargado`='$managerID',`Nom1`='$mName1',`Nom2`='$mName2',`Ap1`='$mLastName1',`Ap2`='$mLastName2',`Nacionalidad`='$managerCountry',`Sexo`='$managerGender' WHERE `Cedula_est`='$Cedula_est'";
mysqli_query($conection,$consulta10);
/* info_contacto_encargado */
$consulta11= "UPDATE `info_contacto_encargado` SET `Correo`='$mEmail',`Tel1`='$mPhone',`Tel2`='$mPhone2' WHERE `Cedula_est`='$Cedula_est'";
mysqli_query($conection,$consulta11);

/* Datos Asistente */
/* $consulta12= "UPDATE `info_asistente` SET `Cedula_est`='$studentID' WHERE `Cedula_est`='$studentID'";
mysqli_query($conection,$consulta12); */

$technical= $_POST['technical'];
if (null == $technical) {
    $technical = "--- ";
} else {
    $consulta13= "UPDATE `especialidades` SET `Especialidad`='$technical' WHERE `Cedula_est`='$Cedula_est'";
    mysqli_query($conection,$consulta13);
}}

?>
<form action="update_confirmation.php" method="POST" id="form">
<input type="text" name="caja_valor" id="caja_valor" value="<?php echo $studentID ?>">
<input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
<button id="click" class="click" type="submit" ></button>
</form>
<style>
#form{
  opacity: 0;
}
  </style>
<script>
    click.click();
</script> 
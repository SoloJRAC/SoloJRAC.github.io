<?php   
$password = $_POST["password"];

if ($password == null) {
    ?><script>
        window.location.href = "index.html"
    </script>
    
    <?php
 } 
if ($password == null) {
    header("location:index.html");
 }
/* Verificacion de datos */
$studentID=$_POST['studentID'];
if (null == $studentID) {
    header("location:matricula.php"); 
}else {
    $studentID = strtoupper($studentID);
}
$country_est=$_POST['country'];
if (null == $country_est) {
    include("location:matricula.php"); 
}
$sex= $_POST['sex'];
if (null == $sex) {
    include("location:matricula.php");
}
$birthday=$_POST['birthday'];
if (null == $birthday) {
    include("location:matricula.php");
}
$sLastName1= $_POST['sLastName1'];
if (null == $sLastName1) {
    include("location:matricula.php");
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
    include("location:matricula.php"); 
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
    include("location:matricula.php"); 
}
$district= $_POST['district'];
if (null == $district) {
    include("location:matricula.php");
}
$route= $_POST['route'];
if (null == $route) {
    $route = " ";
}
$level= $_POST['level'];
if (null == $level) {
    include("location:matricula.php");
}

$studentAddress=$_POST['studentAddress'];
if (null == $studentAddress) {
    include("location:matricula.php");
}
$studentCondition= $_POST['studentCondition'];
if (null == $studentCondition) {
    $studentCondition = " ";
}
$adequacy=$_POST['adequacy'];
if (null == $adequacy) {
    include("location:matricula.php"); 
}
$yearAcademy= $_POST['yearAcademy'];
if (null == $yearAcademy) {
    include("location:matricula.php");
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
    $sCOMEDOR =0;
}
$iUSAGE=$_POST['iUSAGE'];
if (null == $iUSAGE) {
    $iUSAGE = 0;
}
$managerID=$_POST['managerID'];
if (null == $managerID) {
    include("location:matricula.php");
}else {
    $managerID = strtoupper($managerID);
}
$managerCountry= $_POST['managerCountry'];
if (null == $managerCountry) {
    include("location:matricula.php");
}
$managerGender=$_POST['managerGender'];
if (null == $managerGender) {
    include("location:matricula.php");
    echo"se vuelve al inicio";
}
$mLastName1= $_POST['mLastName1'];
if (null == $mLastName1) {
    include("location:matricula.php"); 
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
    include("location:matricula.php"); 
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
    include("location:matricula.php");
}
$mPhone2=$_POST['mPhone2'];
if (null == $mPhone2) {
    $mPhone2 = " ";
}
$AsistentName= $_POST['AsistentName'];
if (null == $AsistentName) {
    include("location:matricula.php"); 
}else {
    $AsistentName = strtoupper($AsistentName);
}
$AsistentLastName= $_POST['AsistentLastName'];
if (null == $AsistentLastName) {
    include("location:matricula.php"); 
}else {
    $AsistentLastName = strtoupper($AsistentLastName);
}
/* Registro de datos */
/* Conexion */
$servidor ="localhost";
$usuario="vdhkgimy_admin";
$contraseña="Aarce0908";
$BD="vdhkgimy_Matricula";

$conection = mysqli_connect($servidor, $usuario, $contraseña, $BD);
if(!$conection){
    echo "fallo en la conection";
    die("conection failed: ".mysqli_connect_error());
}
else{$fechaActual = date('y/m/d');;
/* Datos personales estudiante */
 $consulta2= 
 "INSERT INTO info_personal_est (Cedula_est, Nom1, Nom2, Ap1, Ap2, Nacionalidad, Fecha_Nacimiento, Sexo) VALUES ('$studentID','$sName1','$sName2','$sLastName1','$sLastName2','$country_est','$birthday','$sex')";
mysqli_query($conection,$consulta2); 
/* Datos Generales */
/* info_contacto_est */
$consulta3= "INSERT INTO  info_contacto_est (Cedula_est, Corre_mep,Correo,Num_telefono) VALUES ('$studentID','$sEmailMEP','$sEmail','$sPhone')";
mysqli_query($conection,$consulta3); 
/* info_ubicacion */
 $consulta4= "INSERT INTO info_ubicacion (Cedula_est, Canton, Distrito, Ruta) VALUES ('$studentID','$canton','$district','$route')";
mysqli_query($conection,$consulta4); 
/* permisos */
 $consulta5= "INSERT INTO permisos (Cedula_est, Uso_imagen, Salida,Religion) VALUES ('$studentID',$iUSAGE,0,0)";
mysqli_query($conection,$consulta5); 
/* becas */
$consulta6= "INSERT INTO becas (Cedula_est, IMAS, Transporte, Comedor) VALUES ('$studentID',$sIMAS,$sTRANSPORTE,$sCOMEDOR)";
mysqli_query($conection,$consulta6); 
/* comentarios_est */
$consulta7= "INSERT INTO comentarios_est (Cedula_est,comentarios_medicos, comentarios_personales) VALUES ('$studentID','$medicalComments','$studentComments')";
mysqli_query($conection,$consulta7); 
/* conect matricula */

$consulta8= "INSERT INTO conect_matricula (Cedula_est,Tipo_matricula, Fecha) VALUES ('$studentID','Nocturno','$fechaActual')";
mysqli_query($conection,$consulta8); 
/* info_academica */
$consulta9= "INSERT INTO info_academica (Cedula_est,Grado,Estado,Adecuacion,Año,Poliza) VALUES ('$studentID',$level,'$studentCondition','$adequacy',$yearAcademy,'$sPOLIZA')";
mysqli_query($conection,$consulta9);

/* Datos encargado */
/* Informacion personal */
$consulta10= "INSERT INTO info_personal_encargado (Cedula_est,Cedula_encargado,Nom1,Nom2,Ap1,Ap2,Nacionalidad,Sexo) VALUES ('$studentID','$managerID','$mName1','$mName2','$mLastName1','$mLastName2','$managerCountry','$managerGender')";
mysqli_query($conection,$consulta10);
/* info_contacto_encargado */
$consulta11= "INSERT INTO info_contacto_encargado (Cedula_est, Cedula_encargado,Correo,Tel1,Tel2) VALUES ('$studentID','$managerID','$mEmail','$mPhone','$mPhone2')";
mysqli_query($conection,$consulta11);

/* Datos Asistente */
$consulta12= "INSERT INTO info_asistente (Cedula_est,Nombre,Apellido) VALUES ('$studentID','$AsistentName','$AsistentLastName')";
mysqli_query($conection,$consulta12);

$technical= $_POST['technical'];
if (null == $technical) {
    $technical = "--- ";
} else {
    $consulta13= "INSERT INTO especialidades (Cedula_est,Especialidad) VALUES ('$studentID','$technical')";
    mysqli_query($conection,$consulta13);
}}
?>
<form action="confirmacion_matricula_nocturno.php" method="POST" id="form">
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
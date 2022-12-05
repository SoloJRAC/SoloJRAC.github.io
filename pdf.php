<?php
/* Recibimiento cedula */
$cedula = $_POST["caja_valor"];
/* Conexion */
$servidor ="localhost";
$usuario="root";
$contraseña="";
$BD="matricula2";

$conection = mysqli_connect($servidor, $usuario, $contraseña, $BD);
/*  Extraccionde datos*/
/* Info personal */
$nom1 =mysqli_query($conection,"SELECT `Nom1` FROM `info_personal_est` WHERE `Cedula_est`=".$cedula);
$nom1 = mysqli_fetch_column($nom1);
$nom2 =mysqli_query($conection,"SELECT  `Nom2` FROM `info_personal_est` WHERE `Cedula_est`=".$cedula);
$nom2 = mysqli_fetch_column($nom2);
$nom_complete = $nom1 . " " .$nom2;
$ap1 =mysqli_query($conection,"SELECT  `Ap1` FROM `info_personal_est` WHERE `Cedula_est`=".$cedula);
$ap1 = mysqli_fetch_column($ap1);
$ap2 =mysqli_query($conection,"SELECT `Ap2` FROM `info_personal_est` WHERE `Cedula_est`=".$cedula);
$ap2 = mysqli_fetch_column($ap2);
$birthday =mysqli_query($conection,"SELECT `Fecha_Nacimiento` FROM `info_personal_est` WHERE `Cedula_est`=".$cedula);
$birthday = mysqli_fetch_column($birthday);
$gender =mysqli_query($conection,"SELECT `Sexo` FROM `info_personal_est` WHERE `Cedula_est`=".$cedula);
$gender = mysqli_fetch_column($gender);
/*info general  */
$grade =mysqli_query($conection,"SELECT `Grado` FROM `info_academica` WHERE `Cedula_est`=".$cedula);
$grade = mysqli_fetch_column($grade);
$adecuacion =mysqli_query($conection,"SELECT `Adecuacion` FROM `info_academica` WHERE `Cedula_est`=".$cedula);
$adecuacion = mysqli_fetch_column($adecuacion);
$poliza =mysqli_query($conection,"SELECT  `Poliza` FROM `info_academica` WHERE `Cedula_est`=".$cedula);
$poliza = mysqli_fetch_column($poliza);
/* Comentarios */
$medic_coments =mysqli_query($conection,"SELECT`mentarios_personales` FROM `comentarios_est` WHERE `Cedula_est`=".$cedula);
$medic_coments = mysqli_fetch_column($medic_coments);
$coments =mysqli_query($conection,"SELECT`mentarios_personales` FROM `comentarios_est` WHERE `Cedula_est`=".$cedula);
$coments = mysqli_fetch_column($coments);
/* Ubicacion */
$Canton =mysqli_query($conection,"SELECT `Canton` FROM `info_ubicacion` WHERE `Cedula_est`=".$cedula);
$Canton = mysqli_fetch_column($Canton);
$Distrito =mysqli_query($conection,"SELECT `Distrito` FROM `info_ubicacion` WHERE `Cedula_est`=".$cedula);
$Distrito = mysqli_fetch_column($Distrito);
$Ruta =mysqli_query($conection,"SELECT `Ruta` FROM `info_ubicacion` WHERE `Cedula_est`=".$cedula);
$Ruta = mysqli_fetch_column($Ruta);
/* Contacto */
$telefono_est =mysqli_query($conection,"SELECT `Num_telefono` FROM `info_contacto_est` WHERE `Cedula_est`=".$cedula);
$telefono_est = mysqli_fetch_column($telefono_est);
require('fpdf/fpdf.php');
/* Becas  */
$IMAS =mysqli_query($conection,"SELECT `IMAS` FROM `becas` WHERE `Cedula_est`=".$cedula);
$IMAS = mysqli_fetch_column($IMAS);
if($IMAS==1){
    $IMAS = "SI";
} else {
    $IMAS = "NO";
}
$Transporte =mysqli_query($conection,"SELECT `Transporte` FROM `becas` WHERE `Cedula_est`=".$cedula);
$Transporte = mysqli_fetch_column($Transporte);
if($Transporte==1){
    $Transporte = "SI";
} else {
    $Transporte = "NO";
}
$Comedor =mysqli_query($conection,"SELECT `Comedor` FROM `becas` WHERE `Cedula_est`=".$cedula);
$Comedor = mysqli_fetch_column($Comedor);
if($Comedor==1){
    $Comedor = "SI";
} else {
    $Comedor = "NO";
}
/* Permisos */
$Uso_imagen =mysqli_query($conection,"SELECT `Uso_imagen` FROM `permisos` WHERE `Cedula_est`=".$cedula);
$Uso_imagen = mysqli_fetch_column($Uso_imagen);
if($Uso_imagen==1){
    $Uso_imagen = "SI";
} else {
    $Uso_imagen = "NO";
}
$Salida =mysqli_query($conection,"SELECT `Salida` FROM `permisos` WHERE `Cedula_est`=".$cedula);
$Salida = mysqli_fetch_column($Salida);
if($Salida==1){
    $Salida = "SI";
} else {
    $Salida = "NO";
}
/* Datos Asistente */
$Cedula_asistente =mysqli_query($conection,"SELECT  `Cedula_asistente` FROM `info_asistente` WHERE `Cedula_est`=".$cedula);
$Cedula_asistente = mysqli_fetch_column($Cedula_asistente);
$Nombre_asistente =mysqli_query($conection,"SELECT `Nombre` FROM `info_asistente` WHERE `Cedula_est`=".$cedula);
$Nombre_asistente = mysqli_fetch_column($Nombre_asistente);
$Apellido =mysqli_query($conection,"SELECT`Apellido` FROM `info_asistente` WHERE `Cedula_est`=".$cedula);
$Apellido = mysqli_fetch_column($Apellido);
/* Datos matricula */
$Fecha =mysqli_query($conection,"SELECT `Fecha` FROM `conect_matricula` WHERE `Cedula_est`=".$cedula);
$Fecha = mysqli_fetch_column($Fecha);
/* Datos personales encargado */
$Cedula_encargado =mysqli_query($conection,"SELECT  `Cedula_encargado` FROM `info_personal_encargado` WHERE `Cedula_est`=".$cedula);
$Cedula_encargado = mysqli_fetch_column($Cedula_encargado);
$Nom1_encargado =mysqli_query($conection,"SELECT  `Nom1` FROM `info_personal_encargado` WHERE `Cedula_est`=".$cedula);
$Nom1_encargado = mysqli_fetch_column($Nom1_encargado);
$Nom2_encargado =mysqli_query($conection,"SELECT  `Nom2` FROM `info_personal_encargado` WHERE `Cedula_est`=".$cedula);
$Nom2_encargado = mysqli_fetch_column($Nom2_encargado);
$Nom_encargado=$Nom1_encargado . " " .$Nom2_encargado;
$Ap1_encargado =mysqli_query($conection,"SELECT   `Ap1` FROM `info_personal_encargado` WHERE `Cedula_est`=".$cedula);
$Ap1_encargado = mysqli_fetch_column($Ap1_encargado);
$Ap2_encargado =mysqli_query($conection,"SELECT  `Ap2` FROM `info_personal_encargado` WHERE `Cedula_est`=".$cedula);
$Ap2_encargado = mysqli_fetch_column($Ap2_encargado);
/* Datos contacto encargado */
$Tel1 =mysqli_query($conection,"SELECT  `Tel1`FROM `info_contacto_encargado` WHERE `Cedula_encargado`=".$Cedula_encargado);
$Tel1 = mysqli_fetch_column($Tel1);
$Tel2 =mysqli_query($conection,"SELECT `Tel2` FROM `info_contacto_encargado` WHERE `Cedula_encargado`=".$Cedula_encargado);
$Tel2 = mysqli_fetch_column($Tel2);

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('resources/logomep.png',10,11,30);
    $this->Image('resources/ctpplogo.png',180,7,25);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,utf8_decode("República de Costa Rica"),0,1,'C');
    $this->Cell(190,1.5,utf8_decode("Ministerio de Educación Pública"),0,1,'C');
    $this->Cell(190,9,utf8_decode("Colegio Técnico Profesional Parrita"),0,0,'C');
    // Salto de línea
    $this->Ln(12);
    $this->SetFont('Arial','B',10);
    $this->Cell(200,10,utf8_decode("Correo: ctp.deparrita@mep.go.cr / Teléfono: +506 2779-4036 / Código: 4230"),0,1,'C');
    $this->SetTextColor(51, 128, 255 );
    $this->Cell(0,-9,utf8_decode("____________________________________________________________________________________________________"),0,1,'C');
    $this->Ln(9);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8 
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',11);
$pdf->SetFillColor(51, 128, 255 );
$pdf->SetTextColor(255, 255, 255 );
 $pdf->Cell(0,6,utf8_decode('MATRICULA '),1,1,'C',1);
 $pdf->Cell(0,6,utf8_decode('INFORMACION DEL ESTUDIANTE '),1,1,'C',1);
$pdf->SetTextColor(0, 0, 0 );
$pdf->SetFont('Arial','B',10);
 $pdf->Cell(62,6,utf8_decode('PRIMER APELLIDO'),1,0,'C',0);
 $pdf->Cell(62,6,utf8_decode('SEGUNDO APELLIDO'),1,0,'C',0);
 $pdf->Cell(66,6,utf8_decode('NOMBRE COMPLETO'),1,1,'C',0);
 $pdf->SetFont('Arial','',9);
 $pdf->Cell(62,6,utf8_decode($ap1),1,0,'C',0);
 $pdf->Cell(62,6,utf8_decode($ap2),1,0,'C',0);
 $pdf->Cell(66,6,utf8_decode($nom_complete),1,1,'C',0);
 $pdf->SetFont('Arial','B',10);
 $pdf->Cell(62,6,utf8_decode('IDENTIFICACION'),1,0,'C',0);
 $pdf->Cell(62,6,utf8_decode('FECHA DE NACIMIENTO'),1,0,'C',0);
 $pdf->Cell(66,6,utf8_decode('SEXO'),1,1,'C',0);
 $pdf->SetFont('Arial','',9);
 $pdf->Cell(62,6,utf8_decode($cedula),1,0,'C',0);
 $pdf->Cell(62,6,utf8_decode($birthday),1,0,'C',0);
 $pdf->Cell(66,6,utf8_decode($gender),1,1,'C',0);
 $pdf->SetFont('Arial','B',10);
 $pdf->Cell(62,6,utf8_decode('ADECUACION'),1,0,'C',0);
 $pdf->Cell(128,6,utf8_decode('INFORMACION MEDICA'),1,1,'C',0);
 $pdf->SetFont('Arial','',9);
 $pdf->Cell(62,6,utf8_decode(''.$adecuacion),1,0,'C',0);
 $pdf->Cell(128,6,utf8_decode($medic_coments),1,1,'C',0);
 $pdf->SetFont('Arial','B',10);
 $pdf->Cell(62,6,utf8_decode('CANTÓN'),1,0,'C',0);
 $pdf->Cell(62,6,utf8_decode('DISTRITO'),1,0,'C',0);
 $pdf->Cell(66,6,utf8_decode('NO. TELEFONO'),1,1,'C',0);
 $pdf->SetFont('Arial','',9);
 $pdf->Cell(62,6,utf8_decode($Canton),1,0,'C',0);
 $pdf->Cell(62,6,utf8_decode($Distrito),1,0,'C',0);
 $pdf->Cell(66,6,utf8_decode($telefono_est),1,1,'C',0);
 $pdf->SetFont('Arial','B',10);
 $pdf->Cell(62,6,utf8_decode('POLIZA DE SEGURO'),1,0,'C',0);
 $pdf->Cell(62,6,utf8_decode('IMAS'),1,0,'C',0);
 $pdf->Cell(66,6,utf8_decode('COMEDOR'),1,1,'C',0);
 $pdf->SetFont('Arial','',9);
 $pdf->Cell(62,6,utf8_decode($poliza),1,0,'C',0);
 $pdf->Cell(62,6,utf8_decode($IMAS),1,0,'C',0);
 $pdf->Cell(66,6,utf8_decode($Comedor),1,1,'C',0);
 $pdf->SetFont('Arial','B',10);
 $pdf->Cell(62,6,utf8_decode('USO DE IMAGEN'),1,0,'C',0);
 $pdf->Cell(62,6,utf8_decode('PERMISO DE SALIDA'),1,0,'C',0);
 $pdf->Cell(66,6,utf8_decode('PERMISO DE TRANSPORTE'),1,1,'C',0);
 $pdf->SetFont('Arial','',9);
 $pdf->Cell(62,6,utf8_decode($Uso_imagen),1,0,'C',0);
 $pdf->Cell(62,6,utf8_decode($Salida),1,0,'C',0);
 $pdf->Cell(66,6,utf8_decode($Transporte),1,1,'C',0);
 $pdf->SetFont('Arial','B',10);
 $pdf->Cell(62,6,utf8_decode('RUTA DE TRANSPORTE'),1,0,'C',0);
 $pdf->Cell(128,6,utf8_decode('COMENTARIOS'),1,1,'C',0);
 $pdf->SetFont('Arial','',9);
 $pdf->Cell(62,6,utf8_decode($Ruta),1,0,'C',0);
 $pdf->Cell(128,6,utf8_decode($coments),1,1,'C',0);
 $pdf->SetFont('Arial','B',10);
 $pdf->Cell(62,6,utf8_decode('AÑO'),1,0,'C',0);
 $pdf->Cell(62,6,utf8_decode('SECCION'),1,0,'C',0);
 $pdf->Cell(66,6,utf8_decode('FECHA DE MATRICULA'),1,1,'C',0);
 $pdf->SetFont('Arial','',9);
 $pdf->Cell(62,6,utf8_decode($grade),1,0,'C',0);
 $pdf->Cell(62,6,utf8_decode(''),1,0,'C',0);
 $pdf->Cell(66,6,utf8_decode($Fecha),1,1,'C',0);
 $pdf->SetFont('Arial','',11);
$pdf->SetFillColor(51, 128, 255 );
$pdf->SetTextColor(255, 255, 255 );
$pdf->Cell(0,6,utf8_decode('MATERIAS '),1,1,'C',1);
$pdf->SetTextColor(0, 0, 0 );
 $pdf->SetFont('Arial','',9);
 $pdf->Cell(95,6,utf8_decode('---------'),1,0,'B',0);
 $pdf->Cell(95,6,utf8_decode('---------'),1,1,'B',0);
 $pdf->Cell(95,6,utf8_decode('---------'),1,0,'B',0);
 $pdf->Cell(95,6,utf8_decode('---------'),1,1,'B',0);
 $pdf->Cell(95,6,utf8_decode('---------'),1,0,'B',0);
 $pdf->Cell(95,6,utf8_decode('---------'),1,1,'B',0);
 $pdf->Cell(95,6,utf8_decode('---------'),1,0,'B',0);
 $pdf->Cell(95,6,utf8_decode('---------'),1,1,'B',0);
 $pdf->Cell(95,6,utf8_decode('---------'),1,0,'B',0);
 $pdf->Cell(95,6,utf8_decode('---------'),1,1,'B',0);
 $pdf->Cell(95,6,utf8_decode('---------'),1,0,'B',0);
 $pdf->Cell(95,6,utf8_decode('---------'),1,1,'B',0);
 $pdf->Cell(95,6,utf8_decode('---------'),1,0,'B',0);
 $pdf->Cell(95,6,utf8_decode('---------'),1,1,'B',0);
 $pdf->Cell(95,6,utf8_decode('---------'),1,0,'B',0);
 $pdf->Cell(95,6,utf8_decode('---------'),1,1,'B',0);
 $pdf->Cell(95,6,utf8_decode('---------'),1,0,'B',0);
 $pdf->Cell(95,6,utf8_decode('---------'),1,1,'B',0);
 $pdf->Cell(95,6,utf8_decode('---------'),1,0,'B',0);
 $pdf->Cell(95,6,utf8_decode('---------'),1,1,'B',0);
 $pdf->SetFont('Arial','',11);
$pdf->SetFillColor(51, 128, 255 );
$pdf->SetTextColor(255, 255, 255 );
$pdf->Cell(0,6,utf8_decode('INFORMACION DE PADRE, MADRE O ENCARGADO '),1,1,'C',1);
$pdf->SetTextColor(0, 0, 0);
 $pdf->SetFont('Arial','B',10);
 $pdf->Cell(62,6,utf8_decode('PRIMER APELLIDO'),1,0,'C',0);
 $pdf->Cell(62,6,utf8_decode('SEGUNDO APELLIDO'),1,0,'C',0);
 $pdf->Cell(66,6,utf8_decode('NOMBRE COMPLETO'),1,1,'C',0);
 $pdf->SetFont('Arial','',9);
 $pdf->Cell(62,6,utf8_decode($Ap1_encargado),1,0,'C',0);
 $pdf->Cell(62,6,utf8_decode($Ap2_encargado),1,0,'C',0);
 $pdf->Cell(66,6,utf8_decode($Nom_encargado),1,1,'C',0);
 $pdf->SetFont('Arial','B',10);
 $pdf->Cell(62,6,utf8_decode('CEDULA'),1,0,'C',0);
 $pdf->Cell(62,6,utf8_decode('NO. TELEFONO 1'),1,0,'C',0);
 $pdf->Cell(66,6,utf8_decode('NO. TELEFONO 2'),1,1,'C',0);
 $pdf->SetFont('Arial','',9);
 $pdf->Cell(62,6,utf8_decode($Cedula_encargado),1,0,'C',0);
 $pdf->Cell(62,6,utf8_decode($Tel1),1,0,'C',0);
 $pdf->Cell(66,6,utf8_decode($Tel2),1,1,'C',0);
 $pdf->SetFont('Arial','B',10);
 $pdf->Ln(3);
 $pdf->Cell(62,6,utf8_decode('MATRICULA REALIZADA POR'),0,0,'B',0);
 $pdf->Cell(62,6,utf8_decode('FIRMA DEL PADRE, MADRE'),0,0,'B',0);
 $pdf->Cell(66,6,utf8_decode('FIRMA DE ESTUDIANTE'),0,1,'B',0);
$pdf->SetXY(72,255);
 $pdf->Cell(66,6,utf8_decode('O ENCARGADO'),0,1,'B',0);
 $pdf->SetFont('Arial','',9);
 $pdf->Ln(5);
 $pdf->Cell(62,-8,utf8_decode("  ".$Nombre_asistente." ".$Apellido),0,0,'B',0);/* . */
 $pdf->Cell(62,6,utf8_decode('_______________________________'),0,0,'B',0);
 $pdf->Cell(66,6,utf8_decode('_______________________________'),0,1,'B',0);
 $pdf->Cell(66,-12,utf8_decode("  Cedula NO. ".$Cedula_asistente),0,1,'B',0);
$pdf->Output();
?>
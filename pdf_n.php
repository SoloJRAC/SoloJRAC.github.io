<?php  
$password = $_POST["password"];

if ($password == null) {
    ?><script>
        window.location.href = "index.html"
    </script>
    
    <?php
 } 
/* Recibimiento cedula */
$cedula = $_POST["caja_valor"];
/* Conexion */
$servidor ="localhost";
$usuario="root";
$contraseña="";
$BD="vdhkgimy_matricula";

$conection = mysqli_connect($servidor, $usuario, $contraseña, $BD);
/*  Extraccionde datos*/
/* Info personal */
$nom1 =mysqli_query($conection,"SELECT Nom1 FROM info_personal_est WHERE Cedula_est='".$cedula."'");
$nom1 = mysqli_fetch_column($nom1);
$nom2 =mysqli_query($conection,"SELECT  Nom2 FROM info_personal_est WHERE Cedula_est='".$cedula."'");
$nom2 = mysqli_fetch_column($nom2);
$nom_complete = $nom1 . " " .$nom2;
$ap1 =mysqli_query($conection,"SELECT  Ap1 FROM info_personal_est WHERE Cedula_est='".$cedula."'");
$ap1 = mysqli_fetch_column($ap1);
$ap2 =mysqli_query($conection,"SELECT Ap2 FROM info_personal_est WHERE Cedula_est='".$cedula."'");
$ap2 = mysqli_fetch_column($ap2);
$birthday =mysqli_query($conection,"SELECT Fecha_Nacimiento FROM info_personal_est WHERE Cedula_est='".$cedula."'");
$birthday = mysqli_fetch_column($birthday);
$gender =mysqli_query($conection,"SELECT Sexo FROM info_personal_est WHERE Cedula_est='".$cedula."'");
$gender = mysqli_fetch_column($gender);
/*info general  */
$grade =mysqli_query($conection,"SELECT Grado FROM info_academica WHERE Cedula_est='".$cedula."'");
$grade = mysqli_fetch_column($grade);
$adecuacion =mysqli_query($conection,"SELECT Adecuacion FROM info_academica WHERE Cedula_est='".$cedula."'");
$adecuacion = mysqli_fetch_column($adecuacion);
$poliza =mysqli_query($conection,"SELECT  Poliza FROM info_academica WHERE Cedula_est='".$cedula."'");
$poliza = mysqli_fetch_column($poliza);
/* Comentarios */
$medic_coments =mysqli_query($conection,"SELECT comentarios_medicos FROM comentarios_est WHERE Cedula_est='".$cedula."'");
$medic_coments = mysqli_fetch_column($medic_coments);
$coments =mysqli_query($conection,"SELECT comentarios_personales FROM comentarios_est WHERE Cedula_est='".$cedula."'");
$coments = mysqli_fetch_column($coments);
/* Ubicacion */
$Canton =mysqli_query($conection,"SELECT Canton FROM info_ubicacion WHERE Cedula_est='".$cedula."'");
$Canton = mysqli_fetch_column($Canton);
$Distrito =mysqli_query($conection,"SELECT Distrito FROM info_ubicacion WHERE Cedula_est='".$cedula."'");
$Distrito = mysqli_fetch_column($Distrito);
$Ruta =mysqli_query($conection,"SELECT Ruta FROM info_ubicacion WHERE Cedula_est='".$cedula."'");
$Ruta = mysqli_fetch_column($Ruta);
/* Contacto */
$telefono_est =mysqli_query($conection,"SELECT Num_telefono FROM info_contacto_est WHERE Cedula_est='".$cedula."'");
$telefono_est = mysqli_fetch_column($telefono_est);

/* Becas  */
$IMAS =mysqli_query($conection,"SELECT IMAS FROM becas WHERE Cedula_est='".$cedula."'");
$IMAS = mysqli_fetch_column($IMAS);
if($IMAS==1){
    $IMAS = "SI";
} else {
    $IMAS = "NO";
}
$Transporte =mysqli_query($conection,"SELECT Transporte FROM becas WHERE Cedula_est='".$cedula."'");
$Transporte = mysqli_fetch_column($Transporte);
if($Transporte==1){
    $Transporte = "SI";
} else {
    $Transporte = "NO";
}
$Comedor =mysqli_query($conection,"SELECT Comedor FROM becas WHERE Cedula_est='".$cedula."'");
$Comedor = mysqli_fetch_column($Comedor);
if($Comedor==1){
    $Comedor = "SI";
} else {
    $Comedor = "NO";
}
/* Permisos */
$Uso_imagen =mysqli_query($conection,"SELECT Uso_imagen FROM permisos WHERE Cedula_est='".$cedula."'");
$Uso_imagen = mysqli_fetch_column($Uso_imagen);
if($Uso_imagen==1){
    $Uso_imagen = "SI";
} else {
    $Uso_imagen = "NO";
}

/* Datos Asistente */
$Nombre_asistente =mysqli_query($conection,"SELECT Nombre FROM info_asistente WHERE Cedula_est='".$cedula."'");
$Nombre_asistente = mysqli_fetch_column($Nombre_asistente);
$Apellido =mysqli_query($conection,"SELECT Apellido FROM info_asistente WHERE Cedula_est='".$cedula."'");
$Apellido = mysqli_fetch_column($Apellido);
/* Datos matricula */
$Fecha =mysqli_query($conection,"SELECT Fecha FROM conect_matricula WHERE Cedula_est='".$cedula."'");
$Fecha = mysqli_fetch_column($Fecha);
$tipo_matricula =mysqli_query($conection,"SELECT Tipo_matricula FROM conect_matricula WHERE Cedula_est='".$cedula."'");
$tipo_matricula = mysqli_fetch_column($tipo_matricula);
/* Datos personales encargado */
$Cedula_encargado =mysqli_query($conection,"SELECT  Cedula_encargado FROM info_personal_encargado WHERE Cedula_est='".$cedula."'");
$Cedula_encargado = mysqli_fetch_column($Cedula_encargado);
$Nom1_encargado =mysqli_query($conection,"SELECT  Nom1 FROM info_personal_encargado WHERE Cedula_est='".$cedula."'");
$Nom1_encargado = mysqli_fetch_column($Nom1_encargado);
$Nom2_encargado =mysqli_query($conection,"SELECT  Nom2 FROM info_personal_encargado WHERE Cedula_est='".$cedula."'");
$Nom2_encargado = mysqli_fetch_column($Nom2_encargado);
$Nom_encargado=$Nom1_encargado . " " .$Nom2_encargado;
$Ap1_encargado =mysqli_query($conection,"SELECT   Ap1 FROM info_personal_encargado WHERE Cedula_est='".$cedula."'");
$Ap1_encargado = mysqli_fetch_column($Ap1_encargado);
$Ap2_encargado =mysqli_query($conection,"SELECT  Ap2 FROM info_personal_encargado WHERE Cedula_est='".$cedula."'");
$Ap2_encargado = mysqli_fetch_column($Ap2_encargado);
/* Datos contacto encargado */
$Tel1 =mysqli_query($conection,"SELECT  Tel1 FROM info_contacto_encargado WHERE Cedula_encargado='".$Cedula_encargado."'");
$Tel1 = mysqli_fetch_column($Tel1);
$Tel2 =mysqli_query($conection,"SELECT Tel2 FROM info_contacto_encargado WHERE Cedula_encargado='".$Cedula_encargado."'");
$Tel2 = mysqli_fetch_column($Tel2);

$especialidad=mysqli_query($conection,"SELECT  Especialidad FROM especialidades WHERE Cedula_est='".$cedula."'");
$especialidad = mysqli_fetch_column($especialidad);

require('fpdf/fpdf.php');
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
    $this->SetFont('Arial','I',8);
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
 $pdf->Cell(62,6,utf8_decode('RUTA DE TRANSPORTE'),1,0,'C',0);
 $pdf->Cell(66,6,utf8_decode('BECA DE TRANSPORTE'),1,1,'C',0);
 $pdf->SetFont('Arial','',9);
 $pdf->Cell(62,6,utf8_decode($Uso_imagen),1,0,'C',0);
 $pdf->Cell(62,6,utf8_decode($Ruta),1,0,'C',0);
 $pdf->Cell(66,6,utf8_decode($Transporte),1,1,'C',0);
 $pdf->SetFont('Arial','B',10);
 $pdf->Cell(62,6,utf8_decode('ESPECIALIDAD'),1,0,'C',0);
 $pdf->Cell(128,6,utf8_decode('COMENTARIOS'),1,1,'C',0);
 $pdf->SetFont('Arial','',9);
 $pdf->Cell(62,6,utf8_decode($especialidad),1,0,'C',0);
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
 $mat1="--------------";
$mat2="--------------";
$mat3="--------------";
$mat4="--------------";
$mat5="--------------";
$mat6="--------------";
$mat7="--------------";
$mat8="--------------";
$mat9="--------------";
$mat10="--------------";
$mat11="--------------";
$mat12="--------------";
$mat13="--------------";
$mat14="--------------";
$mat15="--------------";
$mat16="--------------";
$mat17="--------------";
$mat18="--------------";
$mat19="--------------";
$mat20="--------------";
 if($tipo_matricula=="Nocturno"){
    switch($grade){
        
        case "10":
            switch($especialidad){

                case "Informatica Empresarial":
                    $mat1 = "Tecnologias de Informacion y Comunicación";
                    $mat2 = "Programación";
                    $mat3 = "Mantenimiento de Equipo de Computo";
                    $mat4 = "Entorno Administrativo Informatico";
                    $mat5 = "English for Communication";
                break;
                case "Contabilidad":
                    $mat1 = "Gestión contable";
                    $mat2 = "Gestión en tecnologías digitales contables";
                    $mat3 = "English Oriented to Accounting";
                break;
                case "Ejecutivo Comercial y Servicio al Cliente":
                    $mat1 = "Gestión comercial y comunicación para el servicio al cliente";
                    $mat2 = "Destrezas digitales para gestionar la informacion y el comercio electronico";
                    $mat3 = "English Oriented to Business and Customer Service Executive";
                break;
                case "Reparación de los Sistemas de Vehiculos Livianos":
                    $mat1 = "Operaciones en equipo de banco";
                    $mat2 = "Operaciones de estructura vehicular";
                    $mat3 = "Autotrónica";
                    $mat4 = "Tecnologias de Información aplicada a la reparacion de los sistemas de vehiculos livianos";
                    $mat5 = "English Oriented to Vehicle System Repair";
                    break;
                case "Secretariado Ejecutivo":
                    $mat1 = "Comunicación empresarial y servicio al cliente inclusivo";
                    $mat2 = "Destrezas digitales para el procesamiento y archivo de información fisicaelectronica";
                    $mat3 = "Gestión corporativa comercial";
                    $mat4 = "English Oriented to Executive Secretary";
                    break;
                case " Refrigeración y Aires Acondicionados":
                    $mat1 = "Electrotecnia";
                    $mat2 = "Fundamentos de Refrigeración y Aire Acondicionado";
                    $mat3 = "Dibujo Técnico";
                    $mat4 = "English for Communication";
                    break;
            }
           
        break;
        case "11":
            switch($especialidad){

                case "Informatica Empresarial":
                    $mat1 = "Interfaces G ráficas de Usuario";
                    $mat2 = "Programación";
                    $mat3 = "Mantenimiento de Equipo de Computo";
                    $mat4 = "Entorno Administrativo Informatico";
                    $mat5 = "English for Communication";
                break;
                case "Contabilidad":
                    $mat1 = "Gestión tributaria";
                    $mat2 = "Gestión en empresarial para contadores";
                    $mat3 = "English Oriented to Accounting";
                break;
                case "Turismo en Alimentos y Bebidas":
                    $mat1 = "Empresa turistica";
                    $mat2 = "Cocina basica";
                    $mat3 = "Bar y restaurante";
                    $mat4 = "Inglés para la conversación de turismo";
                    break;
                    case "Ejecutivo Comercial y Servicio al Cliente":
                        $mat1 = "Gestión comercial y comunicación para el servicio al cliente";
                        $mat2 = "Destrezas digitales para gestionar la informacion y el comercio electronico";
                        $mat3 = "English Oriented to Business and Customer Service Executive";
                    $mat4 = "Emprendimiento e innovación aplicada al Ejecutivo Comercial y de Servicio al cliente";
                    break;
                    case "Reparación de los Sistemas de Vehiculos Livianos":
                        $mat1 = "Mecanica de motores de vehiculos livianos";
                        $mat2 = "Autotrónica";
                        $mat3 = "Autotrónica";
                        $mat4 = "Emprendimiento e innovacion aplicada a la reparación de los sistemas de vehiculos livianos";
                        $mat5 = "English Oriented to Vehicle System Repair";
                        break;
                    case "Secretariado Ejecutivo":
                        $mat1 = "Comunicación empresarial y servicio al cliente inclusivo";
                        $mat2 = "Destrezas digitales para el procesamiento y archivo de información fisicaelectronica";
                        $mat3 = "Emprendimiento e innovación aplicada al Secretariado Ejecutivo";
                        $mat4 = "English Oriented to Executive Secretary";
                        break;
                    case "Productividad y Calidad":
                        $mat1 = "Gestión empresarial";
                        $mat2 = "Fundamentos del proceso";
                        $mat3 = "Control de Calidad";
                        $mat4 = "Empresas de la Calidad";
                        $mat5 = "English for Communication";
                        break;
            }
        break;
            
        case "12":
            switch($especialidad){

                case "Informatica Empresarial":
                    $mat1 = "Redes de Computadoras";
                    $mat2 = "Sistemas Operativos";
                    $mat3 = "Entorno Administrativo Informatico";
                    $mat4 = "English for Communication";
                break;
                case "Contabilidad":
                    $mat1 = "Gestión contable";
                    $mat2 = "Gestión en costos";
                    $mat3 = "English Oriented to Accounting";
                break;
                case "Secretariado Ejecutivo":
                    $mat1 = "Comunicación empresarial y servicio al cliente inclusivo";
                    $mat2 = "Destrezas digitales para el procesamiento y archivo de información fisicaelectronica";
                    $mat3 = "Gestión corporativa comercial";
                    $mat4 = "English Oriented to Executive Secretary";
                    break;
                case "Turismo en Alimentos y Bebidas":
                        $mat1 = "Cocina fusión";
                        $mat2 = "Cocina Internacional";
                        $mat3= "Inglés para la conversación de turismo";
                    break;
                 case " Refrigeración y Aires Acondicionados":
                        $mat1 = "Electrotecnia";
                        $mat2 = "Fundamentos de Refrigeración y Aire Acondicionado";
                        $mat3 = "Dibujo Tecnico";
                        $mat4 = "English for Communication";
                    break;
                case "Reparación de los Sistemas de Vehiculos Livianos":
                        $mat1 = "Mecanica de motores de vehiculos livianos";
                        $mat2 = "Autotrónica";
                        $mat3 = "Autotrónica";
                        $mat4 = "Emprendimiento e innovacion aplicada a la reparación de los sistemas de vehiculos livianos";
                        $mat5 = "English Oriented to Vehicle System Repair";
                    break;
                case "Electronida en Mantenimiento de Equipo de Computo":
                        $mat1 = "Mantenimiento de Sistemas Computacionales";
                        $mat2 = "Electrónica Digital ||";
                        $mat3 = "English for communication";
                break;
                case "Informatica en Redes":
                    $mat1 = "Redes de Computadoras";
                    $mat2 = "Sistemas Operativos de Red";
                    $mat3 = "English for Communication";
                break;
            }
        break;
    }
 }
 $pdf->Cell(95,6,utf8_decode($mat1),1,0,'B',0);
 $pdf->Cell(95,6,utf8_decode($mat2),1,1,'B',0);
 $pdf->Cell(95,6,utf8_decode($mat3),1,0,'B',0);
 $pdf->Cell(95,6,utf8_decode($mat4),1,1,'B',0);
 $pdf->Cell(95,6,utf8_decode($mat5),1,0,'B',0);
 $pdf->Cell(95,6,utf8_decode($mat6),1,1,'B',0);
 $pdf->Cell(95,6,utf8_decode($mat7),1,0,'B',0);
 $pdf->Cell(95,6,utf8_decode($mat8),1,1,'B',0);
 $pdf->Cell(95,6,utf8_decode($mat9),1,0,'B',0);
 $pdf->Cell(95,6,utf8_decode($mat10),1,1,'B',0);
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
 $pdf->Cell(62,6,utf8_decode('FIRMA DE ESTUDIANTE'),0,1,'B',0);
 $pdf->SetFont('Arial','',9);
 $pdf->Ln(5);
 $pdf->Cell(62,6,utf8_decode("  ".$Nombre_asistente." ".$Apellido),0,0,'B',0);/* . */
 $pdf->Cell(62,6,utf8_decode('_______________________________'),0,1,'B',0);
 // Instanciation of inherited class
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Ln(5);
$pdf->Cell(0, 0,utf8_decode("Contrato de Matricula"),0,1,'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(0, 20,utf8_decode("El suscrito (a)____________________________________N°Cédula_________________"),0,1,'L');
$pdf->Cell(0, -8,utf8_decode("y condición de estudiante; ____________________________________,
"),0,1,'L');
$pdf->Cell(0, 20,utf8_decode("de nivel de, _____, ratifico matricula en el Colegio Técnico Profesional de Parrita,"),0,1,'L');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0, 0,utf8_decode("ME COMPROMETO A:"),0,1,'L');
$pdf->SetFont('Arial','',12);
$pdf->Cell(0, 20,utf8_decode("      1.	Conocer, respetar y acatar el reglamento que rigen la enseñanza media y las "),0,1,'L');
$pdf->Cell(0, -8,utf8_decode("          disposiciones internas, reglamento de evaluación de los aprendizajes, reglamento interno"),0,1,'L');
$pdf->Cell(0, 20,utf8_decode("      	   institucional, circulares y otras comunicaciones de la institución."),0,1,'L');
$pdf->Cell(0, -8,utf8_decode("      2.	Asistir a las reuniones y actividades a las que sea debidamente convocado."),0,1,'L');
$pdf->Cell(0, 20,utf8_decode("      3.	Retirar el informe al hogar en las fechas previstas por el colegio."),0,1,'L');
$pdf->Cell(0, -8,utf8_decode("      4.	Portar el uniforme de acuerdo como lo establecen el reglamento interno, en las diversas"),0,1,'L');
$pdf->Cell(0, 20,utf8_decode("          actividades curriculares y extracurriculares."),0,1,'L');
$pdf->Cell(0, -8,utf8_decode("      5.	NO LLEVAR al colegio objetos o artículos que atenten contra la moral y seguridad de la"),0,1,'L');
$pdf->Cell(0, 20,utf8_decode("          comunidad estudiantil."),0,1,'L');
$pdf->Cell(0, -8,utf8_decode("      6.	Justificar las ausencias a lecciones, para no ser afectado en los rubros de evaluación de"),0,1,'L');
$pdf->Cell(0, 20,utf8_decode("          cada asignatura de su nivel académico correspondiente."),0,1,'L');
$pdf->Cell(0, -8,utf8_decode("      7.	Me comprometo asumir los gastos económicos de los daños en que incurra , hacia la"),0,1,'L');
$pdf->Cell(0, 20,utf8_decode("          infraestructura y equipo del centro educativo, de forma económica o material. "),0,1,'L');
$pdf->Cell(0, -8,utf8_decode("     8.  Salvaguardar el Enaltecimiento del buen nombre del Colegio Técnico Profesional de Parrita."),0,1,'L');
$pdf->Cell(0, 25,utf8_decode("Firmamos en Parrita a los ____ días del mes de _______________ del año 20____."),0,1,'C');
$pdf->Cell(0, 10,utf8_decode("                         _______________________________________            ______________"),0,1,'L');
$pdf->Cell(0, 0,utf8_decode("                                 Nombre y firma                                        Nº Cédula"),0,1,'C');
$pdf->Cell(0, 10,utf8_decode(""),0,1,'C');
$pdf->SetFont('Arial','',9);
$pdf->Cell(0, 5,utf8_decode("Tel.2779-9197"),0,2,'C');
$pdf->Cell(0, 5,utf8_decode("Puntarenas, Parrita, Mercado Municipal de Parrita, mano derecha, camino a SITRADIQUE, aún costado de Esc. La Julieta."),0,2,'C');
$pdf->Cell(0, 5,utf8_decode("ctp.deparrita@mep.go.cr"),0,2,'C');
$pdf->Output();
?>
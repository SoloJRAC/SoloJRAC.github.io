<?php

include ("conexion.php");

$user= $_POST['user'];
$password=$_POST['password'];

$consulta= "SELECT  `password` FROM `usuarios permitidos` WHERE`User`='$user' && `password`='$password'";
$datos2=mysqli_query($conection,$consulta);
$passwordDB=mysqli_fetch_column($datos2);
if($passwordDB){?>
    <style>
#form{
  opacity: 0;
  position: absolute;
}
  </style>
    <form action="Home.php" method="POST" id="form">
<input type="text" name="password" id="caja_valor" value="<?php echo $password ?>">
<button id="click" class="click" type="submit" ></button> 
<script>
        click.click();
    </script>
<?php
}else{
    include("index.html");?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script>
    swal({
  title: "ERROR",
  text: "Contraseña o Usuario incorrectos",
  icon: "error",
  
});
   </script>
<?php
}
?>
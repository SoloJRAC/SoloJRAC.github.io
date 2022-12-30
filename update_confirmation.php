<?php
 include("tabla-estudiantes.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CTP Parrita</title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<script>
swal("Excelente!", "Los datos del estudiante han sido actualizados!", "success", {
  buttons: {
    cancel: "Aceptar",
    },
    
  },
)
.then((value) => {
  switch (value) {
 
    default:
      window.location= "tabla-estudiantes.php";
  }
});
</script>
</html>



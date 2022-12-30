<?php
include("tabla-estudiantes.php");
$cedula = $_GET['Cedula_est'];
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

  <style>
    #form {
      opacity: 0;
    }
  </style>

  <script>
    cancel.onclick = function() {
      click01.click();
    };
  </script>

  <script>
    swal({
        title: "¿Estás seguro de querer eliminar este registro?",
        text: "Una vez eliminado no tendrás forma alguna de recuperarlo",
        icon: "warning",
        buttons: {
          cancel: "Cancelar",
          catch: {
            text: "Eliminar",
            value: "catch",
          }
        },

      }, )
      .then((value) => {
        switch (value) {

          case "catch":
            let encodedParam1 = encodeURIComponent(<?php echo $cedula ?>);
            let url = "Delete.php?Cedula_est=" + encodedParam1;
            window.location= url;

            break; 

          default:
          window.location= "tabla-estudiantes.php";
        }
      });
  </script>
</body>

</html>
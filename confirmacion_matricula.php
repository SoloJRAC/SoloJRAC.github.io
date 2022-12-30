
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
#form{
  opacity: 0;
}
  </style>
<form action="pdf.php" method="POST" id="form">
<input type="text" name="caja_valor" id="caja_valor" value="<?php echo $cedula ?>">
<input type="text" name="password" id="caja_valor" value="<?php echo $password; ?>">
<button id="click20" class="click" type="submit" ></button>
</form>
</body>
<form action="Home.php" method="POST" id="form">
<input type="text" name="password" id="caja_valor" value="<?php echo $password; ?>">
<button id="click01" class="click" type="submit" ></button>
</form>
<script>
	cancel.onclick=function(){
		click01.click();
	};
</script>

<script>
swal("Excelente!", "El Estudiante '<?php echo $cedula ?>' ha sido Matriculado!", "success", {
  buttons: {
    cancel: "Aceptar",
    catch: {
      text: "Imprimir comprobante",
      value: "catch",
    }
    },
    
  },
)
.then((value) => {
  switch (value) {

    case "catch":
      click20.click();
      window.open("Home.php");
      break;
 
    default:
  }
});
</script>
</html>



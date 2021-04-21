<?php
/**
 * Controles en formularios (2) 4-2 - controles-formularios-2-04-2.php
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Datos personales 4 (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Datos personales 4 (Resultado)</h1>

<?php
if(empty($_GET['correo'])){
  echo "<p style='color:#FF0000'>Falta su correo electronico</p>";
}
if(empty($_GET['correo2'])){
  echo "<p style='color:#FF0000'>Falta confirmar su correo electronico</p>";
}

if(isset($_GET['correo']) && $_GET['correo'] != ""  && isset($_GET['correo2']) && $_GET['correo2'] != ""){
  if ($_GET['correo'] == $_GET['correo2']) {
    echo "Su direccion de correo es ".$_GET['correo']. " </br>";
  }
  else {
    echo "<p style='color:#FF0000'>Los correos no coinciden</p>";
  }

}


if(empty($_GET['recibir'])) {
  echo "<p style='color:#FF0000'>Debes decir si quieres recibir correos o no</p>";
}
elseif(isset($_GET['recibir'])) {
  echo "Quiere recibir correos?? Respuesta: ".$_GET['recibir']. " </br>";
}


?>

  <p><a href="controles-formularios-2-04-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>

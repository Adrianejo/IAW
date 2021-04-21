<?php
/**
 * Controles en formularios (2) 2-2 - controles-formularios-2-02-2.php
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
    Datos personales 2 (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Datos personales 2 (Resultado)</h1>

<?php
if(empty($_GET['edad'])) {
  echo "<p style='color:#FF0000'>Debes de rellenar el campo de edad</p>";
}
elseif($_GET['edad'] > 130) {
  echo "<p style='color:#FF0000'>Debes de introducir un valor menor que 130</p>";
}
elseif($_GET['edad'] < 5) {
  echo "<p style='color:#FF0000'>Debes de introducir un valor mayor que 5</p>";
}
else{
  echo "La edad es : ".$_GET['edad']. " </br>";
}

if(empty($_GET['peso'])) {
  echo "<p style='color:#FF0000'>Debes de rellenar el campo de peso</p>";
}
elseif($_GET['peso'] > 150) {
  echo "<p style='color:#FF0000'>Debes de introducir un valor menor que 150</p>";
}
elseif($_GET['peso'] < 10) {
  echo "<p style='color:#FF0000'>Debes de introducir un valor mayor que 10</p>";
}
else{
  echo "El peso es : ".$_GET['peso']. " </br>";
}


?>

  <p><a href="controles-formularios-2-02-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>

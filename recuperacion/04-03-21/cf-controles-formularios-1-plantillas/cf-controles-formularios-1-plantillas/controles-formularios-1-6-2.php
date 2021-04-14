<?php
/**
 * Controles en formularios (1) 6-2 - controles-formularios-1-6-2.php
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
    Colores 1 (Resultado).
    Controles en formularios (1). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Colores 1 (Resultado)</h1>

<?php
if (isset($_GET['fondo'])) {
  echo "Ha escogido cambiar el: ".$_GET['fondo']. " </br>";
}

if (isset($_GET['letra'])) {
  echo "Ha escogido cambiar la: ".$_GET['letra']. " </br>";
}
if (!isset($_GET['fondo']) & !isset($_GET['letra'])) {
  echo "<p style='color:#FF0000'>Debes seleccionar una opcion</p>";
}


?>

  <p><a href="controles-formularios-1-6-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>

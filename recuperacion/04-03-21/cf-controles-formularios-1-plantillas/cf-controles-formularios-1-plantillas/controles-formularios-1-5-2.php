<?php
/**
 * Controles en formularios (1) 5-2 - controles-formularios-1-5-2.php
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
    Fruta preferida 2 (Resultado).
    Controles en formularios (1). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Fruta preferida 2 (Resultado)</h1>

  <p>Esta es su fruta favorita:</p>

<?php
if (isset($_GET['fruta'])) {
  echo "<img src='img/frutas/".$_GET['fruta']."' >";
}
else {
  echo "<p style='color:#FF0000'>Debes seleccionar una opcion</p>";
}


?>

  <p><a href="controles-formularios-1-5-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>

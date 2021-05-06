<?php
/**
 * Dibujos comunes - dibujos-comunes-2.php
 *
 * @author Escriba aquí su nombre
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Dibujos comunes (Resultado).
    Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Dibujos comunes (Resultado)</h1>

<?php
$cantidad = $_GET['cantidad'];
$tipo = $_GET['tipo'];

for ($i=1; $i <= $cantidad ; $i++) { 
  $animales = rand(128005, 128024);
  $animales1 = rand(128005, 128024);


  if (isset($tipo)) {
    echo "<p style=font-size: 400%; margin: 0;>&#$animales; </p>";
    echo "<p style=font-size: 400%; margin: 0;>&#$animales1; </p>";
  }
  else {
    for ($i=1; $i <= $cantidad ; $i++) { 
      $reloges = rand(128336, 128355);
      $reloges1 = rand(128336, 128355);
  
        if (isset($tipo)) {
          echo "<p style=font-size: 400%; margin: 0;>&#$reloges; </p>";
          echo "<p style=font-size: 400%; margin: 0;>&#$reloges1; </p>";
        }
    }
  }
}
  




?>
  <p><a href="dibujos-comunes-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>

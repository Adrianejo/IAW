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

for ($i=0; $i <= $_GET['cantidad'] ; $i++) { 
  $animales = rand(128005, 128024);
  $animales1 = rand(128005, 128024);
  $relojes = rand(128336, 128355);
  $relojes1 = rand(128336, 128355);
  $emoticonos = rand(128512, 128531);
  $emoticonos1 = rand(128512, 128531);


  if ($_GET['tipo'] == "animales") {
    echo "<p style=font-size: 400%; margin: 0;>&#$animales; </p>";
    echo "<p style=font-size: 400%; margin: 0;>&#$animales1; </p>";
  }
  elseif ($_GET['tipo'] == "relojes") {
    echo "<p style=font-size: 400%; margin: 0;>&#$relojes; </p>";
    echo "<p style=font-size: 400%; margin: 0;>&#$relojes1; </p>";
  }
  elseif ($_GET['tipo'] == "emoticonos") {
    echo "<p style=font-size: 400%; margin: 0;>&#$emoticonos; </p>";
    echo "<p style=font-size: 400%; margin: 0;>&#$emoticonos1; </p>";
  }
  
}
  




?>
  <p><a href="dibujos-comunes-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Adrian Menaza</p>
  </footer>
</body>
</html>

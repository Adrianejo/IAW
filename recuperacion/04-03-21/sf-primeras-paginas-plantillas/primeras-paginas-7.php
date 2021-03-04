<?php
/**
 * Primeras páginas. Sin formularios. 7 - primeras-paginas-7.php
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
    Saludo.
    Primeras páginas. Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Saludo</h1>

  <p>Actualice la página para cambiar el tamaño del saludo.</p>

<?php

$size= rand(200,800);

echo ' <p style="font-size:'.$size.'%">¡Hola!</p>';
?>

  <footer>
    <p>Adrian Menaza</p>
  </footer>
</body>
</html>

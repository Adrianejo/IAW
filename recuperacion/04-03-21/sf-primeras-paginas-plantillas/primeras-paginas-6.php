<?php
/**
 * Primeras páginas. Sin formularios. 6 - primeras-paginas-6.php
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
    Código de color.
    Primeras páginas. Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Código de color</h1>

  <p>Actualice la página para mostrar un nuevo valor.</p>

<?php

$rgb1= rand(0,250);
$rgb2= rand(0,250);
$rgb3= rand(0,250);

echo "Color: rgb($rgb1,$rgb2,$rgb3)";
?>

  <footer>
    <p>Adrian Menaza</p>
  </footer>
</body>
</html>

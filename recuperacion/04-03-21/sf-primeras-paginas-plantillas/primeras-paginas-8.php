<?php
/**
 * Primeras páginas. Sin formularios. 8 - primeras-paginas-8.php
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
    Emoticono.
    Primeras páginas. Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Emoticono</h1>

  <p>Actualice la página para mostrar otro emoticono.</p>

<?php

$unicode=rand(128512,128586);
$size= rand(200,800);

echo '<p style="font-size:'.$size.'%">&#'.$unicode.';</p>';

?>

  <footer>
    <p>Adrian Menaza</p>
  </footer>
</body>
</html>

<?php
/**
 * Primeras páginas. Sin formularios. 4 - primeras-paginas-4.php
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
    Dado digital.
    Primeras páginas. Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Dado digital</h1>
 
  <p>Actualice la página para mostrar un nuevo valor.</p>
 

<?php
$dado = rand(1,6);

echo "<img src='img/".$dado.".svg' >";
?>

  <footer>
    <p>Adrian Menaza</p>
  </footer>
</body>
</html>

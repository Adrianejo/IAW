<?php
/**
 * Matrices (1) 12 - matrices-1-12.php
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
    Negación.
    Matrices (1). Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Negación de bits</h1>

  <p>Actualice la página para mostrar una secuencia aleatoria de bits y su complementaria.</p>

<?php

$bit= [];
$resultados= [];

for ($i=0; $i < 10; $i++) { 
  $bit= rand(0,1);
  echo $bit;
  $resultados[]= $bit;
}

"<ol>";
foreach ($resultados as $key => $value) {
  echo "<li>";
  echo $value;
  echo "</li>";
}
"</ol>";
?>

  <footer>
    <p>Adrian Menaza</p>
  </footer>
</body>
</html>

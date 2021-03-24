<?php
/**
 * Matrices (1) 1 - matrices-1-01.php
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
    Dado.
    Matrices (1). Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Dado</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php

$dado = rand(1,6);
$numero = ["", "uno", "dos", "tres", "cuatro", "cinco" ,"seis"];

echo "<img src='img/".$dado.".svg' >";

echo "Has sacado un ".$numero[$dado]."";

"<ol>";
foreach ($numero as $key => $value) {
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

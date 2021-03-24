<?php
/**
 * Matrices (1) 3 - matrices-1-03.php
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
    Nombres de animales.
    Matrices (1). Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Nombres de animales</h1>

  <p>Actualice la página para mostrar un nuevo animal.</p>

<?php

$nombre = ["", "ballena", "caballito-mar", "camello", "cebra", "elefante", "hipopotamo", 
"jirafa", "leon", "leopardo", "medusa", "mono", "oso-blanco", "oso", "pajaro", "pinguino", 
"rinoceronte", "serpiente", "tigre", "tortuga-marina","tortuga"
];

$animal = rand(1, count($nombre));

echo $nombre[$animal];

echo "<img src='img/animales/".$nombre[$animal].".svg' >";

"<ol>";
foreach ($nombre as $key => $value) {
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


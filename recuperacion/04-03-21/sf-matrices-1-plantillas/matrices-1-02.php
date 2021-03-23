<?php
/**
 * Matrices (1) 2 - matrices-1-02.php
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
    Animales.
    Matrices (1). Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Animales</h1>

  <p>Actualice la página para mostrar un nuevo animal.</p>

<?php

$foto = ["ballena", "caballito-mar", "camello", "cebra", "elefante", "hipopotamo", 
"jirafa", "leon", "leopardo", "medusa", "mono", "oso-blanco", "oso", "pajaro", "pinguino", 
"rinoceronte", "serpiente", "tigre", "tortuga-marina","tortuga"
];

$animal = rand(0, count($foto));

echo "<img src='img/animales/".$foto[$animal].".svg' >";

?>

  <footer>
    <p>Adrian Menaza</p>
  </footer>
</body>
</html>

<?php
/**
 * Matrices (1) 13 - matrices-1-13.php
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
    Cambio de bits.
    Matrices (1). Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Cambio de bits</h1>

  <p>Actualice la página para mostrar una secuencia aleatoria de bits y la detección de cambios de bits consecutivos en la secuencia.</p>

<?php

$numeroBits = 10;
$resultados = [];

echo "A.- ";
for ($i=0; $i < 10; $i++) { 
    $bit = rand(0,1);
    echo $bit." ";
    $resultados[] = $bit;
}

echo "<br>Â.-  :";
foreach ($resultados as $key => $value) {
    if($key > 0){
        if($resultados[$key] == $resultados[$key-1]){
            echo "0 ";
        }else{
            echo "1 ";
        }
    }
}

?>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>

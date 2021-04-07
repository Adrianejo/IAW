<?php
/**
 * Matrices (1) 14 - matrices-1-14.php
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
    De binario a Gray.
    Matrices (1). Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Convertidor de binario a código de Gray</h1>

  <p>Actualice la página para mostrar una secuencia aleatoria de bits y su conversión a código de Gray.</p>

<?php
$numero = 10;
$inicial = [];

for ($i = 0; $i < $numero; $i++) {
    $inicial[$i] = rand(0, 1);
}

echo "B: ";
foreach ($inicial as $bit) {
    echo  $bit ;
}

$resultado = [];
$resultado[0] = $inicial[0];
for ($i = 0; $i < $numero - 1; $i++) {
    if ($inicial[$i] == $inicial[$i+1]) {
        $resultado[$i+1] = 0;
    } else {
        $resultado[$i+1] = 1;
    }
}

echo "G: ";
foreach ($resultado as $bit) {
    echo  $bit;
}
?>
  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>

<?php
/**
 * Matrices (1) 16 - matrices-1-16.php
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
    El bit más común.
    Matrices (1). Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>El bit más común</h1>

  <p>Actualice la página para mostrar tres secuencias aleatorias de bits y una cuarta secuencia que indica cuál es el bit más común en esa posición.</p>

<?php
$numero = 10;

$inicial1 = [];
for ($i = 0; $i < $numero; $i++) {
    $inicial1[$i] = rand(0, 1);
}
echo "A: ";
foreach ($inicial1 as $bit) {
    echo $bit;
}

$inicial2 = [];
for ($i = 0; $i < $numero; $i++) {
    $inicial2[$i] = rand(0, 1);
}
echo "B: ";
foreach ($inicial2 as $bit) {
    echo  $bit;
}

$inicial3 = [];
for ($i = 0; $i < $numero; $i++) {
    $inicial3[$i] = rand(0, 1);
}
echo "C: ";
foreach ($inicial3 as $bit) {
    echo  $bit;
}

$resultado = [];
for ($i = 0; $i < $numero; $i++) {
    if ($inicial1[$i] + $inicial2[$i] + $inicial3[$i] > 1) {
        $resultado[$i] = 1;
    } else {
        $resultado[$i] = 0;
    }
}

echo "R: ";
foreach ($resultado as $bit) {
    echo  $bit;
}

?>

  <footer>
    <p>Adrian Menaza</p>
  </footer>
</body>
</html>

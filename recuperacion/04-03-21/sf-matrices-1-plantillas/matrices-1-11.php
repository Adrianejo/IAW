<?php
/**
 * Matrices (1) 11 - matrices-1-11.php
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
    Tirada de dados.
    Matrices (1). Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Tirada de dados</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php

$numero = rand(2, 7);

$dados = [];
$resultados= [];
for ($i = 0; $i < $numero; $i++) {
    $dados= rand(1, 6);
    echo "<img src='img/".$dados.".svg' >";
    $resultados[]= $dados;
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

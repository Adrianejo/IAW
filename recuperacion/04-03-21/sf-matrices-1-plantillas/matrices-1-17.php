<?php
/**
 * Matrices (1) 17 - matrices-1-17.php
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
    Partida de dados.
    Matrices (1). Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Partida de dados</h1>

  <p>Actualice la página para mostrar una nueva partida de dados.</p>

<?php

$numero = rand(2, 7);

echo "<h2><br>Jugador 1</h2>";
$dados1 = [];
for ($i = 0; $i < $numero; $i++) {
    $dados1[$i] = rand(1, 6);
}

foreach ($dados1 as $dado) {
  echo "<img src='img/".$dados.".svg' >";
}

echo "<h2><br>Jugador 2</h2>";
$dados2 = [];
for ($i = 0; $i < $numero; $i++) {
    $dados2[$i] = rand(1, 6);
}

foreach ($dados2 as $dado) {
  echo "<img src='img/".$dados.".svg' >";
}

echo "<h2><br>Resultado</h2>";
$gana1 = 0;
$gana2 = 0;
$empate = 0;
for ($i = 0; $i < $numero; $i++) {
    if ($dados1[$i] > $dados2[$i]) {
        $gana1++;
    } elseif ($dados1[$i] < $dados2[$i]) {
        $gana2++;
    } else {
        $empate++;
    }
}

if ($gana1 > $gana2) {
    echo "  <p>En conjunto, ha ganado el jugador 1.</p>";
} elseif ($gana1 < $gana2) {
    echo "  <p>En conjunto, ha ganado el jugador 2.</p>";
} else {
    echo "  <p>En conjunto, han empatado.</p>";
}

?>

  <footer>
    <p>Adrian Menaza</p>
  </footer>
</body>
</html>


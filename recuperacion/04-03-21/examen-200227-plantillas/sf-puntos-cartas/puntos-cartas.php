<?php
/**
 * Puntos en cartas - puntos-cartas.php
 *
 * @author Escriba aquí su nombre
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Puntos en cartas.
    Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Puntos en cartas</h1>

  <p>Cada jugador saca 7 cartas (que se pueden repetir). Además se sacan dos cartas "ganadoras". Si el número de una carta (no el palo) de un jugador coincide con alguna de las dos cartas, el jugador acumula el valor de la carta en puntos. El jugador que acumula más puntos, gana.</p>

<?php
$palo= ["c","p","d","t"];
$totaljugadora= 0;
$totaljugadorb= 0;

echo "<p><h2>Jugador A</h2></p>";
for ($i=1; $i <= 7; $i++) { 
  $palosacado1 = $palo[rand(0,3)];
  $numero1= rand(1,10);
  echo '<img src="img/'.$palosacado1.$numero1.'.svg" alt="8" width="100">';
}
echo "<p><h2>Jugador B</h2></p>";
for ($i=1; $i <= 7; $i++) { 
  $palosacado2 = $palo[rand(0,3)];
  $numero2= rand(1,10);
  echo '<img src="img/'.$palosacado2.$numero2.'.svg" alt="8" width="100">';
}
echo "<p><h2>Cartas ganadoras</h2></p>";
for ($i=1; $i <= 2; $i++) { 
  $palosacado3 = $palo[rand(0,3)];
  $numero3= rand(1,10);
  echo '<img src="img/'.$palosacado3.$numero3.'.svg" alt="8" width="100">';

  if ($numero3 == $numero1) {
    $totaljugadora= $totaljugadora + $numero3;
  }
  if ($numero3 == $numero2) {
  $totaljugadorb= $totaljugadorb + $numero3;
  }
  if ($totaljugadora > $totaljugadorb) {
    $ganador = "Jugador A";
  }
  else {
    $ganador = "Jugador B";
  }
}
echo "<p>Jugador A: $totaljugadora puntos. Jugador B: $totaljugadorb puntos.  ¡Ha ganado el $ganador!</p>";



?>
  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>

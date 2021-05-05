<?php
/**
 * Descarta palo - descarta-palo-2.php
 *
 * @author Florindo López Delgado
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Descarta palo (Resultado).
    Con formularios.
    Florindo López Delgado
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Descarta palo (Resultado)</h1>

<?php
$cantidad = $_POST['cantidad'];
$palo = $_POST['palo'];
$palos = ["c","d","p","t"];
$totalc = 0;
$totald = 0;
$totalp = 0;
$totalt = 0;

for ($i=1; $i <= $cantidad ; $i++) { 
  $palosacado = $palos[rand(0,3)];
  $cartasacada= rand(1,10);
  echo '<img src="img/'.$palosacado.$cartasacada.'.svg" alt="8" width="100">';
  if ($palosacado == "c") {
    $totalc= $totalc + 1;
  }
  elseif ($palosacado == "d") {
    $totald= $totald + 1;
  }
  elseif ($palosacado == "p") {
    $totalp= $totalp + 1;
  }
  elseif ($palosacado == "t") {
    $totalt= $totalt + 1;
  }
}
echo "<br>El total de cartas de corazones es $totalc</br>";
echo "<br>El total de cartas de diamantes es $totald</br>";
echo "<br>El total de cartas de diamantes es $totalp</br>";
echo "<br>El total de cartas de diamantes es $totalt</br>";
?>
  <p><a href="descarta-palo-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
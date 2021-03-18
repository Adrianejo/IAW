<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Muestra cartas.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Muestra Cartas</h1>

<?php
$array=array(
    "p",
    "c",
    "d",
    "t",
);
$palo = $array [rand(0,3)];

$cantidad= rand(3,12);
$p=0;
$c=0;
$d=0;
$t=0;

for ($i=0; $i <$cantidad ; $i++) { 
  $palo = $array [rand(0,3)];
  $cantidad1= rand(1,10);
  if ($palo == "p") {
    $p++;
  }else if ($palo == $c) {
    $c++;
  } else if ($palo == $d) {
    $d++;
  } else if ($palo == $t) {
    $t++;
  }
  
  echo    "<img src='img/".$palo.$cantidad1.".svg' width='140' height='140'>";
}
echo "<ol>";
echo "<li>Hay ".$p." cartas de picas</li>";
echo "<li>Hay ".$c." cartas de corazones</li>";
echo "<li>Hay ".$d." cartas de diamantes</li>";
echo "<li>Hay ".$t." cartas de trevoles</li>";
echo "</ol>";
?>
<footer>
    <p>Adrian Menaza</p>
  </footer>
</body>
</html>
